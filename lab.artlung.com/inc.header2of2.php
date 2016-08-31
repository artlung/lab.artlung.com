</title>
<?php
	if(is_file("code.txt"))
	{
		print file_get_contents("code.txt");
	}
?>
</head>
<body id="<?php print md5($_SERVER['SCRIPT_NAME'])?>">
<?php


?>
<div id="everything">
<div id="header">
<a href="/">ARTLUNG LAB</a>
<span>Experimenting since 1996</span>
<a href="https://twitter.com/artlung" class="twitter"></a>
</div>

<?php /*
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
</div><!--.advertisement-->
*/ ?>
<div id="content">
