<?php

require 'loader.php';

// scan every top level directory in /pages/
$directories = scandir('pages');

$directories_only = array_filter(
    $directories, function ($element) {
        return is_dir("pages/$element");
    }
);

$ignored_items = Nav::ignoredItems();
// remove from directories_only the ignored items
$directories_only = array_diff($directories_only, $ignored_items);


$navItems = Nav::getMetadata();

// sort the directories
sort($directories_only);
$slugs_and_years = array();

foreach($directories_only as $slug)
{
    // is the slug a key in navItems?

    $title = $slug;
    if (array_key_exists($slug, $navItems)) {
        $title = $navItems[$slug]['title'];
        //        print "Title for $slug is $title\n";
    } else {
        // print a warning that it is not there
        print "No title for $slug\n";
    }

    // does the directory actually exist?
    if (!is_dir("pages/$slug")) {
        print "Directory $slug does not exist\n";
    }

    if (is_dir("pages/$slug") && is_file("pages/$slug/$slug.php")) {

        // look for the string date-attribution,
//        load the line, parse as html, print the text Content
        $filename = "pages/$slug/$slug.php";
        $lines = file($filename);



        foreach ($lines as $line) {
            if (strpos($line, 'date-attribution') !== false) {

                $line = trim(strip_tags($line));

                $every_4_digit_year = '/\b\d{4}\b/';

                preg_match_all($every_4_digit_year, $line, $matches);

                if (count($matches[0]) > 0) {
                    $max_year = 0;
                    foreach ($matches[0] as $year) {
                        $year = intval($year);
                        if ($year > $max_year) {
                            $max_year = $year;
                        }
                    }
//                    print "Max year for $slug is $max_year\n";
                    if ($max_year) {
//                        $slugs_and_years[$slug] = $max_year;
                    }


                } else {
//                    print "No year found in $line\n";
                    $slugs_and_years[$slug] = 0;
                }





//
//                print "Attribution for $slug is $line\n";
            }

        }




    }


}

var_export($slugs_and_years);




