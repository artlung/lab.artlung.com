<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
onmouseover in a TR tag
<?php include_once("../inc.header2of2.php"); ?>

<style type="text/css">
<!--
	.yellowThing
	{
		background: #FF9;
	}
	
	.whiteThing
	{
		background: #FFF;
	}
	
	.redThing
	{
		background: #F00;
	}

//-->
</style>

<h1>Onmouseover in a TR tag</h1>

<table cellspacing="0" cellpadding="3" border="0">
<tr onmouseover="this.className='yellowThing';"
	onmouseout="this.className='whiteThing';"><td>hello</td><td>world</td></tr>
<tr onmouseover="this.className='yellowThing';"
	onmouseout="this.className='whiteThing';"><td>hola</td><td>mundo</td></tr>
<tr onmouseover="this.className='yellowThing';"
	onmouseout="this.className='whiteThing';"><td>hello</td><td>hello</td></tr>
<tr onmouseover="this.style.background='#F00';"
	onmouseout="this.style.background='#FFF';"><td>hola</td><td>mundo</td></tr>
</table>

<table cellspacing="0" cellpadding="3" border="1">
<tr onmouseover="alert('hello onmouseover'+this.style);"
class="redThing">
	<td>the tr for this row has</td>
	<td>an onmouseover alert</td>
</tr>
</table>

<h2>Source Code:</h2>
<pre>
&lt;style type="text/css"&gt;
&lt;!--
body { background: #FFF }
<b>.yellowThing</b> {
background: #FF9;
}
<b>.whiteThing</b> {
background: #FFF;
}
<b>.redThing</b> {
background: #F00;
}
//--&gt;
&lt;/style&gt;

&lt;table cellspacing="0" cellpadding="3" border="0"&gt;
&lt;tr <b>onmouseover="this.className='yellowThing';"</b>
    <b>onmouseout="this.className='whiteThing';"</b>&gt;&lt;td&gt;hello&lt;/td&gt;&lt;td&gt;world&lt;/td&gt;&lt;/tr&gt;
&lt;tr <b>onmouseover="this.className='yellowThing';"</b>
    <b>onmouseout="this.className='whiteThing';"</b>&gt;&lt;td&gt;hola&lt;/td&gt;&lt;td&gt;mundo&lt;/td&gt;&lt;/tr&gt;
&lt;tr <b>onmouseover="this.className='yellowThing';</b>"
    <b>onmouseout="this.className='whiteThing';"</b>&gt;&lt;td&gt;hello&lt;/td&gt;&lt;td&gt;hello&lt;/td&gt;&lt;/tr&gt;
&lt;tr <b>onmouseover="this.style.background='#F00';"</b>
    <b>onmouseout="this.style.background='#FFF';"</b>&gt;&lt;td&gt;hola&lt;/td&gt;&lt;td&gt;mundo&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;

&lt;table cellspacing="0" cellpadding="3" border="1"&gt;
&lt;tr <b>onmouseover="alert('hello onmouseover'+this.style);"</b>
class="redThing"&gt;
    &lt;td&gt;the tr for this row has&lt;/td&gt;
    &lt;td&gt;an onmouseover alert&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
</pre>


<?php include_once("../inc.footer.php"); ?>

