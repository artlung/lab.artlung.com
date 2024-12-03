<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader('Super Simple Countdown');

?>

    <p class="date-attribution">Created 03/2001; Updated April 2002 and December 2005</p>

    <h1> Super Simple Countdown in PHP.</h1>

<?php require 'countdown-source.php'; ?>

    <h2>Source Code:</h2>

    <pre><?php highlight_file('countdown-source.php'); ?></pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);


