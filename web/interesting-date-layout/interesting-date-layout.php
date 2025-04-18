<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Interesting Date Layout');

?>

    <p class="date-attribution">Created about October 1999</p>

    <h1 class="p-name">Interesting Calendar Layout</h1>
    <div style="background: black;width:min-content;padding: 10px;overflow: hidden;max-width: 100%;">
        <?php require "source.php"; ?>
    </div>


    <h2>Source</h2>
    <pre>
<?php highlight_file("source.php") ?>
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
