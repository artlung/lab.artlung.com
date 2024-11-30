<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('Interesting Date Layout');

?>

<p class="date-attribution">Created near October, 1999</p>
<table cellspacing="0" cellpadding="5" border="0" bgcolor="#000000"><tr><td>
<?php include("source.php"); ?>
</td></tr></table>



<h2>Source</h2>
<pre>
<?php highlight_file("source.php") ?>
</pre>


<?php
$lab->printFooter([
	'comments' => true
]);
