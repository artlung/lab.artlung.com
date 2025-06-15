<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    'Popover à la Windows 95'
);

?>
    <link rel="stylesheet" href="popover-retro.css<?php
    echo '?v=' . filemtime('popover-retro.css');
    ?>">
    <p class="date-attribution">Created Jun 2025</p>
    <h1 class="p-name">Popover à la Windows 95</h1>


<?php ob_start(); ?>

<main>

    <button popovertarget="window-exe" popovertargetaction="show">
        In the manner of Windows 95, as one does.
    </button>

    <aside id="window-exe" popover>
        <section>
            <h2>window.exe</h2>
            <form>
                <label aria-label="Regular Size">
                    <input type="radio" name="state" value="normal" checked>
                    <span>Regular</span>
                </label>
                <label aria-label="Fullscreen">
                    <input type="radio" name="state" value="fullscreen">
                    <span>Fullscreen</span>
                </label>
                <button aria-label="Close" onclick="document.querySelector('#window-exe').hidePopover();return false;">Close</button>
            </form>
        </section>
        <div>
            <p>
                I don't necessarily feel nostalgic about
                Windows 95, but I do appreciate the aesthetic of the thing. I'm stunned that it's 30 years old.
            </p>
            <p>
                It's fun to replicate some of the features
                of the interface using current (2025) web techniques.
                The Popover API (<a href="https://developer.mozilla.org/en-US/docs/Web/API/Popover_API">MDN</a>) is worth a look.
            I don't believe I could articulate the number of times I created popovers of different sorts
            using HTML and JavaScript and "Dynamic HTML" and now we can have it with nearly zero JavaScript.

            <p>
            <p>
                I also like using Sass (<a href="https://sass-lang.com/">Sass</a>) to create stylesheets I can read logically. And playing with
                CSS gradients is one of my greatest joys.
            </p>

            <p>Thanks for reading,<br>
                <a href="https://artlung.com/">Joe (ArtLung)</a>
            </p>
        </div>

    </aside>
</main>
<?php $html = ob_get_clean(); ?>
<?php print $html; ?>

    <h2>HTML</h2>
<?php
$lab->displayCode($html);
?>
    <h2>SCSS</h2>
<?php
$lab->displayCode(file_get_contents(__DIR__ . '/popover-retro.scss'));
?>
    <h2>CSS (compiled)</h2>
<?php
$css = file_get_contents(__DIR__ . '/popover-retro.css');
// split on } and add } plus newline
$css = preg_replace('/\}\s*/', "}\n", $css);
$lab->displayCode($css);
?>


<?php
$lab->printFooter(
    [
        'comments' => false
    ]
);

