<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
Submit a form by selecting a dropdown item in JavaScript
<?php include_once("../inc.header2of2.php"); ?>

<h1>Submit a form by selecting a dropdown item in JavaScript</h1>


<form action="./" method="GET">
 <div align="center">
  <select name="state" onchange="this.form.submit();">
    <option>Choose One To Submit This Form</option>
    <option value="CA">CA</option>
    <option value="VA">VA</option>
  </select>
 </div>
</form>

<h2>How's this done? Check the Source Code:</h2>

<pre>
&lt;form action="./" method="GET"&gt;
 &lt;div align="center""&gt;
  &lt;select name="state" <b>onchange="this.form.submit();</b>"&gt;
    &lt;option&gt;Choose One To Submit This Form&lt;/option&gt;
    &lt;option value="CA"&gt;CA&lt;/option&gt;
    &lt;option value="VA"&gt;VA&lt;/option&gt;
  &lt;/select&gt;
 &lt;/div&gt;
&lt;/form&gt;
</pre>


<?php include_once("../inc.footer.php"); ?>


