

function update()
{
    document.querySelector('#output').value = '';
    var finalValue = '';
    var bodies = [];
    var input = document.querySelector('#input').value;
    stashToLocalStorage('quote-to-dl-input', input);
    input.split('\n').map(
        function (item) {
            var tmp = item.split(':');
            var dt = tmp.shift().trim();
            var dd = tmp.join(':').trim();
            var strongSpeaker = document.querySelector('#strongSpeaker').checked;
            var emQuote = document.querySelector('#emQuote').checked;
            var speakerTag = strongSpeaker ? ['<dt><strong>', '</strong></dt>'] : ['<dt>', '</dt>'];
            var quoteTag = emQuote ? ['<dd><em>', '</em></dd>'] : ['<dd>', '</dd>'];


            if (dt === '--') {
                bodies.push(finalValue);
                finalValue = '';
            } else if (dt && dd) {
                finalValue += speakerTag[0] + dt + speakerTag[1] + "\n";
                finalValue += quoteTag[0] + dd + quoteTag[1] + "\n";
            }
        }
    );
    if (finalValue.length > 0) {
        bodies.push(finalValue);
    }
    bodies.map(
        function (body) {
            document.querySelector('#output').value += '<dl>\n' + body + '</dl>\n\n';
        }
    );

}

function stashToLocalStorage(key, value)
{
    if (typeof (Storage) !== "undefined") {
        localStorage.setItem(key, value);
        return true;
    }
    console.log('Sorry! No Web Storage support..');
    return false;
}
function getFromLocalStorage(key)
{
    if (typeof (Storage) !== "undefined") {
        return localStorage.getItem(key);
    }
    console.log('Sorry! No Web Storage support..');
    return false;
}
document.addEventListener(
    'DOMContentLoaded', function () {

        var input = document.querySelector('#input');
        var existingValue = getFromLocalStorage('quote-to-dl-input');
        if (existingValue) {
            input.value = existingValue;
        } else {
            input.value = "Jane: I am Jane.\nJohn: I am John.\nJane: I am Jane.\nJohn: I am John.";
        }

        var elems = document.querySelectorAll('.update');
        elems.forEach(
            function (item) {
                item.addEventListener('change', update);
                item.addEventListener('keyup', update);
                item.addEventListener('click', update);
            }
        );
        update();

    }
);
