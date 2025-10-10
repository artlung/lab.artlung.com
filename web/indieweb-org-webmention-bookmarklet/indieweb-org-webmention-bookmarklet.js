(function() {
    if (window.location.hostname !== 'indieweb.org') {
        alert('This bookmarklet only works on indieweb.org');
        return;
    }
    const pageUrl = window.location.href;
    const webmentionCheckerUrl = 'https://webmention.io/api/mentions.jf2?target=' + pageUrl;
    fetch(webmentionCheckerUrl)
        .then(response => response.json())
        .then(data => {
            if (data.children && data.children.length > 0) {
                const entries = data.children.map(entry => {
                    const publishedDate = entry.published ? new Date(entry.published).toLocaleDateString() : (entry.wm - entry.received ? new Date(entry.wm - entry.received).toLocaleDateString() : 'Unknown date');
                    const sourceUrl = entry.url ? entry.url : (entry.wm - source ? entry.wm - source : '#');
                    // Not using ay of these below for now. Keep it a list for now.
                    const authorName = entry.author && entry.author.name ? entry.author.name : 'Anonymous';
                    const authorUrl = entry.author && entry.author.url ? entry.author.url : null;
                    const authorPhoto = entry.author && entry.author.photo ? entry.author.photo : null;
                    const content = entry.content && entry.content.html ? entry.content.html : (entry.content && entry.content.text ? entry.content.text : '');
                    return `
                        <li>
                                <span>${publishedDate}</span>
                                <a href="${sourceUrl}" target="_blank" rel="noopener">${sourceUrl}</a>
                        </li>
                    `;
                }).join('');

                const popoverId = 'webmention-popover-' + Math.random().toString(36).substring(2, 15);
                const popover = document.createElement('div');
                popover.setAttribute('popover', 'auto');
                popover.setAttribute('id', popoverId);
                popover.style.width = '80vw';
                popover.style.overflow = 'auto';
                popover.style.maxHeight = '80vh';
                popover.style.padding = '1rem';
                popover.style.fontFamily = 'monospace';

                // inject into the page, then call showPopover on it
                popover.innerHTML = `
                        <h3>Webmentions (${data.children.length}) <em style="color: hotpink;background:linear-gradient(to top, yellow 0.2rem, #0000 0);">
                        Warning: these might be spam</em></h3>
                        <ul>${entries}</ul>
                        <small>
                            <a href="${webmentionCheckerUrl}" target="_blank" rel="noopener">View raw data</a>
                        </small>
                `;
                document.body.appendChild(popover);
                document.getElementById(popoverId).showPopover();
            } else {
                alert('No webmentions found for this page.');
            }
        })
        .catch(error => {
            alert('Error fetching webmentions: ' + error);
        });
})();