Event.observe(window, 'load', function () {

    var versionNumber = Prototype.Version;
    var sampleText = 'Artlung Rosetta with version ' + versionNumber + ' of Prototype!';
    $$("section ul li:nth-child(4n-3)").each(function (item) {
        item.addClassName("start");
    });
    $$("section ul li:nth-child(4n)").each(function (item) {
        item.addClassName("end");
    });
    $$('h1').each(function (item) {
        item.addClassName('active');
    });
    $$('p').each(function (item) {
        item.addClassName('bad');
    });
    $('testIdentifier').setStyle({
        border: '1px solid #000',
        backgroundColor: '#ccc'
    }).update(sampleText);

    $$('#interactionExperiments input').each(function (item) {
        item.observe('click', function (evt) {
            item.hide();
            Event.stop(evt);
        });
    });
    $$('#interactionExperiments a').each(function (item) {
        item.observe('click', function (evt) {
            item.siblings('input').each(function (sub) {
                sub.show();
            });
            Event.stop(evt);
        });
    });
    $$('#nav a').each(function (item) {
        item.observe('mouseover', function (evt) {
            if (item.down('img')) {
                var src = item.down('img').readAttribute('src').replace('-off', '-over');
                item.down().writeAttribute('src', src);
            }
        });
        item.observe('mouseout', function (evt) {
            if (item.down('img')) {
                var src = item.down('img').readAttribute('src').replace('-over', '-off');
                item.down().writeAttribute('src', src);
            }
        });
    });
    $('addRandomString').observe('click', function (evt) {
        if (Rosetta.mayIncrement()) {
            Element.insert(Event.element(evt), {after: ' World' + Rosetta.getIndex()});
            Rosetta.increment();
        }
        Event.stop(evt);
    });
    $$('#loginArea h2').each(function (item) {
        item.observe('click', function (evt) {
            $('loginForm').toggle();
            var spanStr = (item.down('span').innerHTML === '+') ? '-' : '+';
            item.down('span').update(spanStr);
        });
    });

    // Load HTML with Ajax
    $('ajaxloadHtml').observe('click', function (evt) {
        var url = 'ajax/chunk.html';
        new Ajax.Request(url, {
            method: 'get',
            onSuccess: function (transport) {
                $('ajaxOutput').update(transport.responseText);
            }
        });
        Event.stop(evt);
    });

    // Load text with Ajax
    $('ajaxloadText').observe('click', function (evt) {
        var url = 'ajax/chunk.txt';
        new Ajax.Request(url, {
            method: 'get',
            onSuccess: function (transport) {
                $('ajaxOutput').update(transport.responseText);
            }
        });
        Event.stop(evt);
    });

    // Load JSON with Ajax
    $('ajaxloadJson').observe('click', function (evt) {
        var url = 'ajax/chunk.json';
        new Ajax.Request(url, {
            method: 'get',
            evalJSON: 'force',
            onSuccess: function (transport) {
                $('ajaxOutput').update(JSON.stringify(transport.responseJSON) + ' ' + transport.responseJSON.txt);
            }
        });
        Event.stop(evt);
    });

    // Load XML with Ajax
    $('ajaxloadXml').observe('click', function (evt) {
        var url = 'ajax/chunk.xml';
        new Ajax.Request(url, {
            method: 'get',
            onSuccess: function (transport) {
                var node = transport.responseXML.documentElement.getElementsByTagName('text')[0];
                $('ajaxOutput').update(node.firstChild.data);
            }
        });
        Event.stop(evt);
    });

    var sourceCode = $$('script')[3];
    $('code').innerHTML = sourceCode.innerHTML;

});