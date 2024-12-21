<?php

require_once 'loader.php';

$directories = glob('web/*', GLOB_ONLYDIR);

$slugs_and_titles = ArtlungLab\Nav::getMetadata();


foreach ($directories as $directory) {
    $just_slug = str_replace('web/', '', $directory);

    $yaml_file = "$directory/$just_slug.yaml";

    if (!file_exists($yaml_file)) {
        touch($yaml_file);
    }

    $yaml = Spyc::YAMLLoad($yaml_file);

    $original_yaml = $yaml;

    if (!isset($yaml['slug']) || $yaml['slug'] != $just_slug) {
        $yaml['slug'] = $just_slug;
    }

    if (!isset($yaml['canonical_url']) || $yaml['canonical_url'] != "https://lab.artlung.com/$just_slug/") {
        $yaml['canonical_url'] = "https://lab.artlung.com/$just_slug/";
    }

    if (!isset($yaml['year'])) {
        $yaml['year'] = (int) date('Y');
    }

    // if title not set, set it to the first h1 in the file slug/slug.php
    if (!isset($yaml['title'])) {
        $slug_file = "$directory/$just_slug.php";
        $slug_content = file_get_contents($slug_file);
        $matches = [];
        preg_match('/<h1>(.*?)<\/h1>/', $slug_content, $matches);
        if (isset($matches[1])) {
            $yaml['title'] = $matches[1];
        }
    }

    if (!isset($yaml['tags']) || !is_array($yaml['tags']) || count($yaml['tags']) == 0) {
        $yaml['tags'] = [];
        print "No tags for $just_slug, be sure to run php tag-adder.php\n";
    }

    if (!isset($yaml['og-image-date'])) {
        print "No og-image-date for $just_slug, be sure to run php og-images.php\n";
    }


    // is the yaml different?
    if ($yaml != $original_yaml) {
        $yaml_string = Spyc::YAMLDump($yaml);
        file_put_contents($yaml_file, $yaml_string);
        print "Yaml file changed for $just_slug\n";
        print "Run php tag-adder.php and php og-images.php\n";
        print "Also run php generate-nav-value.php\n";
    }


}


