<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Generic validator
<?php include_once("../inc.header2of2.php"); ?>

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


<?php include_once("../inc.footer.php"); ?>





