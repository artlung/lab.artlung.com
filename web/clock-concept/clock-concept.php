<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Clock Concept (1998-2024)');
?>

    <p class="date-attribution">2024</p>
    <h1>Clock Concept (1998-2024)</h1>

    <p>In 1998, I created the image of a clock in Adobe Illustrator and Photoshop.
        And in 2024 I implemented that design using the tools of the web: HTML, CSS, and JavaScript.</p>

<?php ob_start(); ?>
    <section>
        <div id="match" class="clock-gradient-bg clock-holder">
            <div id="clock-implement">
                <div class="number n12">12</div>
                <div class="number n1">1</div>
                <div class="number n2">2</div>
                <div class="number n3">3</div>
                <div class="number n4">4</div>
                <div class="number n5">5</div>
                <div class="number n6">6</div>
                <div class="number n7">7</div>
                <div class="number n8">8</div>
                <div class="number n9">9</div>
                <div class="number n10">10</div>
                <div class="number n11">11</div>
                <div class="shadow hours-hand"></div>
                <div class="hand hours-hand"></div>
                <div class="shadow seconds-hand"></div>
                <div class="hand seconds-hand"></div>
                <div class="shadow minutes-hand"></div>
                <div class="hand minutes-hand"></div>
            </div>
            <h2>Clock<br/>concept</h2>
        </div>
    </section>
<?php
$html = ob_get_clean();
echo $html;
?>

    <h2>HTML</h2>
    <pre><code class="language-html"><?php echo htmlentities($html); ?></code></pre>

    <h2>JavaScript</h2>
    <pre><code><?php echo file_get_contents('clock-concept.js'); ?></code></pre>

    <h2>SCSS</h2>
    <pre><code><?php echo file_get_contents('clock-concept.scss'); ?></code></pre>


    <h2>Original Image</h2>

    <section>
        <div id="reference" class="clock-holder"><img src="https://artlung.com/archive/2/images/clock_concept.gif">
        </div>
    </section>

    <p>
        <a href="https://codepen.io/artlung/pen/JjzRzyW">Source code is also available on CodePen</a>
    </p>

    <script src="clock-concept.js<?php
    echo '?v=' . filemtime('clock-concept.js');
    ?>"></script>
    <link type="text/css" href="clock-concept.css<?php
    echo '?v=' . filemtime('clock-concept.css');
    ?>" rel="stylesheet"/>

<?php
$lab->printFooter();




