if (document.getElementById('my-overlay')) {
    document.getElementById('my-overlay').remove();
} else {
    let div = document.createElement('div');
    div.id = 'my-overlay';
    div.style.width = '100%';
    div.style.height = '100%';
    div.style.backgroundImage = 'linear-gradient(#ff0000,#ffffff)';
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
    document.body.appendChild(div);
}