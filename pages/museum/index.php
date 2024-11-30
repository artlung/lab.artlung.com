<?php
require_once('../../loader.php');
$lab = new Lab();
$lab->printHeader('Museum Notes (Mobile Use in Museums)
');

?>


<h1>Museum Notes</h1>

<?php

include 'notes.html.html';

?>


<?php
$lab->printFooter([
	'comments' => true
]);
