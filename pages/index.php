<?php

require_once '../loader.php';
$lab = new Lab();
$lab->printHeader(
    'ArtLung Lab: Web Tech Experiments by Joe Crawford', [
        'open-nav' => true
    ]
);
?>

    <h1>The Lab</h1>
    <p>Web experiments by <a href="https://artlung.com/">Joe Crawford</a> since 1996. Many are quite out of date! Some,
        less so. Thanks for visiting. Feel free to leave a comment using Disqus or you can also send a webmention to
        most pages and I'll receive them.</p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);