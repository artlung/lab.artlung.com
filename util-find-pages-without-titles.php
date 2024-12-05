<?php

require 'loader.php';

// scan every top level directory in /pages/
$directories = scandir('pages');

$directories_only = array_filter(
    $directories, function ($element) {
        return is_dir("pages/$element");
    }
);

$ignored_items = Nav::ignoredDirectoryNames();
// remove from directories_only the ignored items
$directories_only = array_diff($directories_only, $ignored_items);
$navItems = Nav::getMetadata();

// Utility file for spelunking the pages directory
// used to get years for pages
// used to change how pages are loaded and move content arount
// used to find pages without titles
// used to find pages without metadata

