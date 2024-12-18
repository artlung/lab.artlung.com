console.log('You are on lab.artlung.com. 2025 Edition.');
document.addEventListener('DOMContentLoaded', function () {

    document.addEventListener('keydown', function(event) {
        if (event.altKey && event.keyCode === 82) {
            // if we are in frames, go to the top
            if (window.top !== window.self) {
                window.top.location = '/random.php';
            }
            window.location = '/random.php';
        }
    });

    var searchFilter = document.getElementById('search-filter');
    if (!searchFilter) {
        return;
    }
    console.log('searchFilter:', searchFilter);
    // bind to the keyup event
    searchFilter.addEventListener('keyup', function () {
        // get the value of the search input
        var searchValue = searchFilter.value;
        // get all the cards
        var cards = document.querySelectorAll('nav ol li');
        // loop through each card
        cards.forEach(function (card) {
            // get the card title
            var title = [card.querySelector('a').textContent,
                card.getAttribute('href'),
                card.getAttribute('data-year'),
                card.getAttribute('data-tags')
                ].join(' ')
            ;
            // check if the title includes the search value
            if (title.toLowerCase().includes(searchValue.toLowerCase())) {
                // show the card
                card.style.display = 'flex';
            } else {
                // hide the card
                card.style.display = 'none';
            }
        });
    });


    if (window.top !== window.self) {
        var base = document.createElement('base');
        base.target = '_top';
        document.head.appendChild(base);
    }

    // onchange to set styles on :root for --theme-color and --theme-color-modifier
    // for id theme-color and theme-color-modifier

    // set from local storage if available
    var themeColor = localStorage.getItem('theme-color');
    var themeColorModifier = localStorage.getItem('theme-color-modifier');
    if (themeColor) {
        document.documentElement.style.setProperty('--theme-color', themeColor);
    }
    if (themeColorModifier) {
        document.documentElement.style.setProperty('--theme-color-modifier', themeColorModifier);
    }
    // if not, read from the computed style
    var computedStyle = getComputedStyle(document.documentElement);
    var computedThemeColor = computedStyle.getPropertyValue('--theme-color');
    var computedThemeColorModifier = computedStyle.getPropertyValue('--theme-color-modifier');

    // bind events to the inputs
    var themeColorInput = document.getElementById('theme-color');
    var themeColorModifierInput = document.getElementById('theme-color-modifier');
    themeColorInput.value = computedThemeColor;
    themeColorModifierInput.value = computedThemeColorModifier;
    themeColorInput.addEventListener('input', function () {
        document.documentElement.style.setProperty('--theme-color', themeColorInput.value);
        localStorage.setItem('theme-color', themeColorInput.value);
    });
    themeColorModifierInput.addEventListener('input', function () {
        document.documentElement.style.setProperty('--theme-color-modifier', themeColorModifierInput.value);
        localStorage.setItem('theme-color-modifier', themeColorModifierInput.value);
    });

    // bind to the reset button
    var resetButton = document.getElementById('reset-theme');
    resetButton.addEventListener('click', function () {
        localStorage.removeItem('theme-color');
        localStorage.removeItem('theme-color-modifier');
        themeColorInput.value = '';
        themeColorModifierInput.value = '';
        document.documentElement.style.removeProperty('--theme-color');
        document.documentElement.style.removeProperty('--theme-color-modifier');
    });


});
