Ext.onReady(function () {

    var sampleText = 'Artlung Rosetta with ExtCore!';
    var nodeCount = 0;
    Ext.select("section ul li").each(function () {
        if (nodeCount % 4 === 0) {
            Ext.get(this).addClass('start');
        }
        nodeCount++;
    });
    Ext.select("section ul li:nth-child(4n)").addClass("end");
    Ext.select('h1').addClass('active');
    Ext.select('p').addClass('bad');
    Ext.get('testIdentifier').setStyle({
        border: '1px solid #000',
        backgroundColor: '#ccc'
    });
    Ext.get('testIdentifier').dom.innerHTML = sampleText;
    Ext.select('#interactionExperiments input').on('click', function (e, target) {
        Ext.get(target).hide();
    }, null, {preventDefault: true});
    Ext.select('#interactionExperiments a').on('click', function (e, target) {
        Ext.get(target).parent('div').select('input').show();
    }, null, {preventDefault: true});
    Ext.select('#nav a:has(img)').on('mouseover', function (e, target) {
        var src = Ext.get(target).getAttribute('src').replace('-off', '-over');
        Ext.get(target).set({'src': src});
    }).on('mouseout', function (e, target) {
        var src = Ext.get(target).getAttribute('src').replace('-over', '-off');
        Ext.get(target).set({'src': src});
    });
    Ext.get('addRandomString').on('click', function (e, target) {
        if (Rosetta.mayIncrement()) {
            Ext.DomHelper.insertAfter(target, ' World' + Rosetta.getIndex());
            Rosetta.increment();
        }
    }, null, {preventDefault: true});
    var closedHeight = Ext.get('loginArea').getHeight();
    Ext.select('#loginArea h2').on('click', function (e, target) {
        var h2Element = (Ext.get(target).child('span')) ? Ext.get(target) : Ext.get(target).parent('h2');
        if (h2Element.child('span').dom.innerHTML === '+') {
            var spanStr = '-';
        } else {
            var spanStr = '+';
            h2Element.parent('div').setHeight(closedHeight);
        }
        h2Element.child('span').update(spanStr);
        Ext.get('loginForm').toggle();
    });

    // Load HTML with Ajax
    Ext.get('ajaxloadHtml').on('click', function (e, target) {
        var url = 'ajax/chunk.html';
        Ext.Ajax.request({
            url: url,
            method: 'GET',
            success: function (result, request) {
                Ext.get('ajaxOutput').dom.innerHTML = result.responseText;
            }
        });

    }, null, {preventDefault: true});

    // Load text with Ajax
    Ext.get('ajaxloadText').on('click', function (e, target) {
        var url = 'ajax/chunk.txt';
        Ext.Ajax.request({
            url: url,
            method: 'GET',
            success: function (result, request) {
                Ext.get('ajaxOutput').dom.innerHTML = result.responseText;
            }
        });
    }, null, {preventDefault: true});

    // Load JSON with Ajax
    Ext.get('ajaxloadJson').on('click', function (e, target) {
        var url = 'ajax/chunk.json';
        Ext.Ajax.request({
            url: url,
            method: 'GET',
            success: function (result, request) {
                var jsonData = Ext.util.JSON.decode(result.responseText);
                Ext.get('ajaxOutput').dom.innerHTML = JSON.stringify(jsonData) + ' ' + jsonData.txt;
            }
        });
    }, null, {preventDefault: true});

    // Load XML with Ajax
    Ext.get('ajaxloadXml').on('click', function (e, target) {
        var url = 'ajax/chunk.xml';
        Ext.Ajax.request({
            url: url,
            method: 'GET',
            success: function (result, request) {
                var d = document.createElement("div");
                d.innerHTML = result.responseText;
                var tempText = Ext.DomQuery.selectValue("text", d);
                Ext.get('ajaxOutput').dom.innerHTML = tempText;
            }
        });
    }, null, {preventDefault: true});


    Ext.get('code').dom.innerHTML = Ext.select('script:last').elements[0].innerHTML;
});