<?php

require_once '../loader.php';

$directories = glob('*', GLOB_ONLYDIR);

$urls = [];
$urls[] = '/';

foreach ($directories as $directory) {
    $just_slug = str_replace('web/', '', $directory);

    $file = "$directory/$just_slug.php";
    if (file_exists($file)) {
        $urls[] = "/$just_slug/";
    }
}

$check_for_subdirectories_in = [];

foreach ($check_for_subdirectories_in as $subdir) {
    $subdirectories = glob("$subdir/*", GLOB_ONLYDIR);
    foreach ($subdirectories as $subdirectory) {
        $just_slug = str_replace("$subdir/", '', $subdirectory);
        $file = "$subdirectory/$just_slug.php";
        if (file_exists($file)) {
            $urls[] = "/$subdir/$just_slug/";
        }
    }
}






$sm = new SiteMap($urls);
$sm->setDomain('lab.artlung.com');
$sm->setDefaultFilectime(filectime('index.php'));
$sm->output();