<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Submit a form by selecting a dropdown item in JavaScript
'
);

?>

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

<?php

if (isset($_GET['state'])) {
    echo "<p style='padding: 2ch;border: 2px solid pink;'>Form submitted with state: " . $_GET['state'] . "</p>";
}

?>


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


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
