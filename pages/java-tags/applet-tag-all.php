<?php
/**
 * If they want new windows, give it to them!
 * php version 7.2
 *
 * @category PHP
 * @package  Java_Tags
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
?><?php

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
        include __DIR__ . "/$url" .
        "</code></pre>";

    print "<hr>";

}