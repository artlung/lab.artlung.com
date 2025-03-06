<!DOCTYPE html>
<html>
<head>
<?php
    require_once __DIR__ . '/../../loader.php';
    $lab = new ArtlungLab\Lab();
    $lab->printHeader(
        'Mid-Air Footer', [
        'minimum-head-items' => true,
        'css-files' => [
                '/mid-air-footer/mid-air-footer.css?' . filemtime(__DIR__ . '/mid-air-footer.css'),
                '/mid-air-footer/details.css?' . filemtime(__DIR__ . '/details.css')
        ],
        ]
    );
    ?>
</head>
<body>
<header><em>a header&mdash;</em></header>
<main>
    <h1><em>Mid-air footer</em></h1>
    <p>I'm just not very tall so don't force things to be tall. (<a href="https://codepen.io/artlung/pen/mydwyoo">codepen</a>)</p>
   <details>
            <summary>the request</summary>
       <blockquote>
       how to stop the footer from hanging in "mid-air" when there's too little content on a page. so like how to either get the footer to stick to the bottom or have enough padding that the background fills the rest of the viewport. a lot of solutions ive seen on stackoverflow + co are a little idiotic
       </blockquote>
   </details>
    <details>
        <summary>The HTML</summary>
<?php
$html = <<<'HTML'
<header><em>a header&mdash;</em></header>
<main>
	<h1><em>some minimal content</em></h1>
	<p>I'm just not very tall so don't force things to be tall.</p>
</main>
<footer><small>&mdash;and a footer</small></footer>
HTML;
$lab->printCodeBlock($html);

?>

    </details>
    <details>
        <summary>The CSS</summary>
        <?php
        $lab->printCodeBlock(file_get_contents(__DIR__ . '/mid-air-footer.scss'));
        ?>
    </details>
</main>
<footer><small>&mdash;and a footer</small></footer>
</body>
</html>