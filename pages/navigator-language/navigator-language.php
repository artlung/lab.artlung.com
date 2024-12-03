<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Navigator Language
'
);

?>

    <h1>JavaScript: navigator.language</h1>


    <h2>Code</h2>

    <pre>
document.write(navigator.language);
</pre>

    <h2>Results</h2>

    <script>
        document.write(navigator.language);
    </script>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);