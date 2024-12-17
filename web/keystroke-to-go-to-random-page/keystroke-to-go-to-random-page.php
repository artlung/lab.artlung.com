<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'Keystroke to Go to Random Web Page'
);




$code = <<<EOF
document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('keydown', function(event) {
        console.log(event);
        if (event.altKey && event.keyCode === 82) {
            // if we are in frames, go to the top
            if (window.top !== window.self) {
                window.top.location = '/random.php';
            }
            window.location = '/random.php';
        }
    });
});
EOF;

?>

<p class="date-attribution">Posted December 2024</p>

    <h1>Keystroke to Go to Random Web Page</h1>

<p>
    Most pages on THE LAB have event listeners set up so that if you press <strong><kbd>Alt</kbd> + <kbd>R</kbd></strong> you will be taken to a random page on the site. This is a fun way to explore the site. It's a simple bit of JavaScript that listens for the keydown event, and if the <kbd>Alt</kbd> key and the <kbd>R</kbd> key are pressed, it will take you to a random page.
</p>

<p>
    I created this for my site <a href="https://smorgasborg.artlung.com/">"Smorgasborg"</a> which is a kind of "junk drawer" offshoot from my personal site.

<p>Large websites can be cumbersome to explore, particularly sites with a lot of pages.</p>

<p>    It's also useful for me to spot-check changes to a website as a hidden feature.

</p>

<h2>JavaScript Code to listen for keystrokes</h2>

<pre><code><?php
    print htmlentities($code);
?></code></pre>

<h2>PHP Code inside <code>random.php</code></h2>

<pre><code><?php highlight_file('../random.php'); ?></code></pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);







