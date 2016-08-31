<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
border-style css property experiment
<?php include_once("../inc.header2of2.php"); ?>


<?php

$bs = $_GET['bs'];
$px = $_GET['px'];
$borderTypes = array(
	"none"
	,"hidden"
	,"dotted"
	,"dashed"
	,"solid"
	,"double"
	,"groove"
	,"ridge"
	,"inset"
	,"outset"
);
if(!in_array($bs,$borderTypes))
	$bs = $borderTypes[4];
if (!is_numeric($px))
	$px = 10;	
if($bs == "none")
	$px = 0;
?>
<style type="text/css">
<!--
div#theBox {
	border-color: #F00;
	border-width: <?php print $px; ?>px;
	border-style: <?php print $bs; ?>;
/* http://www.w3.org/TR/REC-CSS2/box.html#border-style-properties */
	margin: 0px;
	padding: 20px;
}
//-->
</style>

<div id="theBox">

		<p align="right"><small><em>Created February 2001. Updated 15 March 2002 and December 2005</em></small></p>
		
		<form action="./">

<p>border-style experiment : 
		<select name="bs" onchange="this.form.submit();">
		<?php
		foreach($borderTypes as $style)
		{
			print "<option ";
			if($style == $bs)
				print "selected";
			print ">$style</option>";
		}
		?>
		</select>
		<select name="px" onchange="this.form.submit();">
		<?php
		for($i=0;$i<100;$i++)
		{
			print "<option ";
			if($i == $px)
				print "selected";
			print ">$i</option>";
		}
		?>
		</select>
		<input type="submit" value="Try">
		</form>
<pre>		
&lt;style type="text/css"&gt;
&lt;!--
div#theBox {
	border-color: #F00;
	border-width: <?=$px;?>px;
	border-style: <?php echo $bs; ?>;
/* <a href="http://www.w3.org/TR/REC-CSS2/box.html#border-style-properties">http://www.w3.org/TR/REC-CSS2/box.html#border-style-properties</a> */
	margin: 0px;
	padding: 20px;
}
//--&gt;
&lt;/style&gt;
</pre>

</div>
		

<?php include_once("../inc.footer.php"); ?>
