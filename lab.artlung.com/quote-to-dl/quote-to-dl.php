<?php include_once("../inc.header1of2.php"); ?>
Quote to DL (Definition List)
<?php include_once("../inc.header2of2.php"); ?>
<link rel="stylesheet" href="quote-to-dl.css">
<section class="quote-to-dl">
    <div>
        <p>Paste in text here. There ought to be a colon after the speaker's name and each new line assumes there will be a name followed by ":" followed by a quote.</p>
    </div>
    <textarea id="input" class="update"></textarea>
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
    <pre><?php highlight_file('quote-to-dl.css'); ?></pre>
</div>
<script src="quote-to-dl.js"></script>
<?php include_once("../inc.footer.php"); ?>


