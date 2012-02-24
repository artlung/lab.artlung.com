<html>
<head>
	<title>CSS3 Smiley colorizer</title>
<style type="text/css">
body {
	font-family: helvetica, sans-serif;
}
div#wrapper {
	width: 100px;
	padding: 50px;
}
.smiley {
	height: 100px;
	width: 100px;
	position: relative;
	border-radius: 50px;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
}
.smiley .eye {
	height: 12px;
	width: 12px;
	border-radius: 6px;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	position: absolute;
	overflow: hidden;
}
.left-eye {
	top: 20px;
	left: 30px;
}
.right-eye {
	top: 20px;
	right: 30px;
}
.mouth {
	-webkit-border-bottom-right-radius: 25px;
	-webkit-border-bottom-left-radius: 25px;
	-moz-border-radius-bottomright: 25px;
	-moz-border-radius-bottomleft: 25px;
	border-bottom-right-radius: 25px;
	border-bottom-left-radius: 25px;
	height: 25px;
	position: absolute;
	width: 50px;
	left: 25px;
	top: 60px;
	
}
.mouth-cover {
	-webkit-border-bottom-right-radius: 25px;
	-webkit-border-bottom-left-radius: 25px;
	-moz-border-radius-bottomright: 25px;
	-moz-border-radius-bottomleft: 25px;
	border-bottom-right-radius: 25px;
	border-bottom-left-radius: 25px;
	height: 25px;
	position: absolute;
	width: 40px;
	left: 30px;
	top: 50px;
}
/* controls */
div#controls {
	line-height: 250%;
	text-align: center;
}
div#controls div span {
	background-color: #666;
	color: #fff;
	padding: 5px 10px;
	cursor: pointer;
}
div#controls div span.selected {
	background-color: #0f0;
	color: #fff;
}

/*you can programmatically set the colors or even background images of these here */
div#wrapper, .smiley div.figure {
	background-color: #000;	
}
.smiley, .smiley div.ground {
	background-color: #fff;
	
}

#wrapper, #controls, #credits {
	width: 300px;
	margin: 0 auto;
}

#credits {
	text-align: center;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
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

	var colors = location.hash.split('#')[1];
	for(var i=0;i<colors.length;i++){
		$('div.segment div:eq('+i+') span:contains('+colors.substr(i,1)+')').trigger('click');
	}
	
});
</script>
</head>
<body>

	<div id="wrapper">
		<div class="smiley">
			<div class="left-eye eye figure">&nbsp;</div>
			<div class="right-eye eye figure">&nbsp;</div>
			<div class="mouth figure">&nbsp;</div>
			<div class="mouth-cover ground">&nbsp;</div>
		</div>
	</div>
	
	
	
	<div id="controls">
		<div class="segment">
			Figure:<br>
			<div class="r">
			<span class="selected">0</span><span>3</span><span>6</span><span>9</span><span>C</span><span>F</span>
			</div>
			<div class="g">
			<span class="selected">0</span><span>3</span><span>6</span><span>9</span><span>C</span><span>F</span>
			</div>
			<div class="b">
			<span class="selected">0</span><span>3</span><span>6</span><span>9</span><span>C</span><span>F</span>
			</div>
		</div>
		<div class="segment">
			Ground:<br>
			<div class="r">
			<span>0</span><span>3</span><span>6</span><span>9</span><span>C</span><span class="selected">F</span>
			</div>
			<div class="g">
			<span>0</span><span>3</span><span>6</span><span>9</span><span>C</span><span class="selected">F</span>
			</div>
			<div class="b">
			<span>0</span><span>3</span><span>6</span><span>9</span><span>C</span><span class="selected">F</span>
			</div>
		</div>
		
	</div>

	<div id="credits">
		<a href="http://joecrawford.com/">joe crawford</a><br>
		<a href="http://twitter.com/artlung">@artlung</a><br>
		<a href="http://artlung.com/">blog</a>
	</div>

</body>
</html>