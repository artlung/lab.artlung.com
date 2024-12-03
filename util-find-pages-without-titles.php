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

    if (is_dir("pages/$slug") && !is_file("pages/$slug/$slug.php")) {
        print "No $slug.php in $slug\n";

        if (is_file("pages/$slug/index.html")) {
            print "But there is an index.html in $slug\n";



        }
    }


}





