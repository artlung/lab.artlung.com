<?php
	if(is_file("code.txt"))
	{
		print "<h2>Source Code</h2>";
		print "<pre class=\"src\">";
		print htmlentities(file_get_contents("code.txt"));
		print "</pre>";
	}
?>
</div>

<div class="googleAd">
	<script type="text/javascript"><!--
	google_ad_client = "pub-1670413378763429";
	google_ad_width = 728;
	google_ad_height = 90;
	google_ad_format = "728x90_as";
	google_ad_channel ="7056064222";
	google_ad_type = "text_image";
	google_color_border = "CCFF99";
	google_color_bg = "CCFF99";
	google_color_link = "0000FF";
	google_color_url = "0000FF";
	google_color_text = "666666";
	//--></script>
	<script type="text/javascript"
	  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
</div>

<div id="commentsArea">
	<div id="disqus_thread"></div><script type="text/javascript" src="http://disqus.com/forums/lab-artlung-com/embed.js"></script><noscript><a href="http://disqus.com/forums/lab-artlung-com/?url=ref">View the discussion thread.</a></noscript><a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
<div id="footer">
	<p>
	If this site was useful to you you can support it by 
	<a href="/tip/">Leaving a tip via PayPal</a> or 
	<a href="http://s1.amazon.com/exec/varzea/pay/T679KZN5326F">or Amazon</a>
	</p>
	
	<p>
	&copy; 1996-2008
	<a href="http://artlung.com/">Joe Crawford</a>
	<a href="http://artlung.com/feedback/">Provide Feedback</a>
	</p>

</div>


<div id="siteSearch">
<!-- SiteSearch Google -->
<form method="get" action="http://www.google.com/custom" target="_top">
<table border="0" bgcolor="#ffffff" align="center">
<tr><td nowrap="nowrap" valign="top" align="left" height="32">
<a href="http://www.google.com/">
<img src="http://www.google.com/logos/Logo_25wht.gif"
border="0" alt="Google"></img></a>
</td>
<td nowrap="nowrap">
<input type="hidden" name="domains" value="lab.artlung.com"></input>
<input type="text" name="q" size="50" maxlength="255" value=""></input>
<input type="submit" name="sa" value="Search"></input>
</td></tr>
<tr>
<td>&nbsp;</td>
<td nowrap="nowrap">
<table>
<tr>
<td>
<input type="radio" name="sitesearch" value=""></input>
<font size="-1" color="#000000">Web</font>
</td>
<td>
<input type="radio" name="sitesearch" value="lab.artlung.com" checked="checked"></input>
<font size="-1" color="#000000">lab.artlung.com</font>
</td>
</tr>
</table>
<input type="hidden" name="client" value="pub-1670413378763429"></input>
<input type="hidden" name="forid" value="1"></input>
<input type="hidden" name="ie" value="ISO-8859-1"></input>
<input type="hidden" name="oe" value="ISO-8859-1"></input>
<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#66CC00;VLC:663399;AH:center;BGC:FFFFFF;LBGC:000000;ALC:0000FF;LC:0000FF;T:000000;GFNT:666666;GIMP:666666;LH:5;LW:337;L:http://artlung.com/images/20020806-wrds.gif;S:http://artlung.com/;FORID:1;"></input>
<input type="hidden" name="hl" value="en"></input>

</td></tr></table>
</form>
<!-- SiteSearch Google -->
</div>


</div>


<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-57491-1";
urchinTracker();
</script>
<script type="text/javascript">
//<![CDATA[
(function() {
	var links = document.getElementsByTagName('a');
	var query = '?';
	for(var i = 0; i < links.length; i++) {
	if(links[i].href.indexOf('#disqus_thread') >= 0) {
		query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
	}
	}
	document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/lab-artlung-com/get_num_replies.js' + query + '"></' + 'script>');
})();
//]]>
</script>
</body>
</html>