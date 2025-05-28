// find link rel=webmention, no matter the case of the tag
(function() {
    var links = document.getElementsByTagName('link');
    for (var i = 0; i < links.length; i++) {
        if (links[i].rel && (links[i].rel.toLowerCase() === 'webmention'
        || links[i].rel.toLowerCase().indexOf('webmention') !== -1
        )) {
            const webmentionUrl = links[i].href;
            let style = document.createElement('style');
            style.innerHTML = `
                body::before {
                    content: "Webmention URL: ${webmentionUrl}";
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    background-color: green;
                    color: white;
                    padding: 0.3rem;
                    font-size: 2rem;
                    z-index: 1000;
                    text-align: center;
                }
            `;
            document.head.appendChild(style);
            return;
        }
    }
})();