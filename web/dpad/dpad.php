<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'dpad'
);

?>


    <p class="date-attribution">Created 2011</p>
    <h1 class="p-name">DPAD</h1>

<div id="main"></div>

<p>
    This was a demo page I made in 2011 when trying to sort out controls
    for an interface which would be navigable with a D-pad (directional pad) like
    on a game controller or remote control. It uses MooTools. I recovered the code
    from The Internet Archive's Wayback Machine.
</p>

<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
<?php
    $filectime = filectime(__DIR__ . '/dpad.js');
    echo '<script src="/dpad/dpad.js?v=' . $filectime . '"></script>';
?>

</body>
</html>