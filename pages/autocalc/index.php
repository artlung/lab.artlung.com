<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('AutoCalculator');

?>


<p class="date-attribution">Created September 29 1999; Modified October 2002</p>

<h1>Auto-Calculator</h1>

<form name="fm" action="./" onsubmit="return false;">
<table width="100%" cellpadding="15" cellspacing="0" border="0">
<tr><td align="center">
<input name="num_one" value="2"
	onchange="validateLegalNumberCharacters(this.value);" class="Big" size="6">
<select name="wc" onchange="doTheMath();" class="Big">
	<option value="+" checked>&nbsp;&nbsp;+&nbsp;&nbsp;</option>
	<option value="-">&nbsp;&nbsp;-&nbsp;&nbsp;</option>
	<option value="/">&nbsp;&nbsp;/&nbsp;&nbsp;</option>
	<option value="*">&nbsp;&nbsp;*&nbsp;&nbsp;</option>
</select>
<input name="num_two" value="3"
	onchange="validateLegalNumberCharacters(this.value);" class="Big" size="6">
<big class="Big">=</big>
<input name="num_answer" value="5"
	onfocus="document.fm.num_one.focus();" class="Big" size="6">
</td></tr></table>
</form>

<h2>Source Code: JavaScript</h2>

<pre>
&lt;script type="text/javascript" language="Javascript"&gt;
&lt;!--//
<b>function <b>validateLegalNumberCharacters(inString)</b>{ 

var myLen=inString.length-1;
var validChar='0123456789.';

for ( var i=0;i&lt;myLen;i++ )
    {
    if (validChar.indexOf(inString.substring(i,i+1)) == -1)
        {
            alert('Please enter only numbers.');
            break;
    } else {
        doTheMath();
    }
    }
}</b>

<b>function doTheMath() {
    mathForm = document.fm;
    
    a = mathForm.num_one.value;
    p = mathForm.wc.options[mathForm.wc.selectedIndex].value;
    b = mathForm.num_two.value;
    c = eval(a+p+b+'');
    
    mathForm.num_answer.value=c;
}</b>
//--&gt;
&lt;/script&gt;
</pre>


<h2>Source Code: HTML</h2>

<pre>
&lt;form <b>name="fm"</b> action="./" <b>onsubmit="return false;"</b>&gt;
&lt;table width="100%" cellpadding="15" cellspacing="0" border="0"&gt;
&lt;tr&gt;&lt;td align="center"&gt;
&lt;input <b>name="num_one"</b> value="2"
    <b>onchange="validateLegalNumberCharacters(this.value);"</b> class="Big" size="6"&gt;
&lt;select name="wc" <b>onchange="doTheMath();"</b> class="Big"&gt;
    &lt;option value="+" checked&gt;&nbsp;&nbsp;+&nbsp;&nbsp;&lt;/option&gt;
    &lt;option value="-"&gt;&nbsp;&nbsp;-&nbsp;&nbsp;&lt;/option&gt;
    &lt;option value="/"&gt;&nbsp;&nbsp;/&nbsp;&nbsp;&lt;/option&gt;
    &lt;option value="*"&gt;&nbsp;&nbsp;*&nbsp;&nbsp;&lt;/option&gt;
&lt;/select&gt;
&lt;input <b>name="num_two"</b> value="3"
    <b>onchange="validateLegalNumberCharacters(this.value);"</b> class="Big" size="6"&gt;
&lt;big class="Big"&gt;=&lt;/big&gt;
&lt;input <b>name="num_answer"</b> value="5"
    <b>onfocus="document.fm.num_one.focus();"</b> class="Big" size="6"&gt;
&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;
&lt;/form&gt;
</pre>


<?php
$lab->printFooter([
	'comments' => true
]);