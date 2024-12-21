<?php

require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Get KeyCode via Javascript');
?>

    <p class="date-attribution">November 2011</p>
    <h1 class="p-name">Listen for Key Presses on a Web Page</h1>

    <p>This sample uses the <code>.which</code>, property, which is deprecated. See <a
                href="https://developer.mozilla.org/en-US/docs/Web/API/UIEvent/which">https://developer.mozilla.org/en-US/docs/Web/API/UIEvent/which</a>
    </p>

    <div id="output">
        <h1>Keycode:
            <span id="keycode"></span>
        </h1>
    </div>

    <script src="keycode.js<?php
    echo '?' . filectime('keycode.js');
    ?>"></script>
    <link rel="stylesheet" href="keycode.css<?php
    echo '?' . filectime('keycode.css');
    ?>">

    <h2>Source</h2>

    <pre><code>
<?php echo file_get_contents('keycode.js');
?>
    </code>
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
