<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'Quick jQuery Overlay'
);

?>
<p class="date-attribution">December 2024. Original from January 2018</p>

    <h1>Quick Overlay</h1>
    <p><em>
            Formerly known as Quick jQuery Overlay.
        </em></p>

<?php
    $js = file_get_contents('quick-jquery-overlay-revisited.js');

    // as bookmarklet

try {
    $bookmarklet = 'javascript:' . \ArtlungLab\Bookmarklet::javascriptToBookmarklet($js);
} catch (Exception $e) {
    $bookmarklet = 'Error: ' . $e->getMessage();
}
printf('<p>The <a href="%s" class="bookmarklet">Quick Overlay</a> bookmarklet</p>', $bookmarklet);
?>
    <h2>Why?</h2>

    <p>From 2018:</p>

<blockquote>
        Sometimes I have a need to overlay an image over top of an existing website. And very often jQuery is available.
        And so, here's a little chunk of code that creates an overlay.
</blockquote>

    <p>Create your own overlay with a <code>backgroundImage</code> of your own along with a background size and you can paste it into developer tools when you're doing development. Adjust the opacity to your liking.</p>

<p>jQuery is no longer required.</p>

<?php
    printf('<h2>Source</h2>');
    $lab->printCodeBlock($js);
?>

<h2>Source (compressed)</h2>

<pre><code><?php print $bookmarklet; ?></code></pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
