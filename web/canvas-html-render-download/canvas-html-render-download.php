<!DOCTYPE html>
<html lang="en">
<?php
$cachebustStyles = '?v=' . filemtime('canvas-html-render-download.css');
$cachebustJavaScript = '?v=' . filemtime('canvas-html-render-download.js');
?>
<head>
    <title>Canvas HTML Render Download</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="canvas-html-render-download.css<?php echo $cachebustStyles; ?>">
    <script src="../2025.js<?php
    echo '?' . filemtime('../2025.js');
    ?>"></script>
</head>
<body>

<section id="testArea">
    <h1 class="p-name">Canvas HTML Render Download <em>not working</em></h1>

    <canvas id="theCanvas" style="border:2px solid black;" width="300" height="300"></canvas>

    <button id="downloadButton">Download Image</button>

</section>

<script src="canvas-html-render-download.js<?php echo $cachebustJavaScript; ?>"></script>
</body>
</html>