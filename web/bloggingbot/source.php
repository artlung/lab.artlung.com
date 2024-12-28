<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('BloggingBot Source Code');
?>

<p class="date-attribution">
    Created in Febuary 2018: <a href="https://artlung.com/blog/2018/02/23/markov-chains-are-hilarious/" target="_blank">Markov Chains are Hilarious!</a>
</p>

<h1 class="p-name">BloggingBot Source Code</h1>


<h2>PHP &amp; HTML (bloggingbot.php)</h2>
<?php $lab->printCodeBlock(file_get_contents('bloggingbot.php')); ?>

<h2>JavaScript (bloggingbot.js)</h2>
<?php $lab->printCodeBlock(file_get_contents('bloggingbot.js')); ?>

<h2>PHP (bloggingbot.ajax.php)</h2>
<?php $lab->printCodeBlock(file_get_contents('bloggingbot.ajax.php')); ?>

<h2>Apache (.htaccess)</h2>
<?php $lab->printCodeBlock(file_get_contents('.htaccess')); ?>

<h2>PHP (Sitemap XML)</h2>
<?php $lab->printCodeBlock(file_get_contents('sitemap.xml.php')); ?>

<h2>Bloggingbot Sentences <em>first 100 lines of 10,000 shown</em>, generated using <a href="https://github.com/jsvine/markovify">jsvine/markovify</a></h2>

<?php
$all_sentences = file("sample_sentences.txt", FILE_IGNORE_NEW_LINES);
$first_100 = array_slice($all_sentences, 0, 100);
$lab->printCodeBlock(implode("\n", $first_100));
?>

<?php $lab->printFooter([
    'comments' => true
]); ?>


