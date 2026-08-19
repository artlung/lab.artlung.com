<?php require_once __DIR__ . '/../../loader.php'; ?><!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="/wml/wml.css<?php
    echo '?v=' . filemtime(__DIR__ . '/wml.css');
    ?>">
    <script src="/2025.js<?php
    echo '?' . filemtime(__DIR__ . '/../2025.js');
    ?>"></script>
    <link rel="webmention" href="https://webmention.io/artlung.com/webmention">
</head>
<body><?php ob_start();
require_once __DIR__ . '/wml.php';
$xml = ob_get_clean();
$parsed_dom = simplexml_load_string($xml);
if ($parsed_dom === false) {
    // no-op
}
// replace wml tag with a main tag
$xml = str_replace('<wml', '<main', $xml);
$xml = str_replace('</wml>', '</main>', $xml);
// remove the head tag

$xml = preg_replace('/<head>.*?<\/head>/s', '', $xml);
// replace the card tag with a section tag
$xml = str_replace('<card', '<section', $xml);
$xml = str_replace('</card>', '</section>', $xml);

// remove the xml declaration
// remove the doctype declaration
$xml = preg_replace('/^<\?xml.*?\?>/s', '', $xml);
$xml = preg_replace('/<!DOCTYPE.*?>/s', '', $xml);

print $xml;
?>


</body>
</html>