<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
HTML Tags for Java Applets, circa 1999
<?php include_once("../inc.header2of2.php"); ?>

<h1>HTML Tags for Java Applets, circa 1999</h1>

<p>In 1999, I took a class in Java at Santa Monica College. I was intested at the time in the small variations among how The W3C, Sun, Netscape, and Microsoft specified the &lt;APPLET&gt; tag.</p>

<p>So here are how each specified the tag in 1999, minus the formatting of the original pages:</p>

<h2>

<?php

?>

<?php echo  newnavToggle2("/java-tags/-applet-tag-3.2.php","","W3C - HTML 3.2","") ?> |
<?php echo  newnavToggle2("/java-tags/-applet-tag-4.0.php","","W3C - HTML 4.0","") ?> |
<?php echo  newnavToggle2("/java-tags/-applet-tag-microsoft.php","","Microsoft","") ?> |
<?php echo  newnavToggle2("/java-tags/-applet-tag-netscape.php","","Netscape","") ?> |
<?php echo  newnavToggle2("/java-tags/-applet-tag-sun.php","","Sun","") ?>
</h2>

<pre><?

if(file_exists($_GET['f']))
	@include($_GET['f'])
?>
</pre>

<?php include_once("../inc.footer.php"); ?>