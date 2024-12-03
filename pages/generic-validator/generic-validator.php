<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Generic validator
');

?>

<h1>Generic validator</h1>

<h2>Example</h2>

<form name="exampleForm" action="./" onsubmit="return genericValidator(document.exampleForm.inputOne.value,document.exampleForm.inputTwo.value)">
	<input type="text" name="inputOne">
	<input type="text" name="inputTwo">
	<input type="submit">
</form>

<h2>HTML Source</h2>
<pre>
&lt;form name="exampleForm" action="./"
  onsubmit="return <b>genericValidator(document.exampleForm.inputOne.value,document.exampleForm.inputTwo.value)</b>"&gt;
	&lt;input type="text" <b>name="inputOne"</b>&gt;
	&lt;input type="text" <b>name="inputTwo"</b>&gt;
	&lt;input type="submit"&gt;
&lt;/form&gt;
</pre>


<?php
$lab->printFooter([
	'comments' => true
]);


