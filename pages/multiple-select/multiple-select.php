<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Multiple, Hierarchical SelectBoxes
'
);

?>

<p class="date-attribution">1999</p>
    <h1>Multiple, Hierarchical SelectBoxes</h1>

    <p>No documentation here, other that the comments in the source. It's the typical multiple select box thing. There
        is probably a much better way to do this. This is my way.</p>

<?php ob_start(); ?>
    <form name="PlaceHold" action="./">

        <select name="foo" size="5"
                onchange="changeSecondSelect('PlaceHold','foo','bar');clearSelect('PlaceHold','splorch');">
            <option>Choose One...</option>
            <option value="1">red</option>
            <option value="2">green</option>
            <option value="3">blue</option>
        </select>

        <select name="bar" size="5" onchange="changeSecondSelect('PlaceHold','bar','splorch');">
            <option>Choose One...</option>
            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
        </select>

        <select name="splorch" size="5">
            <option>Choose One...</option>
            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
        </select>
    </form>
<?php $html = ob_get_clean(); ?>
<?php echo $html; ?>
<h2>HTML</h2>

<pre><code class="html"><?php echo htmlentities($html); ?></code></pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
