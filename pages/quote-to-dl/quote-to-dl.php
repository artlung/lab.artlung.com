<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('Quote to DL (Definition List)');
?>
    <link rel="stylesheet" href="quote-to-dl.css?b=<?php
    echo filemtime('quote-to-dl.css');
    ?>" />
    <script src="quote-to-dl.js?b=<?php
    echo filemtime('quote-to-dl.js');
    ?>"></script>


    <p class="date-attribution">Created in February 2024</p>
    <h1>Turn Quotes into Definition Lists</h1>

    <section class="quote-to-dl">
        <div>
            <p>Paste in text here. There ought to be a colon after the speaker's name and each new line assumes there
                will be a name followed by ":" followed by a quote.</p>
        </div>
        <textarea id="input" class="update"></textarea>
        <div>
            <label><input type="checkbox" id="strongSpeaker" class="update">Strong speaker</label>
            <label><input type="checkbox" id="emQuote" class="update">Em quote</label>
        </div>
        <textarea readonly id="output"></textarea>

    </section>

<hr />

<p>

When I blog quotes I like to format them as definition lists.
    This tool takes a block of text which include <strong>speaker:</strong> blocks, and does that.
</p>

<p>
    If you have any questions about this tool, feel free to leave a comment or webmention. Thanks!
</p>

<hr />

    <h2>Code</h2>
        <h3>JavaScript</h3>
        <pre><code><?php highlight_file('quote-to-dl.js'); ?></code></pre>
        <h3>SCSS</h3>
        <pre><code><?php highlight_file('quote-to-dl.scss'); ?></code></pre>




<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
