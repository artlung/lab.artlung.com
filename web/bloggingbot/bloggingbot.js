function randomWebColor() {
    var number_of_colors = 0xffffff;
    var num = Math.round(Math.random() * number_of_colors);
    return ('#0' + num.toString(16)).replace(/^#0([0-9a-f]{6})$/i, '#$1');
}

function foregroundColorFromWebColor(color) {
    // #RRGGBB
    // 0123456
    var bg = {
        R: parseInt(color.substr(1, 2), 16),
        G: parseInt(color.substr(3, 2), 16),
        B: parseInt(color.substr(5, 2), 16)
    };
    var nThreshold = 105;
    var bgDelta = ((bg.R * 0.299) + (bg.G * 0.587) + (bg.B * 0.114));
    return (255 - bgDelta < nThreshold) ? '#000000' : '#ffffff';
}

function loadSentence(itemId) {
    var url = 'bloggingbox.ajax.php?id=' + itemId + '&format=json';

    fetch(url)
        .then(response => response.json())
        .then(data => {
                document.querySelector('h1').innerHTML = data.sentence;
                document.querySelector('title').textContent = data.sentence;
                // rel canonical
                var canonical = document.querySelector('link[rel="canonical"]');
                if (canonical) {
                    canonical.href = 'https://lab.artlung.com/bloggingbot/' + data.itemId;
                }
            }
        );
}

var lastExecution = 0;

function changeColors() {
    if (Date.now() - lastExecution > 1000) {
        var bgColor = randomWebColor();
        var color = foregroundColorFromWebColor(bgColor);
        document.documentElement.style.setProperty('--color', color);
        document.documentElement.style.setProperty('--bgColor', bgColor);
        lastExecution = Date.now();
    } else {

    }
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementsByTagName('h1')[0].addEventListener('mousemove', changeColors);
    document.getElementsByTagName('h1')[0].addEventListener('click', changeColors);

    function pushState(itemId) {
        var url = '/bloggingbot/' + itemId;
        history.pushState({itemId: itemId}, '', url);
    }


    document.querySelector('#loadRandom').addEventListener('click', function (evt) {
        var itemId = Math.floor(Math.random() * 10000);
        pushState(itemId);
        loadSentence(itemId);
        changeColors();
        evt.preventDefault();
    });

    // handle history changes
    window.addEventListener('popstate', function (event) {
        loadSentence(event.state.itemId);
        changeColors();
    });

    changeColors();
    pushState(itemId);

});


