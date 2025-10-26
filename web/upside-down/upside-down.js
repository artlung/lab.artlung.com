(function () {
    // only add a unique classname to the body if it's not there, remove if it is
    if (document.body.classList.contains('upside-down')) {
        document.body.classList.remove('upside-down');
        window.scrollTo(0, 0);
        return;
    } else {
        document.body.classList.add('upside-down');
        window.scrollTo(0, 0);
    }

    // if we already injected the style, certainly don't do that again
    if (document.getElementById('upside-down-style')) {
        return;
    }

    // calculate the height of all content
    const body = document.body;
    const html = document.documentElement;
    const heightOfAllContent = Math.max(
        body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight
    );


    // if you key in + make it faster, - make it slower
    const style = document.createElement('style');
    // add an id so we know if we already added it
    style.id = 'upside-down-style';
    style.textContent = `html:has(body.upside-down) {
  background: repeating-conic-gradient(#ccc3 0 25%, #0000 0 50%) 50% 0 / 10vw 10vh;
}
html body.upside-down {
  transform-origin: 50% 50%;
  scale: -1;
  min-height: ${heightOfAllContent}px;
}
`;
    document.head.appendChild(style);
})();