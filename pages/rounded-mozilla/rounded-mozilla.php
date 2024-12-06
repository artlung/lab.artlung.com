<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('Rounded corners were once experimental!');

?>

    <p class="date-attribution">Early 2002</p>

    <h2> Rounded Corners were once an experimental Mozilla Extension.</h2>

    <p style="border-radius: 1rem;background: lightblue;padding: 2rem;text-align: center;">
        In 2024, they are <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/border-radius">widely available</a>.
        <code>border-radius: 1rem</code></p>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
