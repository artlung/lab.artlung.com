<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Page Self-Refresh
<?php include_once("../inc.header2of2.php"); ?>

<h1>Code to make a page that refresh to itself</h1>

<pre>
&lt;script language="JavaScript" type="text/javascript"&gt;
&lt;!--
<b>var howManyMinutes = 2;</b> // set your interval here;
<b>var oneMinute = 60000;</b>  // 1 minute = 60,000 milliseconds;
<b>refreshFreq = oneMinute * howManyMinutes;</b>
<b>WhereNext = location.href;
setTimeout("window.open(WhereNext,'_top');",refreshFreq);</b>
//--&gt;
&lt;/script&gt;
</pre>

<?php include_once("../inc.footer.php"); ?>


