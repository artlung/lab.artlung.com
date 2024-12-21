<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(':root Color Properties Editor (Bookmarklet)');

?>

<p class="date-attribution">Created December 2024</p>
<h1>:root Color Properties Editor (Bookmarklet)</h1>

<p>Many websites have colors defined at their <code>:root</code>. This
    bookmarklet allows you to edit those colors by adding a widget to the page. Note that to be included
    they must include the word "color" in them or have a color hex or rgb value.
</p>

    <p><b>Note:</b>
        Just because the custom properties are at the <code>:root</code> doesn't mean
    there will be a visible effect.
</p>

<p>
    <strong>Drag the link below to your browser's toolbar...</strong>
</p>
<div style="padding: 1rem;border: 3px double blue;text-align: center;font-size: 2rem;text-wrap: balance">

<?php
$javascript = file_get_contents('root-color-properties-editor.js');
$bookmarklet_javascript = ArtlungLab\Bookmarklet::javascriptToBookmarklet($javascript);

  printf('<a href="javascript:%s">:root Color Properties Editor</a>', $bookmarklet_javascript);
?>

</div>

    <figure style="background: black;color: white;margin: 1rem auto;width:min-content">
        <img src="demonstration-on-php-net-page-Large.jpg" alt="Demonstration on php.net page"
             style="aspect-ratio: 1280 / 707; min-width: 60vw;max-width: 1000px;width: 100%;">
        <figcaption>php.net with the :root Color Properties Editor bookmarklet active</figcaption>
    </figure>

<hr>


<h2>Source Code</h2>
<?php
$lab->printCodeBlock($javascript);
?>


<?php
$lab->printFooter(
    [
    'comments' => true
    ]
);



