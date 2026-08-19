<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Bookmarklets, Miscellaneous');

?>

    <h1 class="p-name">Bookmarklet to find links whose href's match a pattern</h1>

    <p>To use, drag to your bookmarks toolbar.
    </p>

<div>

        <h2>
            <?php
            $js = file_get_contents(__DIR__ . '/bookmarklet-link-finder.js');
            $js_bookmarklet = 'javascript:' . \ArtlungLab\Bookmarklet::javascriptToBookmarklet($js);
            printf('<a href="%s">Find links to...</a>', $js_bookmarklet);
            ?>
        </h2>
        <h3>Source</h3>

        <?php $lab->printCodeBlock($js); ?>

    </div>



    <link rel="stylesheet" href="../bookmarklets/bookmarklets.css<?php
    echo '?'.filemtime(__DIR__ . '/../bookmarklets/bookmarklets.css');
    ?>">
<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
