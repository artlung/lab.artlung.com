<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Multiple, Hierarchical SelectBoxes
<?php include_once("../inc.header2of2.php"); ?>

<h1>Multiple, Hierarchical SelectBoxes, version 2</h1>

<form name="artlungForm" action="./">

<select name="foo" size="5"
	onchange="changeSecondSelect(formName,firstLevelSelectName,secondLevelSelectName);"
	onfocus="changeSecondSelect(formName,firstLevelSelectName,secondLevelSelectName);">
	<option value="">Choose One...</option>
	<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
</select>

<select name="bar" size="5"
	onchange="changeSecondSelect(formName,secondLevelSelectName,thirdLevelSelectName);"
	onfocus="changeSecondSelect(formName,secondLevelSelectName,thirdLevelSelectName);"
>
	<option value="">Choose One...</option>
	<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
</select>

<select name="splorch" size="5">
	<option value="">Choose One...</option>
	<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
</select>
</form>



<?php include_once("../inc.footer.php"); ?>










