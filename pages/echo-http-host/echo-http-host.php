<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
HTTP_HOST environment variable in PHP
'
);

?>

    <h1>HTTP_HOST environment variable in PHP</h1>

    <h2>Result:</h2>

    <p>
        <?php
        echo $_SERVER["HTTP_HOST"]; //more explicit style (preferred)_
        echo "<br>";
        ?>
    </p>


    <h2>Source Code:</h2>
    <pre>
&lt;?php
    echo <b>$_SERVER["HTTP_HOST"];</b> //more explicit style (preferred)_
    echo "&lt;br&gt;";
?&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
