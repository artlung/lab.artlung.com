<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Larger Checkbox with CSS
'
);

?>


    <p class="date-attribution">Created 12/2005; Updated 11/2009</p>
    <h1>Larger Checkbox with CSS</h1>

    <p>You can set the height and width of the checkbox, but the results are inconsistent.
        When originally posted in 2005, it resizes inputs of type checkbox in MSIE6/Windows and Firefox and did not
        change the size of checkboxes in Safari.
    </p>

    <form action="./">
        <input type="checkbox" class="largerCheckbox" name="checkBox">
        <input type="checkbox" name="checkBoxNormal">
    </form>

    <h2>HTML Source</h2>
    <pre>
&lt;form action="./"&gt;
&lt;input type="checkbox" class="largerCheckbox" name="checkBox"&gt;
&lt;input type="checkbox" name="checkBoxNormal"&gt;
&lt;/form&gt; 
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
