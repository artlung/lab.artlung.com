<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Countdown in to the first of the month in PHP
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created 07/2011</p>

<h1>Countdown in to the first of the month in PHP</h1>

<h2>Result</h2>

<?php
	$today = strtotime('today');
	$day_of_month = (int)date('j', $today);
	$days_in_this_month = (int)date('t', $today);
	$days_until_the_first = $days_in_this_month - $day_of_month;
	print "It is {$days_until_the_first} days until the first!";
?>

<h2>Source Code:</h2>
<pre>
&lt;?php
	$today = strtotime('today');
	$day_of_month = (int)date('j', $today);
	$days_in_this_month = (int)date('t', $today);
	$days_until_the_first = $days_in_this_month - $day_of_month;
	print "It is {$days_until_the_first} days until the first!";
?&gt;
</pre>

<?php include_once("../inc.footer.php"); ?>





