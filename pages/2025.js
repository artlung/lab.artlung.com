console.log('You are on lab.artlung.com. 2025 Edition.');
document.addEventListener('DOMContentLoaded', function () {

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
            var title = card.querySelector('a').textContent
                + card.getAttribute('href')
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


});