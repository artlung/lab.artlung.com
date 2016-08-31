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

<div class="advertisement">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- labartlungcom-20160830 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1670413378763429"
     data-ad-slot="9590001571"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div id="commentsArea">
	<div id="disqus_thread"></div><script type="text/javascript" src="http://disqus.com/forums/lab-artlung-com/embed.js"></script><noscript><a href="http://disqus.com/forums/lab-artlung-com/?url=ref">View the discussion thread.</a></noscript><a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
<div id="footer">
	<span>So then...</span>
	<a href="/tip/">Leave me a PayPal Tip</a> 
	<a href="http://s1.amazon.com/exec/varzea/pay/T679KZN5326F">or Amazon Tip</a>
	<span>&copy; 1996-<?php print(date('Y')); ?></span>
	<a href="http://artlung.com/">Joe Crawford</a>
</div><!--#footer-->


<div id="siteSearch">
<script>
  (function() {
    var cx = '003140236047215464488:eew2rcyqaug';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div><!--#siteSearch-->


</div>

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
