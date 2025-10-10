<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('IndieWeb.org Webmention Bookmarklet');

?>

    <p class="date-attribution">Created Sep 2025</p>

    <h1 class="p-name">Show Webmentions pointed at IndieWeb.org pages</h1>

    <p>
        To use, drag the link to your bookmarks bar. See <a href="https://indieweb.org/">indieweb.org</a>
    </p>

    <div>
        <p>
            <?php
            $js = file_get_contents('indieweb-org-webmention-bookmarklet.js');
            $js_bookmarklet = 'javascript:' . \ArtlungLab\Bookmarklet::javascriptToBookmarklet($js);
            printf('<a href="%s">Show Webmentions for IndieWeb.org Page</a>', $js_bookmarklet);
            ?>
        </p>
        <h3>Source Code</h3>
        <?php $lab->printCodeBlock($js); ?>

    </div>


    <link rel="stylesheet" href="indieweb-org-webmention-bookmarklet.css<?php
    echo '?'.filemtime('indieweb-org-webmention-bookmarklet.css');
    ?>">
<?php
$lab->printFooter(
    [
                'comments' => true
        ]
);
