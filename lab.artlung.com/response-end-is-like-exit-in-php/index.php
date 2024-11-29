<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
In ASP, Response.End is like exit() in PHP
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created July 12, 2006, Posted August 27, 2016</p>

<h1>
    In ASP, Response.End is like exit() in PHP
</h1>

<?php
$contents = file_get_contents("source.html");

print $contents;

?>

<?php include_once("../inc.footer.php"); ?>
