<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Demonstration Of An Image Swap In Another Frame Triggered By A Mouseover
<?php include_once("../inc.header2of2.php"); ?>


<div align="center">
	<h1>Cross-Frame Mouseover</h1> 
	<p style="font-family: verdana,geneva;">
		<a href="/" onmouseover="top.img_act('toc6')" onmouseout="top.img_inact('toc6')">MouseOver This (1)</a>
		<br>
		<a href="/" onmouseover="top.img_act('toc1')" onmouseout="top.img_inact('toc1')">MouseOver This (2)</a>
		<br>
		<a href="/" onmouseover="top.img_act('toc2')" onmouseout="top.img_inact('toc2')">MouseOver This (3)</a>
		<br>
		<a href="/" onmouseover="top.img_act('toc3')" onmouseout="top.img_inact('toc3')">MouseOver This (4)</a>
		<br>
		<a href="/" onmouseover="top.img_act('toc4')" onmouseout="top.img_inact('toc4')">MouseOver This (5)</a>
		<br>
		<a href="/" onmouseover="top.img_act('toc5')" onmouseout="top.img_inact('toc5')">MouseOver This (6)</a>
		<br>
		<a href="/" onmouseover="top.img_act('toc7')" onmouseout="top.img_inact('toc7')">MouseOver This (7)</a> 
	</p>
</div>


<?php include_once("../inc.footer.php"); ?>

