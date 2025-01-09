(function (){if (document.getElementById('my-overlay')) {
    document.getElementById('my-overlay').remove();
} else {
    let div = document.createElement('div');
    div.id = 'my-overlay';
    div.style.width = '100%';
    div.style.height = '100%';
    // adjust this with your own image, perhaps 'url(https://example.com/image.jpg)'
    div.style.backgroundImage = 'conic-gradient(from 45deg,#ff0000 25%,#ffffff,pink 0 50%,#00ff00 0 75%,#0000ff 0)';
    // size this with the dimensions (and units) of your image
    div.style.backgroundSize = '600px 450px';
    div.style.backgroundRepeat = 'no-repeat';
    div.style.backgroundColor = 'rgba(0,0,0,0.2)';
    div.style.backgroundPosition = '50% 50%';
    div.style.position = 'fixed';
    div.style.opacity = '0.5';
    div.style.zIndex = '99999';
    div.style.cursor = 'all-scroll';
    div.style.top = '0';
    div.style.left = '0';
    div.style.pointerEvents = 'none';
    // Optionally, some text
    div.innerText = 'FPO';
    div.style.display = 'flex';
    div.style.justifyContent = 'center';
    div.style.alignItems = 'center';
    // impact color white
    div.style.color = 'white';
    div.style.fontFamily = 'sans-serif';
    div.style.fontSize = '8rem';
    div.style.fontWeight = 'bold';
    // user select none
    div.style.userSelect = 'none';
    div.style['-webkit-user-select'] = 'none';
    document.body.appendChild(div);
}})();