<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Simple example connecting to a remote server
');

?>

<p class="date-attribution">Posted June 2004</p>

<h1>Simple example connecting to a remote server</h1>

<h2>Source Code</h2>
<pre>
<b>&lt;?php
// <a href="http://www.php.net/fopen">http://www.php.net/fopen</a>
$url = "http://www.google.com/";
$file = @fopen ($url, "r");
if (!$file) {
	echo "&lt;p&gt;Unable to connect to $url.&lt;/p&gt;\n";
	exit;
} else {
	echo "&lt;p&gt;We connected to $url.&lt;/p&gt;\n";
	exit;
	fclose($file);
}
?&gt;</b>
</pre>

<?php
$lab->printFooter([
	'comments' => true
]);
