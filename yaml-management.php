<?php

require_once 'loader.php';

$directories = glob('web/*', GLOB_ONLYDIR);

$slugs_and_titles = ArtlungLab\Nav::getMetadata();


foreach ($directories as $directory) {
    $just_slug = str_replace('web/', '', $directory);

    $yaml_file = "$directory/$just_slug.yaml";


    if (!file_exists($yaml_file)) {
        // make it
        $yaml = [];
        $yaml['slug'] = $just_slug;
        $yaml['year'] = $years[$just_slug];
        $yaml['title'] = $slugs_and_titles[$just_slug]['title'];
        $yaml['canonical_url'] = "https://lab.artlung.com/$just_slug/";
        $yaml['tags'] = [];
        $tags = [];
        $tag_mapping = [
            'css' => 'css',
            'html' => 'html',
            'coldfusion' => 'coldfusion',
            'asp' => 'asp',
            'javascript' => 'javascript',
            'php' => 'php',
            'sql' => 'sql',
            'unix' => 'unix',
            'border-radius' => 'css',
            'strtotime' => 'php',
            'onmouseover' => 'javascript',
            'jquery' => 'javascript',
            'vbscript' => 'vbscript',
            'mysql' => 'sql',
        ];
        foreach ($tag_mapping as $keyword => $single_tag) {
            if (strpos(strtolower($yaml['title']), strtolower($keyword)) !== false) {
                $tags[] = $single_tag;
            }
            if (strpos(strtolower($yaml['canonical_url']), strtolower($keyword)) !== false) {
                $tags[] = $single_tag;
            }
        }
        $yaml['tags'] = array_unique($tags);
        sort($yaml['tags']);
        file_put_contents($yaml_file, Spyc::YAMLDump($yaml));
    }


    if (file_exists($yaml_file)) {
        $yaml = file_get_contents($yaml_file);
        $yaml = Spyc::YAMLLoad($yaml);
        $yaml['slug'] = $just_slug;


        if (!$years[$just_slug]) {
            die("No year for $just_slug");
        }
        $yaml['year'] = $years[$just_slug];

        if (!$slugs_and_titles[$just_slug] && !$slugs_and_titles[$just_slug]['title']) {
            die("No title for $just_slug");
        }

        $canonical_url = "https://lab.artlung.com/$just_slug/";
        $yaml['canonical_url'] = $canonical_url;

        $yaml['title'] = $slugs_and_titles[$just_slug]['title'];

        $tags = [];
        $tag[] = 'web';

        // if title or url contains css, add css tag
        // if contains html, add html tag
        // if contains coldfusion, add coldfusion tag
        // if contains asp, add asp tag
        // if contains javascript, add javascript tag
        // if contains php, add php tag
        // if contains sql, add sql tag
        // if contains unix, add unix tag

        $tag_mapping = [
            'css' => 'css',
            'html' => 'html',
            'coldfusion' => 'coldfusion',
            'asp' => 'asp',
            'javascript' => 'javascript',
            'php' => 'php',
            'sql' => 'sql',
            'unix' => 'unix',
            'border-radius' => 'css',
            'strtotime' => 'php',
            'onmouseover' => 'javascript',
            'jquery' => 'javascript',
            'vbscript' => 'vbscript',
            'mysql' => 'sql',
        ];

        foreach ($tag_mapping as $keyword => $single_tag) {
            if (strpos(strtolower($yaml['title']), strtolower($keyword)) !== false) {
                $tags[] = $single_tag;
            }
            if (strpos(strtolower($yaml['canonical_url']), strtolower($keyword)) !== false) {
                $tags[] = $single_tag;
            }
        }

        $yaml['tags'] = array_unique($tags);
        sort($yaml['tags']);



         file_put_contents($yaml_file, Spyc::YAMLDump($yaml));


    }



}


