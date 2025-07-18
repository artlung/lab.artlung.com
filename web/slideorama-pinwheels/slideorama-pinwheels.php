<?php require_once __DIR__ . '/../../loader.php'; ?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Slideorama Pinwheels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./slideorama-pinwheels.css<?php
    echo '?v=' . filemtime(__DIR__ . '/slideorama-pinwheels.css');
    ?>">
    <script src="../2025.js<?php
    echo '?' . filemtime(__DIR__ . '/../2025.js');
    ?>"></script>
    <script src="./slideorama-pinwheels.js<?php
    echo '?' . filemtime(__DIR__ . '/slideorama-pinwheels.js');
    ?>"></script>
    <link rel="webmention" href="https://webmention.io/artlung.com/webmention">
    <meta property="og:image" content="https://lab.artlung.com/slideorama-pinwheels/og-slideorama-pinwheels.jpg">
</head>
<body>

<div style="--count: 1;--color-1: #ff0000;--color-2: #0000ff;">
    <input type="range" name="--count" min="1" max="50" value="1">
    <input type="color" name="--color-2" value="#0000ff">
    <input type="color" name="--color-1" value="#ff0000">
    <button onclick="removeDiv(this)">&times;</button>
</div>
<nav>Play with controls. Click the page for a new pinwheel. <select onchange="document.body.style.setProperty('--mix-blend-mode', this.options[this.selectedIndex].text)">
        <option selected>multiply</option>
        <option>difference</option>
        <option>exclusion</option>
        <option>luminosity</option>
    </select>
    <a href="https://github.com/artlung/lab.artlung.com/tree/master/web/slideorama-pinwheels" target="_blank">Source</a>
    <a href="https://artlung.com/" target="_blank"><img src="https://apps.artlung.com/logo-i-zer/88x31.php?c0=000000&c1=FFFFFF" alt="ARTLUNG ❤️ Joe Crawford" class="class-88x31"></a>
</nav>

</body>
</html>