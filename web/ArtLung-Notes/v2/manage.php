<?php

require_once __DIR__ . '/../../../loader.php';

// cli only

if (php_sapi_name() !== 'cli') {
    exit;
}
$items = glob(__DIR__ . '/notes/*.json');

print "Found " . count($items) . " items\n";
$i = 0;
foreach ($items as $file) {
    $item = json_decode(file_get_contents($file), true);
    if ($item) {
        $content_for_cli = $item['content'];
        // if newlines, indent the content
        if (strpos($content_for_cli, "\n") !== false) {
            $content_for_cli = str_replace("\n", "\n    ", $content_for_cli);
        }

        print str_pad(++$i, 3, ' ', STR_PAD_LEFT) . ' '. $content_for_cli . "\n";
    }
}
echo "Enter the number of the item you want to delete, return to skip;";
echo "You can also separate multiple numbers with commas\n";
$handle = fopen("php://stdin", "r");
$line = fgets($handle);
$line = trim($line);
if (is_numeric($line)) {
    $line = (int) $line;
    if ($line > 0 && $line <= count($items)) {
        $file = $items[$line - 1];
        print "Deleting $file\n";
        unlink($file);
    } else {
        print "Invalid number\n";
    }
} else if (strpos($line, ',') !== false) {
    $numbers = explode(',', $line);
    foreach ($numbers as $number) {
        $number = trim($number);
        if (is_numeric($number)) {
            $number = (int) $number;
            if ($number > 0 && $number <= count($items)) {
                $file = $items[$number - 1];
                print "Deleting $file\n";
                unlink($file);
            } else {
                print "Invalid number\n";
            }
        } else {
            print "Invalid number\n";
        }
    }
}



print "Done\n";
