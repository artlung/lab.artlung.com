<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
In ASP, Response.End is like exit() in PHP
'
);

?>

    <p class="date-attribution">Created July 12, 2006, Posted August 27, 2016</p>

    <h1>
        In ASP, Response.End is like exit() in PHP
    </h1>

<?php
$contents = file_get_contents("source.html");

print $contents;

?>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
