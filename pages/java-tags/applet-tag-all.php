<?php

$valid_pages_and_titles = [
    'applet-tag-3.2.php' => 'W3C - HTML 3.2',
    'applet-tag-4.0.php' => 'W3C - HTML 4.0',
    'applet-tag-microsoft.php' => 'Microsoft',
    'applet-tag-netscape.php' => 'Netscape',
    'applet-tag-sun.php' => 'Sun',
];

foreach ($valid_pages_and_titles as $url => $title) {
    echo "<h2>" . htmlentities($title) . "</h2>";

    print "<pre><code>" .
        file_get_contents(__DIR__ . "/$url") .
        "</code></pre>";

    print "<hr>";

}