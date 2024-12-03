<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
change document background color .
'
);

?>

<p class="date-attribution">1999</p>
<h1>Change Document Background Color</h1>

<?php
ob_start();
?>
    <style>
        body { background-color: unset; }
        article#content { background-color: unset; }
    </style>
    <p><a href="#"
          onmouseover="body.style.backgroundColor='pink'"
          onmouseout="body.style.backgroundColor='#FFFFFF'"
          onclick="return false"
        >JavaScript can change the background of the document</a></p>
<?php
$html = ob_get_clean();
echo $html;
?>


    <h2>How?</h2>

    <pre>
    <?php echo htmlentities($html); ?>
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
