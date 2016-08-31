<?php

$items = array(
	'jsharp.h2',
	'2010-11-17_1348.png',
	'2010-11-17_1348_001.png',
	'2010-11-17_1349.png',
	'2010-11-17_1350.png',
	'2010-11-17_1353.png',
	'bluedragon.h2',
	'2010-11-17_1353_001.png',
	'2010-11-17_1353_002_instructions.txt',
	'2010-11-17_1353_002.png',
	'2010-11-17_1355.png',
	'2010-11-17_1355.png.txt',
	'2010-11-17_1355_001.png',
	'2010-11-17_1356.png',
	'2010-11-17_1356_001.png',
	'2010-11-17_1356_002.png',
	'2010-11-17_1357.png',
	'2010-11-17_1358.png',
	'2010-11-17_1358_001.png',
	'readme.h2',
	'BlueDragonInstalledReadMe.txt',
);

function handleH2($filename) {
	return "<h2>" . htmlentities(file_get_contents($filename)) . "</h2>";
}
function handlePng($filename) {
	return "<div class=\"screenshot\"><img src=\"{$filename}\" border=\"0\" alt=\"\" /></div>";
}
function handleTxt($filename) {
	return "<div class=\"text\">" . nl2br(htmlentities(file_get_contents($filename))) . "</div>";
}

$out = array();
foreach ($items as $filename) {


	$extension = explode('.', $filename);
	$extension = strtolower(array_pop($extension));
	$extension = strtolower($extension);
	switch ($extension):
		case 'png':
			$out[] = handlePng($filename);
			break;
		case 'txt':
			$out[] = handleTxt($filename);
			break;
		case 'h2':
			$out[] = handleH2($filename);
			break;
		default:
			$out[] = "I don't know what to do with {$filename}";
	endswitch;
	
}

$CONTENT = implode('<br />', $out);


?><!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="style.css" type="text/css">
	<title>Screenshots of an installation of BlueDragon 7.1 for the Microsoft .NET Framework</title>
	<style type="text/css" media="screen">
	body {
		background-color: #ccc;
		font-family: helvetica, arial, sans-serif;
		margin: 0;
		padding: 0;
	}
	h1, h2, p {
		margin: 0;
		padding: 0;
	}
	#wrapper {
		
	}
	#header {
		background-color: #999;
		color: #333;
		padding: 20px;
	}
	#content {
		background-color: #fff;
		color: #000;
		padding: 20px;
		width: 800px;
		border: 1px solid #fff;
		margin-right: auto;
		margin-left: auto;
	}
	#footer {
		background-color: #999;
		color: #333;
		padding: 20px;
	}
	#content div.screenshot img {
		margin-right: auto;
		margin-left: auto;
	}
	#content div.text {
		font-family: 'courier new', fixed-width;
		font-size: small;
	}
	</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1>
			Screenshots of an installation of BlueDragon 7.1 for the Microsoft .NET Framework
		</h1>
		<p>Created November 17, 2010</p>
	</div>
	<div id="content">
		<?=$CONTENT?>
	</div>
	<div id="footer">
		&copy; 2010 Joe Crawford
	</div>
</div>
</body>	
</html>
