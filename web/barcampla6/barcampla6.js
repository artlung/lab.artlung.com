$(window.document).ready(function () {
    //jQuery('p:first').css({'font-size': 'large','border':'5px solid red'});
    // add .link to links

    $('#pagebody a').addClass('link');
    // add .pdf class to pdf links
    // add title text to pdf links saying
    $('a[href$=.pdf]').addClass('pdf').attr({'title': 'Download this PDF'}).css({fontWeight: 'bold'});
    // change text on a button
    // change lincoln with a button click
    $('#buttonA').attr({value: 'Change Lincoln'}).click(
        function () {
            $('#pagebody img').attr({
                src: 'images/lincoln-side.jpg',
                title: 'Lincoln from the side'
            })
        }
    )
    // bold paragraphs
    jQuery('p').css({fontWeight: 'bold'});

    /*
     $.ajax({
       type: "GET",
       url: "selectors.txt",
       //data: "name=John&location=Boston",
       success: function(stuff){
            $('#pagebody').html(stuff)
       }
     });
     */

    $('#buttonB').attr({value: 'Fade Lincoln'}).click(
        function () {
            $('#pagebody img').fadeOut('slow')
        }
    )
    $('#buttonC').attr({value: '1'}).click(
        function () {
            var x = $('#buttonC').attr('value');
            x = parseInt(x) + 1;
            $('#buttonC').attr({'value': x})
        }
    )
    $('#buttonD').attr({value: '-1'}).click(
        function () {
            var x = $('#buttonD').attr('value');
            x = parseInt(x) - 1;
            $('#buttonD').attr({'value': x})
        }
    )
    $('#buttonE').attr({value: '0'}).click(
        function () {
            var c = $('#buttonC').attr('value');
            var d = $('#buttonD').attr('value');
            x = parseInt(c) * parseInt(d);
            $('#buttonE').attr({'value': x})
        }
    )


});
