<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('CSS how to use :first-child and :last-child');
?>
    <p class="date-attribution">Created November 2011</p>
    <h1 class="p-name">CSS how to use :first-child and :last-child</h1>
<?php
$code = 'code.html';
require $code;
$source = file_get_contents($code);
?>
    <pre><?php
        echo highlight_string(file_get_contents($code), true);
    ?></pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);


