<html>
<head>
<title>Get KeyCode via Javascript</title>
<style>
body {
     background-color: #eee;
}
h1 {
   font-family: sans-serif;
   text-align: center;
   font-weight: normal;
   color: #666;
   text-shadow: 1px 1px 3px #ccc;
   border-radius: 3px;
   -moz-border-radius: 3px;
   -webkit-border-radius: 3px;
   margin: 0 auto;
   width: 400px;
}
h1 span {
   background-color: #fff;
   color: #c00;
   text-shadow: 1px 1px 3px #600;
   padding: 5px;
   border-radius: 3px;
   -moz-border-radius: 3px;
   -webkit-border-radius: 3px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script>
function checkKeyCode(e) {
	 if (window.event) {
	    return window.event.keyCode;
	    } else if (e) {
	      return e.which;
	      }
	      return ' ';
}

$(document).ready(function(){

	$(document).bind('keydown', function(evt){
				    $('h1 span').text(checkKeyCode(evt));
				    });

				    $(document).trigger('keydown');

});
</script>

</head>
<body>
<h1>keycode: <span></span></h1>


</body>
</html>
