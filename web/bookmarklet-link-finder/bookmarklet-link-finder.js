(function () {
    const style_element_id = 'lab-artlung-bookmarklet-link-finder';
    if (document.getElementById(style_element_id)) {
        document.getElementById(style_element_id).remove();
    }
    const input = window.prompt('What do you want to find?');
    if (!input) {
        alert('You must enter a prompt.');
        return;
    }
    const what = encodeURIComponent(input);
    const style = document.createElement('style');
    style.id = style_element_id;
    style.textContent = `a[href*="${what}"] {
        outline: 2px solid hotpink !important;
        border-radius: 10px;
        transition: 50ms outline;
        display: inline-block;
    }
    a[href*="${what}"]:hover {
        outline: 5px solid hotpink !important;
    }
    a[href*="${what}"]::before { content: '🔗';display: inline;
    }`;
    document.head.appendChild(style);
})();