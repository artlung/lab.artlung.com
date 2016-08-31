<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/code.js"></script>
</head>
<body>
	<div class="filedrag" style="width: 500px;">
		<label class="filedrag-filename"></label>
		<img class="filedrag-preview" src="img/placeholder.gif">
		<div>&nbsp;</div>
		<div class="filedrag-droparea">drop image (or click)</div>
		<div class="filedrag-progress"></div>
		<input type="file" class="filedrag-input" id="file-input" name="file-input">
	</div> 
	<script type="text/javascript">
	//Custom callback example
	function responseCallback(response) {
		console.log(response);
	}

	$(function () {
		initUploaders('post_handler.php', 'responseCallback');
	});
	</script>
</body>
</html>
