<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
What is the relative occurence of "use x" where x is a JavaScript framework on stackoverflow.com?
<?php include_once("../inc.header2of2.php"); ?>

<style type="text/css">
#bigTable {
font-size: 1.3em;
border: 1px solid #ccc;
}

#bigTable tr th  {
border-style: solid;
border-color: #ccc;
border-width: 1px 1px 1px 0px;
padding: 8px;
margin: 0;
background-color: #666;
color: #333;
}

#bigTable tr td  {
border-style: solid;
border-color: #ccc;
border-width: 1px 1px 1px 0px;
padding: 8px;
margin: 0;
}
</style>

<h1>What is the relative occurence of "use x" where x is a JavaScript framework on stackoverflow.com?</h1>

<p>I was curious about how often the phrase "use jquery" was on the excellent <a href="http://stackoverflow.com/">stackoverflow</a> site. It seems as though many answers regarding frontend DOM manipulation, any DOM manipulation, will get answered with that phrase. So while I was at it, I decided to try and figure out the relative weight of the results. This is not scientific, and meant to be for fun.</p>

<?php

require_once('simple_html_dom.php');
require_once('class.JS_SO_Scraper.php');

$scraper = new JS_SO_Scraper();

if ($scraper->todayFileExists()) {
	$scraper->showTodayData();
} else {
	$scraper->scrapeGoogleForData();
	$scraper->saveTodayData();
	$scraper->showTodayData();
}
$scraper->showDisclaimer();
$scraper->showOldData();

?>

<?php include_once("../inc.footer.php"); ?></body>