window.addEvent('domready', function () {

    var versionNumber = MooTools.version;
    var sampleText = 'Artlung Rosetta with version ' + versionNumber + ' of MooTools!';
    $$("section ul li:nth-child(4n-3)").addClass("start"); // ext can't do this kind of selector
    $$("section ul li:nth-child(4n)").addClass("end");
    $$('h1').addClass('active');
    $$('p').addClass('bad');
    $('testIdentifier').setStyles({
        border: '1px solid #000',
        backgroundColor: '#ccc'
    });
    $('testIdentifier').set('html', sampleText);
    $$('#interactionExperiments input').addEvent('click', function (e) {
        this.setStyle('display', 'none');
        e.stop();
    });
    $$('#interactionExperiments a').addEvent('click', function (e) {
        this.getParent().getChildren('input').setStyle('display', '');
        e.stop();
    });
    $$('#nav a').addEvent('mouseover', function (e) {
        if (this.getFirst('img')) {
            var src = this.getFirst('img').getProperty('src');
            this.getFirst('img').setProperty('src', src.replace('-off', '-over'));
        }
    }).addEvent('mouseout', function (e) {
        if (this.getFirst('img')) {
            var src = this.getFirst('img').getProperty('src');
            this.getFirst('img').setProperty('src', src.replace('-over', '-off'));
        }
    });
    $('addRandomString').addEvent('click', function (e) {
        if (Rosetta.mayIncrement()) {
            if (!this.getParent().getFirst('span')) {
                var newSpan = new Element('span');
                this.getParent().grab(newSpan, 'bottom');
            }
            this.getParent().getChildren('span').appendText(' World' + Rosetta.getIndex(), 'top');
            Rosetta.increment();
        }
        e.stop();
    });
    $$('#loginArea h2').addEvent('click', function (e) {
        var displayValue = ($('loginForm').getStyle('display') === 'none') ? 'block' : 'none';
        $('loginForm').setStyle('display', displayValue);
        var spanStr = (this.getFirst('span').get('html') === '+') ? '-' : '+';
        this.getFirst('span').set('html', spanStr);
    });

    // Load html with Ajax
    $('ajaxloadHtml').addEvent('click', function (e) {
        var url = 'ajax/chunk.html';
        $('ajaxOutput').load(url);
        e.stop();
    });

    // Load text with Ajax
    $('ajaxloadText').addEvent('click', function (e) {
        var url = 'ajax/chunk.txt';
        $('ajaxOutput').load(url);
        e.stop();
    });

    // Load JSON with Ajax
    $('ajaxloadJson').addEvent('click', function (e) {
        var url = 'ajax/chunk.json';
        new Request.JSON({
            url: url,
            method: 'get',
            onSuccess: function (responseJSON, responseText) {
                $('ajaxOutput').set('text', responseText + ' ' + responseJSON.txt);
            }
        }).send();
        e.stop();
    });

    // Load XML with Ajax
    $('ajaxloadXml').addEvent('click', function (e) {
        var url = 'ajax/chunk.xml';
        new Request({
            url: url,
            method: 'get',
            onSuccess: function (responseText, responseXML) {
                var txt = responseXML.getElements('text').get('text');
                $('ajaxOutput').set('text', txt);
            }
        }).send();
        e.stop();
    });

    var sourceCode = $$('script').getLast().get('html');
    $('code').set('html', sourceCode)

});