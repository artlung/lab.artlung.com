<?php

require_once 'loader.php';

$directories = glob('web/*', GLOB_ONLYDIR);

$out_var = [];
foreach ($directories as $directory) {
    $just_slug = str_replace('web/', '', $directory);

    $yaml_file = "$directory/$just_slug.yaml";

    if (!file_exists($yaml_file)) {

    }

    $yaml = file_get_contents($yaml_file);
    $yaml = Spyc::YAMLLoad($yaml);
    $out_var[$just_slug] = $yaml;


}

$out_file_content = '<?php' . "\n\n" . '$slugs_and_titles = '. var_export($out_var, true) . ';';

file_put_contents('slugs_and_titles.php', $out_file_content);

