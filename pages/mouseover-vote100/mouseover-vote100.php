<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Mouseover Vote Thing x 100
'
);

?>

    <p class="date-attribution">Created in 1999</p>
    <h1>Mouseover Vote Thing x 100</h1>

    <div style="max-width: 600px;margin: 0 auto;">
        <?php ob_start(); ?>
        <table cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
            <tr>
                <?php
                $num = 0;
                for ($i = 0; $i <= 255; $i = $i + (255 / 100)) {
                    $d = str_pad(dechex($i), 2, "0", STR_PAD_LEFT);
                    $num = $num + 1;
                    ?>
                    <td style="background-color:#<?php echo $d ?><?php echo $d ?><?php echo $d ?>;">
                        <a href="#" onmouseover="updateVote(<?php echo $num ?>)"
                           onclick="document.voteForm.submit()">
                            <img src="blank.gif" height="50" width="5" border="0" alt="<?php echo $num ?>"></a></td>
                <?php } ?>
            </tr>
            <tr>
                <td colspan="100">
                    <form action="." name="voteForm" style="margin: 0;padding: 0;" method="post">
                        <input
                                type="text" size="5" name="Vote"
                                style="display: block;width:100%;box-sizing:border-box;text-align:center;padding: 1rem;font-size: 1rem;"
                                required value="<?php
                                echo $_POST['Vote'] ?? '';
                                ?>"
                        >
                        <button type="submit"
                                style="display: block;width:100%;box-sizing:border-box;text-align:center;padding: 1rem;font-size: 1rem;">
                            Vote
                        </button>
                    </form>
                </td>
            </tr>
        </table>
        <?php
        $html = ob_get_clean();
        echo $html;
        ?>

        <?php if (isset($_POST['Vote'])) : ?>
            <p style="border: 3px solid green;background: #8eca00;padding: 1rem;border-radius: 1rem;">You
                voted: <?php echo $_POST['Vote']; ?></p>
        <?php endif; ?>

    </div>

    <p><b>See also:</b> <a href="/mouseover-vote/">Mouseover Vote Thing</a></p>
    <hr/>

    <h2>HTML Code</h2>

<?php $lab->printCodeBlock($html); ?>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
