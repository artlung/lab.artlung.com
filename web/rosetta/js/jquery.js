jQuery(document).ready(function () {
    var sampleText = 'Artlung Rosetta with version ' + jQuery().jquery + ' jQuery!';
    $("section ul li:nth-child(4n-3)").addClass("start");
    $("section ul li:nth-child(4n)").addClass("end");
    $('h1').addClass('active');
    $('p').addClass('bad');
    $('#testIdentifier').css({
        border: '1px solid #000',
        backgroundColor: '#ccc'
    }).text(sampleText);
    $('#interactionExperiments button').click(function () {
        $(this).hide();
        return false;
    });
    $('#interactionExperiments a').click(function () {
        $(this).siblings('button').show();
        return false;
    });
    $('#nav a:has(img)').mouseover(function () {
        var src = $(this).children('img').attr('src').replace('-off', '-over');
        $(this).children('img').attr('src', src);
    }).mouseout(function () {
        var src = $(this).children('img').attr('src').replace('-over', '-off');
        $(this).children('img').attr('src', src);
    });
    $('#addRandomString').click(function () {
        if (Rosetta.mayIncrement()) {
            $(this).after(' World' + Rosetta.getIndex());
            Rosetta.increment();
        }
        return false;
    });
    $('#loginArea h2').toggle(function () {
        $(this).children('span').text('-');
        $('#loginForm').show();
    }, function () {
        $(this).children('span').text('+');
        $('#loginForm').hide();
    });


    // Load HTML with Ajax
    $('#ajaxloadHtml').bind('click', function () {
        $.get('ajax/chunk.html', null, function (data) {
            $('#ajaxOutput').html(data);
        });
        return false;
    });

    // Load text with Ajax
    $('#ajaxloadText').bind('click', function () {
        $.get('ajax/chunk.txt', null, function (data) {
            $('#ajaxOutput').text(data);
        });
        return false;
    });

    // Load JSON with Ajax
    $('#ajaxloadJson').bind('click', function () {
        $.getJSON('ajax/chunk.json', null, function (json) {
            var textVal = JSON.stringify(json) + '\n' + json.txt;
            $('#ajaxOutput').text(textVal);
        });
        return false;
    });

    // Load XML with Ajax
    $('#ajaxloadXml').bind('click', function () {
        $.get('ajax/chunk.xml', null, function (xml) {
            var textNode = $(xml).find('text:first').text();
            $('#ajaxOutput').text(textNode);
        });
        return false;
    });

    var sourceCode = $('script:last').html();
    $('#code').html(sourceCode)
});