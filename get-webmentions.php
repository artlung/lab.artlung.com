<?php

require_once 'loader.php';

$pages = \ArtlungLab\Nav::getMetadata();


foreach ($pages as $slug => $metadata) {

    //    echo "Checking $slug\n";

    $webmentions_file = "webmention_data/$slug.json";
    $yaml_file = "web/$slug/$slug.yaml";

    if (!file_exists($yaml_file)) {
        print "No YAML file for $slug, it's not a real page yet, skipping...";
        continue;
    }

    $yaml = Spyc::YAMLLoad($yaml_file);

    if (isset($yaml[\ArtlungLab\WebmentionIoGetter::WEBMENTION_LAST_CHECKED_KEY])) {
        $last_checked = $yaml[\ArtlungLab\WebmentionIoGetter::WEBMENTION_LAST_CHECKED_KEY];
        //        print "Last checked date for $slug is $last_checked\n";

        if (is_file($webmentions_file)) {
            //            print  "There is a webmentions file for $slug\n";
            $webmentions = json_decode(file_get_contents($webmentions_file), true);
            $yaml[\ArtlungLab\WebmentionIoGetter::WEBMENTION_COUNT_KEY] = count($webmentions);
            $count = count($webmentions);
            if ($count > 0) {
                print "Count for $slug is " . count($webmentions) . "\n";
            }
            $yaml = Spyc::YAMLDump($yaml);
            file_put_contents($yaml_file, $yaml);
        }


    } else {
        $last_checked = 0;
        print "No last checked date for $slug, setting to 0\n";
    }




    // only get them once a week
    if (time() - $last_checked < 604800) {
        //        print "Skipping $slug, last checked $last_checked\n";
        continue;
    }

    $success = \ArtlungLab\WebmentionIoGetter::getAndStashWebmentions($slug, $metadata['canonical_url']);

    if (!$success) {
        print "Failed to get and stash webmentions for $slug\n";
        continue;
    }

    $yaml[\ArtlungLab\WebmentionIoGetter::WEBMENTION_LAST_CHECKED_KEY] = time();

    $yaml = Spyc::YAMLDump($yaml);

    file_put_contents($yaml_file, $yaml);

    print "Updated $slug\n";






}

echo "Done. If the webmention count changed,\n";
echo "be sure to run generate-nav-value.php\n";
echo "and composer snifferfix\n";