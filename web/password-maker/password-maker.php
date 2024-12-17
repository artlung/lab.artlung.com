<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('20 Random Alphanumeric Passwords');

?>

    <p class="date-attribution">January 3, 2009</p>
    <h1>20 Random Alphanumeric Passwords</h1>

    <h2>The passwords:</h2>

    <p>No record is made of these passwords.</p>
    <pre>

<?php

require 'PasswordGenerator.php';
$PG = new PasswordGenerator();
$PG->printMany(20);
?>
</pre>

    <h2>The code for the class</h2>
    <pre>
<?php
highlight_file('PasswordGenerator.php');
?></pre>
    <h2>How to invoke the class</h2>
    <pre>
$PG = new PasswordGenerator();
$PG->printMany(20);
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);