<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Setting Select Box Focus
');

?>

<p class="date-attribution">Created:10/1999; Updated:12/2001</p>

<h1>Setting Dropdown Focus</h1>

<p>	<i><b>Question:</b></i></p>

<blockquote>I have a long multiple select box of items that appear on a page.  Depending
on a users settings, one (or more) of those items may be selected when they
get to the page.
<br><br>
What I am trying to do, is focus the list of items so that the first
selected item is at the top of the select box.  As an example, if you have a
list of 30 items, and only 7 can show at a time, and the 20th item is
selected, I would like it (#20) to be at the top of the select box, with the
scroll bar set appropriately on the page.
<br><br>
I tried to use document.form.name.option[index].focus() but, focus() is not
supported... So, any and all suggestions would be appreicated.
</blockquote>


<p>	<i><b>Update 12/2001:</b>Bernd Brandt writes:</i></p>
<blockquote>
NS 4.78 on UNIX has different select multiple layout. Also CTRL and SHIFT
do not work. 
It does not thow an error, but the menuscrollbar simply does not scroll down with the
selectedIndex. The selection is made however.
Also Mozilla (Unix) and NS 6 for UNIX work ok with your script.
These browser use a select-multiple layout as IE (and CTRL and SHIFT
work as well).
	 </i>
</blockquote>





<table border="1" cellspacing="0" cellpadding="4" width="400" align="center">
	<tr>
		<td colspan="4">
		
		<p> <strong>ANSWER:</strong> focus is the right idea - but for a select box there's an easier way - the "selectedIndex" property of a &lt;SELECT&GT; element.
		Use that instead.</p>
		
		<p>The links below have onMouseover events which call a function <code>selSELECT</code> and pass the numbers to select which option we want selected.</p>
		
		</td>
	</tr>
	<tr>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(0)">0</a></td>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(1)">1</a></td>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(2)">2</a></td>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(3)">3</a></td>
	</tr>
	<tr>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(4)">4</a></td>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(5)">5</a></td>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(6)">6</a></td>
		<td align="center"><a href="javascript:window.open(document.myForm.mySelectBox.options[document.myForm.mySelectBox.selectedIndex].value,'_top')" onmouseover="selSELECT(7)">7</a></td>
	</tr>
	<tr>
	</tr>
</table>



<div align="center">

<form action="./" name="myForm">
<select name="mySelectBox" size="8">
	<option value="http://artlung.com">artlung.com</option>
	<option value="https://artlung.com/blog/">artlung.com/blog</option>
	<option value="http://lab.artlung.com">lab.artlung.com</option>
	<option value="http://leahpeah.com/">leahpeah.com</option>
	<option value="http://sandiegoblog.com">sandiegoblog.com</option>
	<option value="http://sandiegobloggers.com/">sandiegobloggers.com</option>
	<option value="http://websandiego.org">websandiego.org</option>
	<option value="http://www.whitehouse.gov">www.whitehouse.gov</option>
</select>
</form>
</div>


<?php
$lab->printFooter([
	'comments' => true
]);
