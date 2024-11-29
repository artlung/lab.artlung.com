<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Random String in SQL
<?php include_once("../inc.header2of2.php"); ?>
<p align="right">Created August 21 2000</p>

<h2>Random String in SQL</h2>

<p>Take a random number, and <a href="https://en.wikipedia.org/wiki/MD5" title="MD5 cryptographic hash algorithm">MD5</a> it!</p>

<pre>
<b>UPDATE `table` SET col = MD5(RAND()) WHERE condition=TRUE;</b>
</pre>


<?php include_once("../inc.footer.php"); ?>
