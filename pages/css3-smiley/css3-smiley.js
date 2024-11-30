$(document).ready(function(){
    $('#controls span').bind('click mouseover focus', function(){
        $(this).siblings().removeClass('selected');
        $(this).addClass('selected');

        var fig = $('span.selected:lt(3)').text();
        var grd = $('span.selected:gt(2):lt(6)').text();

        $('div#wrapper, .smiley div.figure').css('background-color', '#' + fig);
        $('.smiley, .smiley div.ground').css('background-color', '#' + grd);

        location.hash = '#' + fig + '' + grd;
        return false;
    });

    var colorUrl = location.hash.split('#');
    if (colorUrl.length > 1) {
        colors = colorUrl[1].toUpperCase();
    } else {
        colors = '';
    }
    for(var i=0;i<colors.length;i++){
        $('div.segment div:eq('+i+') span:contains('+colors[i]+')').trigger('click');
    }

});