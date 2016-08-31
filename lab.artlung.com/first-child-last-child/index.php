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

