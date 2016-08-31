<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
isEmail() aka is_email() functions (PHP)
<?php include_once("../inc.header2of2.php"); ?>


<p align="right"><i>Created: June/2009</i></p>

<h1>isEmail() aka is_email()<br>

<h2>Source:</h2>

<pre>
function isEmail($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
};

function is_email($email) {
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
}
</pre>



<?php include_once("../inc.footer.php"); ?>
