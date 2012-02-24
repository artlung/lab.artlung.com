<title>Museum Notes (Mobile Use in Museums)</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<body>
<div id="container">
<div id="content">
<?php

require '../../t.noke.us/includes/markdown.php';

$sites = file_get_contents('notes.txt');

//$sites = preg_replace("/(https?:\/\/[^\n\r]+)/",'<a href="\\1">\\1</a>',$sites);

print Markdown($sites);

?>
