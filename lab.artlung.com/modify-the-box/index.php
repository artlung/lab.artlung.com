<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Modify the Box - a DHTML Experiment
<?php include_once("../inc.header2of2.php"); ?>

<form action="./" method="get" onsubmit="return false;">
<pre class="ourControl">
modify the box! a dhtml experiment made by <a href="http://artlung.com/">artlung</a>

&nbsp;
<a href="javascript:ourMove(-1,-1,'ourBox')">\</a> <a href="javascript:ourMove(0,-1,'ourBox')">^</a> <a href="javascript:ourMove(1,-1,'ourBox')">/</a>
<a href="javascript:ourMove(-1,0,'ourBox')">&laquo;</a>   <a href="javascript:ourMove(1,0,'ourBox')">&raquo;</a>
<a href="javascript:ourMove(-1,1,'ourBox')">/</a> <a href="javascript:ourMove(0,1,'ourBox')">v</a> <a href="javascript:ourMove(1,1,'ourBox')">\</a>
&nbsp;
<a href="javascript:ourSize(0.25,'ourBox')">.</a> <a href="javascript:ourSize(1.5,'ourBox')">o</a> <a href="javascript:ourSize(2,'ourBox')">O</a>
&nbsp;
<select onchange="changeColor(this.options[this.selectedIndex].value,'ourBox')"><option value="#CCC">color</option></select>
</pre></form>
<div id="ourBox"></div>
<div id="warn">this won't work in netscape 4. i'm sorry.</div>

<?php include_once("../inc.footer.php"); ?>