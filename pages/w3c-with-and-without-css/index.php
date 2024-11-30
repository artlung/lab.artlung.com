<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
How Powerful is CSS? w3c site before and after CSS.
');

?>

<p class="date-attribution">Image Captured August 2000; Page Created March 2001; Updated April 2002</p>

<h1>How Powerful is CSS?</h1>

<p>
Below is a <a href="http://www.libpng.org/pub/png/">PNG</a> file
which shows how powerful CSS is -- it's a screenshot of the <a
href="http://www.w3.org/Style/">w3c CSS homepage</a> with and without CSS. The
left side is <a href="http://www.microsoft.com/mac/products/ie/">Internet Explorer 5 for Macintosh</a>, the right is <a href="http://www.icab.de/">iCab</a>. I think it's a very good example of graceful degradation. To get "live" display of how different a page can look with or without CSS, you should drag CSS bookmarklets on my <a href="/scripting/bookmarklets/">cool bookmarklets</a> page. Have fun!
</p>


<img src="after_before_w3_css.png" width="780" height="538" alt="[this is a PNG image as described previously]">


<?php
$lab->printFooter([
	'comments' => true
]);
