<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Mozilla Experimental Style thingy
<?php include_once("../inc.header2of2.php"); ?>

<style type="text/css">
	body
	{
		margin: 20px;
		background-color: #CCC;
		background-image: url(http://www.artlung.com/permanent_media/background_web_big_2.gif);
	}
	
	.rounded
	{
		background-color: #FFF;
		padding: 20px;
		font-size: 1.5em;
		font-family: georgia, serif;
		font-style: italic;
		width: 60%;
		-moz-border-radius-bottomright: 40px;
		-moz-border-radius-topleft: 60px;
	}

//-->
</style>

<div class="rounded">

This page is simply a test of the mozilla border radius extensions.<br>

-moz-border-radius-bottomright: 40px;<br>
-moz-border-radius-topleft: 60px;<br>

More @ <a href="http://www.blooberry.com/indexdot/css/properties/extensions/nsextensions.htm">blooberry</a>.



</div>

<?php include_once("../inc.footer.php"); ?>

