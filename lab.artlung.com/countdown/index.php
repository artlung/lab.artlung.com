<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Super Simple Countdown
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Created 03/2001; Updated April 2002 and December 2005</p>

<h1> Super Simple Countdown in PHP.</h1>

<? /* declare the target date */
	$day   = 31;     // Day of the countdown
	$month = 12;     // Month of the countdown
	$year  = date("Y");   // Year of the countdown
	$hour  = 23;     // Hour of the day
	$event = "New Year's Eve, " . date("Y"); //event
/* ----------------------- */
$calculation = ((mktime ($hour,0,0,$month,$day,$year) - time(void))/3600);
$hours = (int)$calculation;
$days = (int)($hours/24);
/* ----------------------- */
?>
<h2>Result:</h2>
<ul>
<li>The date is <?php print (date ("l, jS \of F Y g:i:s A")); ?>.</li>
<li>It is <? print $days ?> days until <? print $event ?>.</li>
<li>It is <? print $hours ?> hours until <? print $event ?>.</li>
</ul>

<h2>Source Code:</h2>
<pre>
&lt;? /*
   declare target date; source: <a href="http://us.imdb.com/ReleaseDates?0121766">http://us.imdb.com/ReleaseDates?0121766</a> ; 
  */<b>
  $day   = 31;     </b>// Day of the countdown<b>
  $month = 12;      </b>// Month of the countdown<b>
  $year  = <?=date("Y")?>;   </b>// Year of the countdown<b>
  $hour  = 23;     </b>// Hour of the day (east coast time)<b>
  $event = "<?=$event?>"; </b>//event
<b>
  $calculation = ((mktime ($hour,0,0,$month,$day,$year) - time(void))/3600);
  $hours = (int)$calculation;
  $days  = (int)($hours/24);
</b>/*
  mktime() <a href="http://www.php.net/manual/en/function.mktime.php">http://www.php.net/manual/en/function.mktime.php</a>
  time()   <a href="http://www.php.net/manual/en/function.time.php">http://www.php.net/manual/en/function.time.php</a>
  (int)    <a href="http://www.php.net/manual/en/language.types.integer.php">http://www.php.net/manual/en/language.types.integer.php</a>
*/
?&gt;
&lt;ul&gt;
&lt;li&gt;The date is <b>&lt;?=(date ("l, jS \of F Y g:i:s A"));?&gt;</b>.&lt;/li&gt;
&lt;li&gt;It is <b>&lt;?=$days?&gt;</b> days until <b>&lt;?=$event?&gt;</b>.&lt;/li&gt;
&lt;li&gt;It is <b>&lt;?=$hours?&gt;</b> hours until <b>&lt;?=$event?&gt;</b>.&lt;/li&gt;
&lt;/ul&gt;
</pre>

<?php include_once("../inc.footer.php"); ?>





