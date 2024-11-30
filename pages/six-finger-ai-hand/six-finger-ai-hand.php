<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Six Finger AI hand (PNG)
');

?>

<h1>Six Finger AI hand (PNG)</h1>

<p>Suitable for usage as a <a href="https://slackmojis.com">slackmoji</a>. </p>

<section style="display: flex;flex-wrap: wrap;gap: 20px;justify-content: center;align-content: center;padding: 10px;background: #efefef;">
    <div style="background: #fff;">
    <img src="ai-generated-hand.png" alt="Six Finger AI hand" />
    </div>
    <div style="background: #191919;">
    <img src="ai-generated-hand.png" alt="Six Finger AI hand" />
    </div>
</section>

<?php
$lab->printFooter([
    'comments' => true
]);

