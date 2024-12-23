<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Outbound Link Confirmation');

?>

    <p class="date-attribution">Created 1 January 2002, Updated 22 April 2013</p>
    <h1 class="p-name">Outbound Link Confirmation</h1>

    <p>I happen to think that limiting users travels on a website is pretty rude, but there are times
        when you want to let users know that by clicking a certain link, they will be leaving your site.</p>

    <p>For those times, I offer an outbound link confirmation. It will prompt the user to confirm that they want to
        leave the website.</p>

    <p><b>So here's the sample in action:</b></p>

    <a href="https://www.google.com/" onclick="return outboundLink();">visit google.com</a>

    <p><b>And here's the Source Code in the HTML</b></p>

    <pre>&lt;a href="https://www.google.com/" <b>onclick="return outboundLink();"</b>&gt;visit google.com&lt;/a&gt;</pre>

    <p><b>And this is the function to include in the &lt;head&gt; of any web page that will use this script:</b></p>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
