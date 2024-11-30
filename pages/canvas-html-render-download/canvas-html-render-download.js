const renderThisHtml = `<div style="background:conic-gradient(#000 25%,#0000 25% 50%,#fff 50% 75%,#0000 0) 0 0 / 40px 40px,linear-gradient(red,yellow,blue);height:100%;width:100%;aspect-ratio:1"></div>`;

renderHtmlToCanvas( document.getElementById( 'theCanvas' ), renderThisHtml );

function renderHtmlToCanvas( canvas, html ) {

    if (!canvas) {
        return;
    }
    const ctx = canvas.getContext( '2d' );
    // https://html.spec.whatwg.org/multipage/canvas.html#concept-canvas-origin-clean

    const svg = `
<svg xmlns="http://www.w3.org/2000/svg" width="${canvas.width}" height="${canvas.height}">
<foreignObject width="100%" height="100%">
    <div xmlns="http://www.w3.org/1999/xhtml">${html}</div>
</foreignObject>
</svg>`;

    const svgBlob = new Blob( [svg], { type: 'image/svg+xml;charset=utf-8' } );
    const svgObjectUrl = URL.createObjectURL( svgBlob );
    const tempImg = new Image();
    tempImg.addEventListener( 'load', function() {
        ctx.drawImage( tempImg, 0, 0 );
    });

    tempImg.src = svgObjectUrl;
}

document.getElementById('downloadButton').addEventListener('click', function() {
    const errors = document.querySelectorAll('.error');
    errors.forEach(error => error.remove());
    downloadCanvas(this, 'theCanvas', 'canvas.png');
});

function downloadCanvas(link, canvasId, filename) {
    try {
        link.href = document.getElementById(canvasId).toDataURL();
    } catch (e) {
        const error = document.createElement('div');
        error.className = 'error';
        error.textContent = e.message;
        document.getElementById('testArea').appendChild(error);
        // in 5 seconds fade it out and remove it
        setTimeout(() => {
            error.style.opacity = 0;
            error.remove();
        }, 5000);
    }
    link.download = filename;
    console.log(link.href);

}
