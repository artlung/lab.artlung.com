<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
My First ASP Class
'
);

?>

    <p class="date-attribution">July 21, 2006. Posted August 27, 2016</p>

    <h1>My first VBScript Test Class</h1>


<?php $lab->printCodeBlock(file_get_contents('TestClass.asp')); ?>

    <h2>And testing it out</h2>


<?php $lab->printCodeBlock(file_get_contents('testing.asp')); ?>

    <h2>Results</h2>

<div style="border: solid;padding: 1rem">
<?php require "results.html"; ?>
</div>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
