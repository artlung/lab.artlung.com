<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
My First ASP Class
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">July 21, 2006. Posted August 27, 2016</p>

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

<?php include_once("../inc.footer.php"); ?>
