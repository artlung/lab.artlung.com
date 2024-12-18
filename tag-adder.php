<?php

require 'loader.php';
// must be run from the command line

if (php_sapi_name() != 'cli') {
    die('CLI only');
}
$directories = glob('web/*', GLOB_ONLYDIR);

foreach ($directories as $directory) {
    $just_slug = str_replace('web/', '', $directory);

    $yaml_file = "$directory/$just_slug.yaml";

    $yaml = Spyc::YAMLLoad(file_get_contents($yaml_file));

    if (!isset($yaml['tags'])) {
        $yaml['tags'] = [];
    }

    $tag_count = count($yaml['tags']);

    if ($tag_count === 0) {
        printf("No tags for %s\n", $just_slug);
        print "Page is at " . $yaml['canonical_url'] . "\n";
        print "Enter tags, separated by commas, or just enter to skip, q to exit: ";
        $handle = fopen("php://stdin", "r");
        $line = fgets($handle);

        if (trim($line) == 'q') {
            die("Exiting\n");
        }

        if (trim($line) == '') {
            continue;
        }

        $tags = explode(',', $line);
        $tags = array_map('trim', $tags);
        $tags = array_unique($tags);
        sort($tags);
        $yaml['tags'] = $tags;
        file_put_contents($yaml_file, Spyc::YAMLDump($yaml));
        printf("Tags added for %s\n", $just_slug);

    } else {
        //        printf("Tags already exist for %s\n", $just_slug);
    }



}
