document.addEventListener('DOMContentLoaded', function() {
    const labels = document.querySelectorAll('#controls div.segment div label');
    for (var i = 0; i < labels.length; i++) {
        labels[i].addEventListener('click', updateColors);
        labels[i].addEventListener('mouseover', function() {
            this.click();
        });
        labels[i].addEventListener('touchstart', function() {
            this.click();
        });
    }
    if (document.location.hash.length > 1 && document.location.hash.split('#')[1].length === 6) {
        updateInputsFromHash(document.location.hash);
    }
    updateColors();
});

// listen for popstate event
window.addEventListener('popstate', function(event) {
    if (event.state && event.state.color) {
        updateInputsFromHash('#' + event.state.color);
        updateColors();
    }
});






const updateColors = function() {
    var figureColor = '#';
    var groundColor = '#';
    var inputs = document.querySelectorAll('#controls div.segment div input[type="radio"]:checked');
    for (var i = 0; i < inputs.length; i++) {
        if (i < 3) {
            figureColor += String(inputs[i].value);
        } else {
            groundColor += String(inputs[i].value);
        }
    }
    document.querySelectorAll('.ground').forEach(function(element) {
        element.style.backgroundColor = groundColor;
        element.style.color = groundColor;
    });
    document.querySelectorAll('.figure').forEach(function(element) {
        element.style.backgroundColor = figureColor;
        element.style.color = figureColor;
    });
    document.querySelector('#figureText').textContent = figureColor;
    document.querySelector('#groundText').textContent = groundColor;
    // new pushState
    var combinedHexValue = '#' + figureColor.replace('#', '') + groundColor.replace('#', '');
    var newUrl = document.location.href.split('#')[0] + combinedHexValue;
    history.pushState({
        color: combinedHexValue
    }, 'Color State', newUrl);

}

const updateInputsFromHash = function(colorUrl) {
    if (!colorUrl) {
        colorUrl = document.location.href;
    }
    if (colorUrl.length && colorUrl.split('#')[1].length > 1) {
        let colors = colorUrl.split('#')[1].toUpperCase();
        colors = colors.replace(/[^0369CF]/g, '0');
        var divs = document.querySelectorAll('#controls div.segment div');
        for (var i = 0; i < colors.length; i++) {
            divs[i].querySelector('input[type="radio"][value="' + colors[i] + '"]').checked = true;
        }
    }
};



