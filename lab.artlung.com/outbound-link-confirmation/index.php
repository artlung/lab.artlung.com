<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Outbound Link Confirmation
<?php include_once("../inc.header2of2.php"); ?>

<script type="text/javascript">
function outboundLink() {
  return confirm("You are now leaving this web site!\nDo you want to continue?");
}
</script>


<p align=right>Created 1 January 2002, Updated 22 April 2013</p>
<h1>Outbound Link Confirmation</h1>

<p>I happen to think that limiting users travels on a website is pretty rude, but there are times
when you want to let users know that by clicking a certain link, they will be leaving your site.</p>

<p>For those times, I offer an outbound link confirmation. It will prompt the user to confirm that they want to leave the website.</p>

<p><b>So here's the sample in action:</b></p>

	<a href="http://www.google.com/" onclick="return outboundLink();">visit google.com</a>

<p><b>And here's the Source Code in the HTML</b></p>

<pre>&lt;a href="http://www.google.com/" <b>onclick="return outboundLink();"</b>&gt;visit google.com&lt;/a&gt;</pre>

<p><b>And this is the function to include in the &lt;head&gt; of any web page that will use this script:</b></p>
<pre>&lt;script language="JavaScript" type="text/javascript"&gt;
&lt;!--
<b>function outboundLink() {
	return confirm("You are now leaving this web site!\nDo you want to continue?");
}</b>
//--&gt;
&lt;/script&gt;</pre>

<?php include_once("../inc.footer.php"); ?>

