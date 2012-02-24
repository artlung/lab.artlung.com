<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
How to Make a file with every file on a C:\ drive
<?php include_once("../inc.header2of2.php"); ?>
<p align="right">Created August 21 2000</p>

<h2>How to Make a file with every file on a C:\ drive</h2>

<p>Say you need to have a list of every file on a Windows box, this is how you would do it!</p>

<pre>
<b>dir c:\ /s/b &gt; c:\dir.txt</b>
</pre>

<p>This makes a recursive listing of everything on c:\, and sends it to a file named "dir.txt" at the root of the c:\ drive.</p>


<?php include_once("../inc.footer.php"); ?>
