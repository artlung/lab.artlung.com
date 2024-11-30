<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
My First ASP Class
');

?>

<p class="date-attribution">July 21, 2006. Posted August 27, 2016</p>

<h1>My first VBScript Test Class</h1>

<p><code class="pre">
<?php
print nl2br(htmlentities(file_get_contents("TestClass.asp")));
?>
</code></p>
 
 
<h2>And testing it out</h2>


<p><code class="pre">
<?php
print nl2br(htmlentities(file_get_contents("testing.asp")));
?>
</code></p>

<h2>Results</h2>

<?php include("results.html"); ?>

<?php
$lab->printFooter([
	'comments' => true
]);
