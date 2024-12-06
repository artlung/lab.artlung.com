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


// run this command for every slug
// shot-scraper https://lab.artlung.com/rosetta/  --width 1200 --height 630;
// aka
// shot-scraper https://lab.artlung.com/$slug/  --width 1200 --height 630;

$commands = [];
$commands[] = 'shot-scraper https://lab.artlung.com/ --width 1200 --height 630;';

foreach ($navItems as $slug => $metadata) {
    $command[] = "shot-scraper https://lab.artlung.com/$slug/  --width 1200 --height 630;";
}

$commands[] = 'mv *.png ./pages/og-images/';

foreach ($commands as $command) {
    shell_exec($command);
}








