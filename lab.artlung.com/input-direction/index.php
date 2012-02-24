<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Change Form Input Direction
<?php include_once("../inc.header2of2.php"); ?>

<h1>Change Form Input Direction</h1>

<p>You can change the form input direction for browsers which implement the "dir" &lt;<a href="http://www.w3.org/TR/REC-html40/struct/dirlang.html#adef-dir">http://www.w3.org/TR/REC-html40/struct/dirlang.html#adef-dir</a>&gt;attribute. MSIE on Windows and Mozilla are two browsers which support this.</p>

<form action="../">

<input dir="rtl">

</form>

<h2>Source Code</h2>

<pre>
&lt;form action="../"&gt;

&lt;input <b>dir="rtl"</b>&gt;

&lt;/form&gt;
</pre>

<?php include_once("../inc.footer.php"); ?>


