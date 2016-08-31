<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Make a Unique ID in PHP
<?php include_once("../inc.header2of2.php"); ?>

<p><small>From December 2005</small></p>

<h1>Make a Unique ID in PHP</h1>

<p>This may be useless. It's a snippet of code.</p>

<h2>Here's the result:</h2>

<pre><?php

// Just a small sample of making a unique id in PHP
// http://www.php.net/manual/en/function.chr.php
// http://www.php.net/manual/en/function.rand.php
// http://www.php.net/manual/en/function.time.php
// http://www.php.net/manual/en/function.uniqid.php

	$prefix = 'W'; // a universal prefix prefix 
	$my_random_id = $prefix;
	$my_random_id .= chr(rand(65,90));
	$my_random_id .= time();
	$my_rancom_id .= uniqid($prefix);
	print $my_random_id;
?></pre>

<h2>...And the Source Code:</h2>

<pre>
&lt;?php
// Just a small sample of making a unique id in PHP
// <a href="http://www.php.net/manual/en/function.chr.php">http://www.php.net/manual/en/function.chr.php</a>
// <a href="http://www.php.net/manual/en/function.rand.php">http://www.php.net/manual/en/function.rand.php</a>
// <a href="http://www.php.net/manual/en/function.time.php">http://www.php.net/manual/en/function.time.php</a>
// <a href="http://www.php.net/manual/en/function.uniqid.php">http://www.php.net/manual/en/function.uniqid.php</a>

<b>	$prefix = 'W'; // a universal prefix prefix 
	$my_random_id = $prefix;
	$my_random_id .= chr(rand(65,90));
	$my_random_id .= time();
	$my_random_id .= uniqid($prefix);
	print $my_random_id;</b>
?&gt;
</pre>

<?php include_once("../inc.footer.php"); ?>

