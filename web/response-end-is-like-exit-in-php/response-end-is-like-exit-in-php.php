<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
In ASP, Response.End is like exit() in PHP
'
);

?>

    <p class="date-attribution">Created July 12, 2006, Posted August 27, 2016</p>

    <h1 class="p-name">
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
