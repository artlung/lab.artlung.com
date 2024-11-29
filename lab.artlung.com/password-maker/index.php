<?php include_once("../inc.header1of2.php"); ?>
20 Random Alphanumeric Passwords
<?php include_once("../inc.header2of2.php"); ?>

<h1>20 Random Alphanumeric Passwords</h1>

<h2>The passwords:</h2>
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
$codeString = file_get_contents('PasswordGenerator.php');
print htmlentities($codeString);
?></pre>
<h2>How to invoke the class</h2>
<pre>
$PG = new PasswordGenerator();
$PG->printMany(20);
</pre>

<?php include_once("../inc.footer.php"); ?>