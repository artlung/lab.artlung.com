<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('
Mouseover Vote Thing x 100
');

?>

<h1>Mouseover Vote Thing x 100</h1>

<div align="CENTER">

<table cellpadding="0" cellspacing="0" border="0">
<tr>
<?php

	for($i=0;$i<=255;$i=$i+(255/100)) {
	$d = str_pad(dechex($i), 2, "0", STR_PAD_LEFT);
	$num = $num + 1;
?>
<td bgcolor="#<?=$d?><?=$d?><?=$d?>"><a href="#"
	onmouseover="updateVote(<?=$num?>)"><img src="blank.gif" height="20" width="5" border="0" alt="<?=$num?>"></a></td>

<?php } ?>

	</tr>
</table>

<form action="../" name="voteForm">
	<input type="text" size="5" name="Vote">
</form>

</div>

<p><b>See also:</b> <a href="/lab/scripting/mouseover_vote/">Mouseover Vote Thing</a></p>


<?php
$lab->printFooter([
	'comments' => true
]);
