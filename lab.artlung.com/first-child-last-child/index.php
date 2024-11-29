<?php include_once("../inc.header1of2.php") ?>
CSS how to use :first-child and :last-child
<?php include_once("../inc.header2of2.php") ?>


<h1>CSS how to use :first-child and :last-child</h1>
<?php

$code = 'code.html';
include($code);

//include_once 'geshi/geshi.php';

$source = file_get_contents($code);
$language = 'html4';
//$geshi = new GeSHi($source, $language);
//$geshi->enable_classes();
//
// And echo the result!
//
//echo $geshi->parse_code();
?>
<pre><?php
echo highlight_string(file_get_contents($code));
?></pre>

<?php include_once("../inc.footer.php") ?>

