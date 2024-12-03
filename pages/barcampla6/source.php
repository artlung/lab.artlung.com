<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader('BarCamp LA 6: Source Code for jQuery Introduction');
?>

<p class="date-attribution">26 October 2008</p>
    <h1><a href="./">BarCamp LA 6: for jQuery Introduction</a>: Source Code</h1>

    <h2>HTML</h2>
<?php $lab->printCodeBlock(file_get_contents('barcamp6.php')); ?>

    <h2>JavaScript</h2>

<?php $lab->printCodeBlock(file_get_contents('barcampla6.js')); ?>

    <h2>SCSS</h2>

<?php $lab->printCodeBlock(file_get_contents('barcampla6.scss')); ?>

    <h2>Selectors</h2>

<?php $lab->printCodeBlock(file_get_contents('selectors.txt')); ?>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);