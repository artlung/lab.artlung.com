<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Random content
<?php include_once("../inc.header2of2.php"); ?>

<h1>Random Content</h1>

<h2>Output (should be random)</h2>

<p><?php
// generates some random content

// start an array with some text strings...
$blah[] = 'Frank Zappa says...';
$blah[] = 'David Byrne says...';
$blah[] = 'David Letterman says...';
$blah[] = 'Richard Feynman says...';

// seed php random number generator
// http://www.php.net/srand
srand ((float) microtime() * 10000000);

// print a random $blah
// http://www.php.net/array_rand
print $blah[array_rand($blah)];
?></p>



<h2>Source Code</h2>
<pre>
<b>&lt;?php
// generates some random content

// start an array with some text strings...
$blah[] = 'Frank Zappa says...';
$blah[] = 'David Byrne says...';
$blah[] = 'David Letterman says...';
$blah[] = 'Richard Feynman says...';

// seed php random number generator
// <a href="http://www.php.net/srand">http://www.php.net/srand</a>
srand ((float) microtime() * 10000000);

// print a random $blah
// <a href="http://www.php.net/array_rand">http://www.php.net/array_rand</a>
print $blah[array_rand($blah)];
?&gt;</b>
</pre>


<?php include_once("../inc.footer.php"); ?>
