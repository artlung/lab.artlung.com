<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
HTTP_HOST environment variable in PHP
<?php include_once("../inc.header2of2.php"); ?>

<h1>HTTP_HOST environment variable in PHP</h1>

<h2>Result:</h2>

<p>
<?php
	echo $_SERVER["HTTP_HOST"]; //more explicit style (preferred)_
	echo "<br>";
?>
</p>


<h2>Source Code:</h2>
<pre>
&lt;?php
	echo <b>$_SERVER["HTTP_HOST"];</b> //more explicit style (preferred)_
	echo "&lt;br&gt;";
?&gt;
</pre>

<?php include_once("../inc.footer.php"); ?>

