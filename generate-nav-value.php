<?php

require_once 'loader.php';


// if not cli, warn and exit
if (php_sapi_name() !== 'cli') {
    echo "This script must be run from the command line\n";
    exit(1);
}

$directories = glob('web/*', GLOB_ONLYDIR);

$out_var = [];
foreach ($directories as $directory) {
    $just_slug = str_replace('web/', '', $directory);

    $yaml_file = "$directory/$just_slug.yaml";

    if (!file_exists($yaml_file)) {
        echo "No YAML file for $just_slug\n";

        // prompt user to (c)continue or (q)quit
        echo "Continue? (c)ontinue or (q)uit: ";
        $handle = fopen("php://stdin", "r");
        $line = fgets($handle);
        if (trim($line) != 'c') {
            echo "Aborted\n";
            exit;
        }
        continue;
    }

    $yaml = file_get_contents($yaml_file);
    $yaml = Spyc::YAMLLoad($yaml);
    $out_var[$just_slug] = $yaml;


}

$out_file_content = sprintf('/* START: handled by php generate-nav-value LAST UPDATE %s */', date('Y-m-d H:i:s'));
$out_file_content .= PHP_EOL;
$out_file_content .= 'return $slugs_and_titles = '. var_export($out_var, true) . ';';
$out_file_content .= PHP_EOL;

$target_file = 'classes/Nav.php';

$existing_content = file($target_file);
$new_content = [];

$found_start = false;
$found_end = false;
$new_content_inserted = false;

foreach ($existing_content as $line) {

    if (strpos($line, '/* START: handled by php generate-nav-value LAST UPDATE') === false) {
        echo '';
    } else {
        $found_start = true;
    }

    if (strpos($line, '/* END: handled by php generate-nav-value */') === false) {
        echo '';
    } else {
        $found_end = true;
    }

    // if we have not found the start, write
    if (!$found_start) {
        $new_content[] = $line;
    }
    // if we found the start and the end, write
    if ($found_start && $found_end) {
        $new_content[] = $line;
    }
    // if we found the start, but not the end, skip, and if we have not inserted the new content, insert it
    if ($found_start && !$found_end && !$new_content_inserted) {
        $new_content[] = $out_file_content;
        $new_content_inserted = true;
    }

}

file_put_contents($target_file, implode('', $new_content));





