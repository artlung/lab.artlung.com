<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Only submit if a checkbox is checked
');

?>

<p class="date-attribution">Originally Posted 2001</p>

<h1>Only submit if at least one checkbox is checked</h1>
<p><b>A Question I got:</b></p> 

<blockquote>
I would like to show an alert <b>if no check box was checked</b> in a field. The
idea is that at least one check box should be checked. I have an onSubmit for
the form and a JS function that suppose to check it but it does not work.

</blockquote>

<form action="../" onsubmit="return checkCheckBoxes(this);">
	<p><input type="CHECKBOX" name="CHECKBOX_1" value="This..."> This...</p>
	<p><input type="CHECKBOX" name="CHECKBOX_2" value="That..."> That...</p>
	<p><input type="CHECKBOX" name="CHECKBOX_3" value="...and The Other"> ...and The Other</p>
	<p><input type="SUBMIT" value="Submit!"></p>
</form>


<h2>HTML Source Code</h2>
<pre>
&lt;form action="../" <b>onsubmit="return checkCheckBoxes(this);"</b>&gt;
	&lt;p&gt;&lt;input type="CHECKBOX" <b>name="CHECKBOX_1"</b> value="This..."&gt; This...&lt;/p&gt;
	&lt;p&gt;&lt;input type="CHECKBOX" <b>name="CHECKBOX_2"</b> value="That..."&gt; That...&lt;/p&gt;
	&lt;p&gt;&lt;input type="CHECKBOX" <b>name="CHECKBOX_3"</b> value="...and The Other"&gt; ...and The Other&lt;/p&gt;
	&lt;p&gt;&lt;input type="SUBMIT" value="Submit!"&gt;&lt;/p&gt;
&lt;/form&gt;
</pre>

<?php
$lab->printFooter([
	'comments' => true
]);
