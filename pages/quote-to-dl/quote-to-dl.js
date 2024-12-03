function update() {
    document.querySelector('#output').value = '';
    var finalValue = '';
    var bodies = [];
    var input = document.querySelector('#input').value;
    input.split('\n').map(function (item) {
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
    });
    if (finalValue.length > 0) {
        bodies.push(finalValue);
    }
    bodies.map(function (body) {
        document.querySelector('#output').value += '<dl>\n' + body + '</dl>\n\n';
    });


}

var elems = document.querySelectorAll('.update');
elems.forEach(function (item) {
    item.addEventListener('change', update);
    item.addEventListener('keyup', update);
    item.addEventListener('click', update);
});
update();
