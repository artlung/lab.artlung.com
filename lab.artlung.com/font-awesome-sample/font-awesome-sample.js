$(document).ready(function () {

    $('.modifiers').on('click', 'button', function() {
	$(this).toggleClass('on');
	var className = $(this).text();
	var tdClassName = 'td-' + className;
	$('.examples i').toggleClass(className);
	$('.examples td').toggleClass(tdClassName);
	$('#className').hide();

	var classes = [];
	$('.modifiers button.on').each(function(){classes.push($(this).text());});
	classesText = "Current modifying classes: " + classes.join(' ');
	$('.modifiers').attr('title', classesText);


    });

    $('.examples').on('click', 'td', function (evt) {

	var className = $(this).find('i').get(0).className;
	var html = "<i class=\"" + className+ "\"></i>";
	$('#className')
	    .text(html)
	    .show()
	    .css($(this).offset())
	    .css('z-index', 1)
    });

});