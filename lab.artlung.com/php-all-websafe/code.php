<?php
$all = array();
$chars = array('0','3','6','9','C','F');
foreach($chars as $a) {
	foreach($chars as $b) {
		foreach($chars as $c) {
			$all[] = '#' . $a . $b . $c;
		}
	}
}
rsort($all);
foreach($all as $color) {
	echo "<div style=\"background-color: {$color}\">{$color}</div>";
}
?>
