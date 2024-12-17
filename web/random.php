<?php

require_once '../loader.php';

$directories = glob('*', GLOB_ONLYDIR);

$urls = [];
$urls[] = '/';

// for a small filesystem based site this is okay,
// but for a larger site you'd want to cache the
// list of directories
foreach ($directories as $directory) {
    $just_slug = $directory;
    // My convention is to have a directory with the same name as the slug
    // Directories without that convention would be ignored,
    // To implement this you could also check for index.html or index.php.
    // Whatever indicates to the script what a valid page would be
    $file = "$directory/$just_slug.php";
    if (file_exists($file)) {
        $urls[] = "/$just_slug/";
    }
}

$link = rand(0, count($urls) - 1);
$url = $urls[$link];

// We want to be able to run this from the command line
if (php_sapi_name() != 'cli') {
    header('Location: ' . $url);
} else {
    echo $url . "\n";
}
