<html>
<style type="text/css">
	body {
		background-color: #000;
		color: #fff;
		margin: 2px;
		padding: 0;
		font: 10px/20px sans-serif;
	}
	#wrapper {
		background-color: #ccf;
		height: 100%;
		width: 100%;
		overflow: hidden;
		position: relative;
	}
	.circle {
		background-color: #fff;
		width: 80px;
		height: 80px;
		border-radius: 40px;
		-moz-border-radius: 40px;
		position: absolute;
		left: 0px;
		top: 0px;
/*		-webkit-border-bottom-right-radius: 30px;*/
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#c2783b), to(#7a371a));
		opacity: 0.8;
		z-index: 1;
	}
		
	.stopped {
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255, 255, 255, 0.7)), to(rgba(255, 255, 255, 0.2)));
		z-index: 0;
		opacity: 1.0;
/*		background-color: #ccc;*/
	}
	#debug {
		position: absolute;
		font: 30px/30px sans-serif;
		right: 0;
		width: 100px;
		height: 100px;
		top: 0;
		color: #000;
	}
	#disclaimer {
		position: absolute;
		font-size: 12px;
		right: 0;
		width: 100px;
		height: 100px;
		bottom: 0;
		color: #666;
		text-align: center;
	}
	.hidden {
		display: none;
	}
</style>
<script type="text/javascript"
 	src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
var AMOUNT = Math.floor(Math.random()*1000);
AMOUNT = 5;
function randomDirection(){
	var directions = ['+=','+=','+=','-='];
	var direction = directions[Math.floor(Math.random()*directions.length)]
	var amount = Math.floor(Math.random()*AMOUNT); 
	var unit = 'px';
	return direction + amount + unit;
}


$(document).ready(function(){
	var not_stopped;
	var again = function() {
		// not_stopped = $('.circle:not(".stopped")');
		// $('#debug').text(not_stopped.length)
		var not_stopped = $('.circle:not(".stopped")');
		if (not_stopped.length === 0) {
			$('#reset').removeClass('hidden');
			return;
		}
		not_stopped.each(function(){
		    if($(this).offset().left + $(this).width < $('#wrapper').offset().left
		        || $(this).offset().left > $('#wrapper').width()
		        || $(this).offset().top + $(this).height < $('#wrapper').offset().top
		        || $(this).offset().top > $('#wrapper').height()
		    ){
		        $(this).addClass('stopped');
		    } else {
				$(this).filter(':not(".stopped")').animate({
					top: randomDirection(), left: randomDirection()
				}, 300);
		}
		});
		setTimeout(again, 300);
	};
	for (var i=0; i< 49; i++) {
		$('.circle:first').clone().appendTo('#wrapper');
	}
	var total = $('.circle').length
	$('#debug').append('/' + total);
	$('.circle:not(".stopped")').live('click', function(){
		var d = parseInt($('#debug').text().split('/')[0], 10) + 1;
		$('#debug').text(d + '/' + total);
		$(this).unbind().stop().addClass('stopped').fadeOut(10000);
	});
	
	$('#reset').click(function(){
		$('.circle').remove();
		$('<div />').addClass('circle').appendTo('#wrapper');
		for (var i=0; i< 49; i++) {
			$('.circle:first').clone().appendTo('#wrapper');
		}
		$('#debug').text(0 + '/' + 50);
		again();
		$(this).addClass('hidden');//fadeOut();
	});
	

	again();
});
</script>
<body><div id="wrapper"><div class="circle">&nbsp;</div></div><div id="debug">0</div><div id="disclaimer">this requires a webkit browser <br /><a href="#reset" class="hidden" id="reset">reset</a></div></body>
</html>