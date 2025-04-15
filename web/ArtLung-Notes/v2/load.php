<?php


$items = scandir('notes/');

foreach ($items as $file) {
    $item = json_decode(file_get_contents('notes/' . $file), true);
    if ($item && trim($item['content'])) {
        print "<div class=\"instance savedNote\" id=\"{$item['guid']}\" style=\"top:{$item['top']}px;left:{$item['left']}px;height:{$item['height']}px;\">";
        print htmlentities($item['content']);
        print "</div>\n";
    } else if (trim($item['content'] === '')) {
        unlink('notes/' . $file);
    }
}

