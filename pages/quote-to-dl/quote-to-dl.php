<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader('Quote to DL (Definition List)');
?>

    <p class="date-attribution">Created in February, 2024</p>
    <h1>Turn Quotes into Definition Lists</h1>

    <section class="quote-to-dl">
        <div>
            <p>Paste in text here. There ought to be a colon after the speaker's name and each new line assumes there
                will be a name followed by ":" followed by a quote.</p>
        </div>
        <textarea id="input" class="update">Jane: I am Jane.
John: I am John.
Jane: I am Jane.
John: I am John.
</textarea>
        <div>
            <label><input type="checkbox" id="strongSpeaker" class="update">Strong speaker</label>
            <label><input type="checkbox" id="emQuote" class="update">Em quote</label>
        </div>
        <textarea readonly id="output"></textarea>

    </section>

    <h2>Code</h2>
    <div class="source">
        <h3>JavaScript</h3>
        <pre><?php highlight_file('quote-to-dl.js'); ?></pre>
        <h3>SCSS</h3>
        <pre><?php highlight_file('quote-to-dl.scss'); ?></pre>
    </div>

    <link rel="stylesheet" href="quote-to-dl.css?b=<?php
    echo filemtime('quote-to-dl.css');
    ?>">
    <script src="quote-to-dl.js?b=<?php
    echo filemtime('quote-to-dl.js');
    ?>"></script>
<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
