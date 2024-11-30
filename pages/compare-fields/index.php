<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('





Compare 2 email fields, Submit if same :: ArtLung Lab


');

?>
<p class="date-attribution">Created August 1999; Updated October 2002</p>

<h1>Compare two fields, Submit only if they are the same:</h1>


<h2>Question:</h2>
<blockquote>
How do I setup a form to validate a user's email address by having the user
type in his/her address twice, then having the form compare the fields to
see if the two entries match?
</blockquote>


<h2>Demonstration:</h2>

<table border="0" width="400" cellspacing="0" cellpadding="5" bgcolor="#CCCCCC">
	<tr>
	<td>

<form action="../" onsubmit="return checkEmail(this);">
<p> Enter Your Email Address:<br>
<input type="TEXT" name="EMAIL_1" size="20" maxlength="20"> 
<br>
Please Confirm Your Email Address:
<br>
<input type="TEXT" name="EMAIL_2" size="20" maxlength="20"> 
<br>
<input type="SUBMIT" value="Send Address!"></p> 
</form>

	</td>
	</tr>
</table>


<h2>Source Code: JavaScript and HTML</h2>
<pre>
&lt;script type="text/javascript" language="JavaScript"&gt;
&lt;!--
//--------------------------------
// This code compares two fields in a form and submit it
// if they're the same, or not if they're different.
//--------------------------------
<b>function checkEmail(theForm) {
    if (theForm.EMAIL_1.value != theForm.EMAIL_2.value)
    {
        alert('Those emails don\'t match!');
        return false;
    } else {
        return true;
    }
}</b>
//--&gt;
&lt;/script&gt; 




&lt;form action="../" <b>onsubmit="return checkEmail(this);"</b>&gt;
&lt;p&gt; Enter Your Email Address:&lt;br&gt;
&lt;input type="TEXT" <b>name="EMAIL_1"</b> size="20" maxlength="20"&gt; 
&lt;br&gt;
Please Confirm Your Email Address:
&lt;br&gt;
&lt;input type="TEXT" <b>name="EMAIL_2"</b> size="20" maxlength="20"&gt; 
&lt;br&gt;
&lt;input type="SUBMIT" value="Send Address!"&gt;&lt;/p&gt; 
&lt;/form&gt;
</pre>

<?php
$lab->printFooter([
	'comments' => true
]);
