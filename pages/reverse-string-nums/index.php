<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Reverse a string, but only the digits
');

?>

<h1>Reverse a string, but only the digits</h1>

<h2>Question:</h2>

<blockquote>

<small>Any ideas?<br>
I am trying to set up a way to track applicants that I am working with. What I wanted to do is take the persons phone number and reverse it and make
it the applicant number.<br><br>
Input: 719-964-5776<br>
Output: 6775469917</small></blockquote>

<h2>Answer:</h2>

<blockquote>
<small>The code is pretty straightforward - view source on this page to grab a version of the code with proper comments:</small></blockquote>



<table border="0" cellspacing="1" cellpadding="20"><tr valign="top"><td BGCOLOR="#EEEEEE">

<h3>Source Code</h3>




<pre>
<b>function reverseNumbersOnly(inString) {
  tempVar = '';
  for (i=inString.length-1;i&gt;-1;i--)
   { if (inString.charAt(i)==parseInt(inString.charAt(i)))
       { tempVar+=inString.charAt(i); }
   }; return tempVar;
}</b>
</pre>

</td><td bgcolor="#CCFFFF">

<h3>In Action:</h3>

<p>Enter phone numbers in the space below:</p>


<form action="./">
<p>
	<b>Input:</b>&nbsp;&nbsp;<input name="_in" value="719-964-5776">
<br><br>
	<b>Output:</b>&nbsp;<input name="_out">
<br><br>
    <input
		type="button"
		value="process it!"
		style="background-color: #00F; color: #FFF; font-weight: bold;"
		onclick="this.form._out.value=reverseNumbersOnly(this.form._in.value)">
</p>
</form>



</td></tr></table>






<?php
$lab->printFooter([
	'comments' => true
]);
