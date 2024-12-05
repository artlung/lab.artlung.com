<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('Goal 50!');
?>

    <p class="date-attribution">Created September 13, 2010. Modernized November 30, 2024.</p>
    <h1>Goal of 50!</h1>

    <p>Uses localStorage to keep track of a goal. Inspired by this question in <a href="https://ask.metafilter.com/">Ask
            Metafilter</a>:
        <em>

            <a href="https://ask.metafilter.com/164926/Counting-Up-to-a-set-number-with-an-Image">Counting Up to a set
                number with an Image??</a>
        </em>

    </p>

<?php
ob_start();
?>
    <div class="goal50">
        <div id="counter">
            0
        </div>
        <footer>
            <button id="increment">+1</button>
            <button id="decrement">-1</button>
        </footer>
    </div>
<?php
$html = ob_get_clean();
echo $html;
?>
    <link rel="stylesheet" href="goal50.css<?php
    echo '?v=' . filemtime('goal50.css');
    ?>" type="text/css"/>
    <script src="goal50.js<?php
    echo '?v=' . filemtime('goal50.js');
    ?>"></script>

    <h2>HTML</h2>
    <pre><code><?php echo htmlspecialchars($html); ?></code></pre>

    <h2>SCSS</h2>
    <pre><code><?php echo htmlspecialchars(file_get_contents('goal50.scss')); ?></code></pre>

    <h2>JavaScript</h2>
    <pre><code><?php echo htmlspecialchars(file_get_contents('goal50.js')); ?></code></pre>


<?php
$lab->printFooter(
    [
        'comments' => false
    ]
);

