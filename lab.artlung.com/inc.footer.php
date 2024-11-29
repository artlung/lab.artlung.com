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

<?php
$protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';

// simply render canonical base on the current http host ( multiple host ) + requests
$canonical = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$is_main_page = $canonical === 'https://lab.artlung.com/';

if (!$is_main_page):
?>
<div id="commentsArea">
<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var PAGE_URL = json_encode($canonical);
var PAGE_IDENTIFIER = PAGE_URL;
var disqus_config = function () {

this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://lab-artlung-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
<?php endif; ?>
<div id="footer">
	<span>&copy; 1996-<?php print(date('Y')); ?></span>
	<a href="https://artlung.com/links/">Joe Crawford</a>
</div>
</div>
<script id="dsq-count-scr" src="//lab-artlung-com.disqus.com/count.js" async></script>
</body>
</html>
