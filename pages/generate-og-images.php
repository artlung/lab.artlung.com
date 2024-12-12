<?php

require 'loader.php';

$navItems = Nav::getMetadata();
$commands = [];
$commands[] = 'shot-scraper https://lab.artlung.com/ --width 1200 --height 630;';

foreach ($navItems as $slug => $metadata) {
    $command[] = "shot-scraper https://lab.artlung.com/$slug/  --width 1200 --height 630;";
}

$commands[] = 'mv *.png ./pages/og-images/';

foreach ($commands as $command) {
    shell_exec($command);
}