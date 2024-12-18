<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('How to Make a file with every file on a C:\ drive');
?>

    <p class="date-attribution">Created August 21, 2000</p>

    <h2>How to Make a file with every file on a C:\ drive</h2>

    <p>Say you need to have a list of every file on a Windows box, this is how you would do it!</p>

    <pre><b>dir c:\ /s/b &gt; c:\dir.txt</b></pre>

    <p>This makes a recursive listing of everything on <code>c:\</code>, and sends it to a file named
        "<code>dir.txt</code>" at the root of the <code>c:\</code> drive.</p>


<?php
$lab->printFooter();