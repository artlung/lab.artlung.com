<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
isEmail() aka is_email() functions (PHP)
');

?>


<p class="date-attribution"><i>Created: June/2009</i></p>

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



<?php
$lab->printFooter([
    'comments' => true
]);
