<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('Single Pixel Gif as a base 64 encoded string');

?>

    <p class="date-attribution">Created around October 2011</p>
    <h1>Single Pixel Gif as a base 64 encoded string</h1>

    <p>Single pixel GIF files were a technique to create blocks on a web page which were assured to take up space. In
        the modern CSS era there is less call for using transparent GIFs like this. A data-encoded image is one which
        has been encoded such that they are valid image data but don't require a network call.</p>

    <pre class="code">
&lt;img alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" /&gt;
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
