<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Generate All Websafe Colors with PHP');

?>
    <p class="date-attribution">Created in May 2010</p>
    <h1 class="p-name">Generate All Websafe Colors with PHP</h1>
    <div id="holder">
        <?php require 'code.php'; ?>
    </div>
    <h2>Additional Code</h2>
    <div class="source">
        <?php highlight_file('code.php'); ?>

        <?php
        // output code that would be php code that would set $all


        ?>

    </div>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
