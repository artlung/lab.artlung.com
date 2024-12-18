<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('isEmail() function in PHP');

?>


    <p class="date-attribution"><i>Created: June/2009</i></p>

    <h1>isEmail() function in PHP</h1>

    <p>A basic regular expression using <a href="https://www.php.net/manual/en/function.preg-match.php"><code>preg_match()</code></a>to
        check for the validity of an email address.</p>

    <h2>Source:</h2>

<?php

$source_string = <<<'EOD'
<?php
function isEmail($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
};
EOD;
?>
    <pre>
    <?php
    highlight_string($source_string);
    ?></pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
