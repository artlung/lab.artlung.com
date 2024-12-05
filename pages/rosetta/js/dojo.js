dojo.addOnLoad(function () {
    var sampleText = 'Artlung Rosetta with Dojo!';
    dojo.query("section ul li:nth-child(4n-3)").addClass("start");
    dojo.query("section ul li:nth-child(4n)").addClass("end");
    dojo.query('h1').addClass('active');
    dojo.query('p').addClass('bad');
    var testIdentifier = dojo.byId('testIdentifier');
    dojo.style(testIdentifier, {
        border: '1px solid #000',
        backgroundColor: '#ccc'
    });
    testIdentifier.innerHTML = sampleText;
    dojo.query('#interactionExperiments input').forEach(function (item) {
        dojo.connect(item, 'onclick', function (e) {
            item.style.display = 'none';
            dojo.stopEvent(e);
        });
    });
    dojo.query('#interactionExperiments a').forEach(function (item) {
        dojo.connect(item, 'onclick', function (e) {
            dojo.query('input', item.parentNode).forEach(function (bar) {
                bar.style.display = 'inline';
            });
            dojo.stopEvent(e);
        });
    });
    dojo.query('#nav a:has(img)').forEach(function (item) {
        dojo.connect(item, 'onmouseover', function (e) {
            dojo.query('img', item).forEach("item.src = item.src.replace('-off','-over')");
        });
        dojo.connect(item, 'onmouseout', function (e) {
            dojo.query('img', item).forEach("item.src = item.src.replace('-over','-off')");
        });
    });
    var addRandomLink = dojo.byId('addRandomString');
    dojo.connect(addRandomLink, 'onclick', function (e) {
        if (Rosetta.mayIncrement()) {
            dojo.query('#addRandomString').addContent(' World' + Rosetta.getIndex(), 'after');
            Rosetta.increment();
        }
        dojo.stopEvent(e);
    });
    dojo.query('#loginArea h2').forEach(function (item) {
        dojo.connect(item, 'onclick', function (e) {
            var formDiv = dojo.byId('loginForm');
            if (formDiv.style.display === 'none') {
                formDiv.style.display = 'block';
                dojo.query('span', item)[0].innerHTML = '-';
            } else {
                formDiv.style.display = 'none';
                dojo.query('span', item)[0].innerHTML = '+';
            }
        });
    });


    // Load HTML with Ajax
    dojo.connect(dojo.byId('ajaxloadHtml'), 'onclick', function (e) {
        dojo.xhrGet({
            url: "ajax/chunk.html",
            handleAs: "text",
            load: function (response, ioArgs) {
                dojo.byId('ajaxOutput').innerHTML = response;

            }
        });
        dojo.stopEvent(e);
    });
    // Load text with Ajax
    dojo.connect(dojo.byId('ajaxloadText'), 'onclick', function (e) {
        dojo.xhrGet({
            url: "ajax/chunk.txt",
            handleAs: "text",
            load: function (response, ioArgs) {
                dojo.byId('ajaxOutput').innerHTML = response;

            }
        });
        dojo.stopEvent(e);
    });

    // Load JSON with Ajax
    dojo.connect(dojo.byId('ajaxloadJson'), 'onclick', function (e) {
        dojo.xhrGet({
            url: "ajax/chunk.json",
            handleAs: "json",
            load: function (json, ioArgs) {
                dojo.byId('ajaxOutput').innerHTML = JSON.stringify(json) + ' ' + json.txt;

            }
        });
        dojo.stopEvent(e);
    });

    // Load XML with Ajax
    dojo.connect(dojo.byId('ajaxloadXml'), 'onclick', function (e) {
        dojo.xhrGet({
            url: "ajax/chunk.xml",
            handleAs: "xml",
            load: function (xml, ioArgs) {
                dojo.byId('ajaxOutput').innerHTML = xml.getElementsByTagName("text")[0].firstChild.nodeValue;
            }
        });
        dojo.stopEvent(e);
    });

    dojo.byId('code').innerHTML = dojo.query('script')[3].innerHTML;
});