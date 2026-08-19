<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Microformats Bookmarklet');
?>
<p class="date-attribution">THIS IS NOT READ YET</p>

<h1>
    Microformats Bookmarklet
</h1>

    <p><a href"https://developer.mozilla.org/en-US/docs/Web/HTML/microformats">Microformats</a> on
        <a href="https://developer.mozilla.org/">MDN</a>.</p>

<p>
    <a href="http://microformats.org/wiki/Main_Page">Microformats.org</a>
</p>


<?php

$js = file_get_contents(__DIR__ . '/microformats-bookmarklet.js');
$js_bookmarklet = ArtlungLab\Bookmarklet::javascriptToBookmarklet($js);

printf("<a href=\"javascript:%s\">Microformats Bookmarklet</a>", $js_bookmarklet);
?>

<h2>Source Code</h2>

<?php
$lab->printCodeBlock($js);
?>

<?php
$lab->printFooter(
    [
    'comments' => true
    ]
);
