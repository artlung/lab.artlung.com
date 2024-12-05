<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    'Recursive Iframe'
);
?>

<p class="date-attribution">2009-09-12</p>
<h1>Recursive Iframe</h1>

<p>This page calls an iframe which calls itself. The question, is what happens?</p>

<!--iframe code here -->
<?php require 'iframe.html'; ?>
<!--/end iframe code-->


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
