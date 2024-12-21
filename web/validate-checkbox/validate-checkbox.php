<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Only submit if a checkbox is checked');

?>

    <p class="date-attribution">Originally Posted 2001</p>

    <h1 class="p-name">Only submit if at least one checkbox is checked</h1>
    <p><b>A Question I got:</b></p>

    <blockquote>
        I would like to show an alert <b>if no check box was checked</b> in a field. The
        idea is that at least one check box should be checked. I have an onSubmit for
        the form and a JS function that suppose to check it but it does not work.

    </blockquote>

<?php ob_start(); ?>
    <form action="/" onsubmit="return checkCheckBoxes(this);">
        <p><label><input type="CHECKBOX" name="CHECKBOX_1" value="This..."> This...</label></p>
        <p><label><input type="CHECKBOX" name="CHECKBOX_2" value="That..."> That...</label></p>
        <p><label><input type="CHECKBOX" name="CHECKBOX_3" value="...and The Other"> ...and The Other</label></p>
        <p><input type="SUBMIT" value="Submit!"></p>
    </form>
<?php $source = ob_get_clean(); ?>
<?php print $source; ?>
    <h2>HTML Source Code</h2>
    <pre><?php echo htmlentities($source) ?></pre>
    </pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
