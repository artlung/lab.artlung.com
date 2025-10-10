<?php require_once __DIR__ . '/../../loader.php'; ?><!DOCTYPE html>
<html lang="en">
<head>
    <title>CSS Stopwatch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css-stopwatch.css<?php
    echo '?v=' . filemtime(__DIR__ . '/css-stopwatch.css');
    ?>">
    <script src="../2025.js<?php
    echo '?' . filemtime(__DIR__ . '/../2025.js');
    ?>"></script>
    <link rel="webmention" href="https://webmention.io/artlung.com/webmention">
    <meta property="og:image" content="https://lab.artlung.com/css-stopwatch/og-css-stopwatch.jpg">
</head>
<body>
<main>

<h1>CSS Stopwatch <small>by Joe Crawford</small></h1>

<?php ob_start(); ?>
<time datetime="00:00:00">
    <span class="tens-minutes" data-digit="0"></span>
    <span class="ones-minutes" data-digit="0"></span>
    <span data-digit=":" class="seconds">:</span>
    <span class="tens-seconds" data-digit="0"></span>
    <span class="ones-seconds" data-digit="0"></span>
    <span data-digit="." class="period">.</span>
    <span class="ones-tenths-of-a-second" data-digit="0"></span>
    <span class="ones-hundredths-of-a-second" data-digit="0"></span>
</time>

<label>
    <input type="checkbox">
    <span class="when-on">Stop</span>
    <span class="when-off">Start</span>
</label>
<?php $html = ob_get_clean(); ?>
<?php print $html; ?>
<?php $scss = file_get_contents(__DIR__ . '/css-stopwatch.scss'); ?>

<?php

$lab = new ArtlungLab\Lab();
?>
<details>
    <summary>
        Source Code & Credits
    </summary>

    <h2>Why?</h2>

    <p>This demonstrates a few things. One is the power of
    the <code>:has()</code> operator in CSS. Another is animation
        in CSS whereby <code>animation-play-state</code> can be set
        based on CSS selector. Strictly speaking the data-attributes in the HTML are
        not updated, but they might be setting <code>content</code> based on
        a CSS custom property.
    </p>

    <h2>HTML</h2>
    <?php $lab->printSource($html) ?>
    <h2>SCSS</h2>
    <?php $lab->printSource($scss) ?>
    <h2>Credits</h2>
    <p>Made by <a href="https://artlung.com/">Joe Crawford</a> in 2025, originally as a

        <a href="https://codepen.io/artlung/pen/bNNXRXb">
            CodePen Pen
        </a>
    </p>

</details>
</main>

</body>
</html>


