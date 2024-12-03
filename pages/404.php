<?php
require_once '../loader.php';

// what was the requested url?

$requestedUrl = $_SERVER['REQUEST_URI'];

// parse the path

$path = parse_url($requestedUrl, PHP_URL_PATH);

$pathParts = explode('/', $path);

foreach ($pathParts as $part) {
    if (empty($part)) {
        continue;
    }
    if (is_dir($part)) {
        header("Location: /$part/");
        exit;
    }
}

$lab = new Lab();
header("HTTP/1.0 404 Not Found");
$lab->printHeader('404');
?>

<h1>404 Not Found</h1>


<?php
$lab->printFooter();
