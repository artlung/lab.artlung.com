<?php require_once __DIR__ . '/../../loader.php'; ?><!DOCTYPE html>
<html lang="en">
<head>
    <title>WML, WAP, &amp; Microformats Demo! by ArtLung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/wml/wml.css<?php
    echo '?v=' . filemtime(__DIR__ . '/wml.css');
    ?>">
    <script src="/2025.js<?php
    echo '?' . filemtime(__DIR__ . '/../2025.js');
    ?>"></script>
    <link rel="webmention" href="https://webmention.io/artlung.com/webmention">
    <meta property="og:image" content="https://lab.artlung.com/wml/og-wml-faux.jpg">
    <link rel="canonical" href="https://lab.artlung.com/wml/faux">
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

// replace mode="wrap" with nothing
$xml = preg_replace('/ mode="wrap"/', '', $xml);
// remove trailing slash from tags
$xml = preg_replace('/<(\w+)([^>]*)\/>/', '<$1$2>', $xml);

// the p with class p-name should be swapped with a h1 tag
$xml = preg_replace('/<p class="p-name">(.*?)<\/p>/', '<h1 class="p-name">$1</h1>', $xml);

//    <section id="main" class="e-content">
//        <h1 class="p-name">WML, WAP, &amp; Microformats Demo! by ArtLung<a class="u-url" href="https://lab.artlung.com/wml/"></a></h1>
// in the markup move the h1 tag to be *before* the section tag

// capture the h1 into a variable
preg_match('/<h1 class="p-name">(.*?)<\/h1>/', $xml, $matches);
$h1_content = $matches[0];
// remove it from the xml
$xml = preg_replace('/<h1 class="p-name">.*?<\/h1>/', '', $xml);

// add it to the code before the section tag
$xml = preg_replace('/<section id="main" class="e-content">/', $h1_content . '<section id="main" class="e-content">', $xml);





print $xml;
?>


</body>
</html>