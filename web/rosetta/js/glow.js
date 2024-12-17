glow.ready(function () {

    var sampleText = 'Artlung Rosetta with version ' + glow.VERSION + ' of Glow!';
    var nodeCount = 0;
    glow.dom.get("section ul li").each(function () {
        if (nodeCount % 4 === 0) {
            glow.dom.get(this).addClass('start');
        }
        if (nodeCount % 4 === 3) {
            glow.dom.get(this).addClass('end');
        }
        nodeCount++;
    });
    glow.dom.get('h1').addClass('active');
    glow.dom.get('p').addClass('bad');
    glow.dom.get('#testIdentifier').css({
        border: '1px solid #000',
        backgroundColor: '#ccc'
    }).text(sampleText);
    glow.events.addListener('#interactionExperiments button', 'click', function (e) {
        glow.dom.get(this).hide();
        return false;
    });
    glow.events.addListener('#interactionExperiments a', 'click', function (e) {
        glow.dom.get(this).parent().children('button').show();
        return false;
    });
    glow.events.addListener('#nav a', 'mouseover', function (e) {
        if (glow.dom.get(this).children('img').length > 0) {
            var src = glow.dom.get(this).children('img').attr('src').replace('-off', '-over');
            glow.dom.get(this).children('img').attr('src', src);
        }
    })
    glow.events.addListener('#nav a', 'mouseout', function (e) {
        if (glow.dom.get(this).children('img').length > 0) {
            var src = glow.dom.get(this).children('img').attr('src').replace('-over', '-off');
            glow.dom.get(this).children('img').attr('src', src);
        }
    });
    glow.events.addListener('#addRandomString', 'click', function (e) {
        if (Rosetta.mayIncrement()) {
            glow.dom.get(this).after('<span> World' + Rosetta.getIndex() + '</span>');
            Rosetta.increment();
        }
        return false;
    });
    glow.events.addListener('#loginArea h2', 'click', function (e) {
        var spanElement = glow.dom.get(this).children('span');
        if (spanElement.text() === '+') {
            spanElement.text('-');
            glow.dom.get('#loginForm').show();
        } else {
            spanElement.text('+');
            glow.dom.get('#loginForm').hide();
        }
    });

    // Load HTML with Ajax
    glow.events.addListener('#ajaxloadHtml', 'click', function () {

        var url = 'ajax/chunk.html';
        var opts = {
            onLoad: function (data) {
                glow.dom.get('#ajaxOutput').html(data.text());
            }
        };
        glow.net.get(url, opts);
        return false;
    });

    // Load text with Ajax
    glow.events.addListener('#ajaxloadText', 'click', function () {
        var url = 'ajax/chunk.txt';
        var opts = {
            onLoad: function (data) {
                glow.dom.get('#ajaxOutput').text(data.text());
            }
        };
        glow.net.get(url, opts);
        return false;
    });

    // Load JSON with Ajax
    glow.events.addListener('#ajaxloadJson', 'click', function () {
        var url = 'ajax/chunk.json';
        var opts = {
            onLoad: function (data) {
                var decodedData = glow.data.decodeJson(data.nativeResponse.responseText);
                glow.dom.get('#ajaxOutput').text(JSON.stringify(decodedData) + ' ' + decodedData.txt);
            }
        };
        glow.net.get(url, opts);
        return false;
    });

    // Load XML with Ajax
    glow.events.addListener('#ajaxloadXml', 'click', function () {
        var url = 'ajax/chunk.xml';
        var opts = {
            onLoad: function (data) {
                var xmlNodeList = glow.dom.get(data.xml());
                var textNode = xmlNodeList.get("text");
                glow.dom.get('#ajaxOutput').text(textNode.text());
            }
        };
        glow.net.get(url, opts);
        return false;
    });


    var sourceCode = glow.dom.get('script').item(4).innerHTML;
    glow.dom.get('#code').html(sourceCode);
});