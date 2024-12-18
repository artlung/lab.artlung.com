<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('RealAudio Detection: 1999');

?>

    <p class="date-attribution">August 1999</p>
    <h1>RealAudio Detection</h1>

    <p>(State of the Art in 1999)</p>

<?php ob_start(); ?>

    <div style="border: 3px double blue;padding: 1rem;">
        <script>
            if (RealMode || RealPlayer5 || RealPlayer4) {
                document.writeln("You're a-okay.");
            } else {
                document.writeln("Houston, it's a no-go");
            }
        </script>
    </div>

<?php
$html = ob_get_clean();
print $html;
?>

    <h2>Displaying the results</h2>

    <pre><code><?php print htmlspecialchars($html); ?></code></pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);


