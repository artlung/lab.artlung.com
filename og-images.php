<?php

require 'loader.php';

// scan every top level directory in /web/
$directories = scandir('web');

$directories_only = array_filter(
    $directories, function ($element) {
        return is_dir("web/$element");
    }
);

$domain = 'https://lab.artlung.com';

$commands = [];

$commands[] = "shot-scraper $domain/  --width 1200 --height 630 --quality 80 -o web/og-home.jpg";



foreach ($directories_only as $slug) {

    // slug can't begin with a .
    if (substr($slug, 0, 1) == '.') {
        continue;
    }



    //     --wait 4000 can wait 4 seconds, as with zac-stl

    $yaml_file_path = "web/$slug/$slug.yaml";


    $wait_time = false;
    if (is_file($yaml_file_path)) {
        $yaml = file_get_contents($yaml_file_path);
        $yaml_data = Spyc::YAMLLoad($yaml);
        if (isset($yaml_data['shot-scraper-wait'])) {
            $wait_time = $yaml_data['shot-scraper-wait'];
        }


        if (isset($yaml_data['og-image-date']) && $yaml_data['og-image-date']) {
            $og_image_date = $yaml_data['og-image-date'];
            $og_image_date_time = strtotime($og_image_date);
            $now = time();

            $diff = $now - $og_image_date_time;
            $days = $diff / 60 / 60 / 24;

            if ($days < 7) {
                continue;
            }
        }



    }

    if (!$wait_time) {
        $commands[] = "shot-scraper $domain/$slug/  --width 1200 --height 630 --quality 80 -o web/$slug/og-$slug.jpg";
    } else {
        $commands[] = "shot-scraper $domain/$slug/  --width 1200 --height 630 --quality 80 --wait $wait_time -o web/$slug/og-$slug.jpg";
    }

    if (is_file($yaml_file_path)) {
        $yaml_data['og-image-date'] = date('Y-m-d H:i:s');
        $yaml = Spyc::YAMLDump($yaml_data);
        file_put_contents($yaml_file_path, $yaml);
    }



}

foreach ($commands as $command) {
    print $command . PHP_EOL;
    shell_exec($command);
}








