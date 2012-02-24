<?php

// file by joe crawford 2003/02/05
//
// windowcookie.php
// how long do the cookies live? a long time
$cookie_life = time() + 31536000;

// did we set a parameter? set the setting
if($_GET['new_window']=="1") {
	setcookie ( "new_window" , "1", $cookie_life);
} else if ($_GET['new_window']=="0") {
	setcookie ( "new_window" , "0", $cookie_life);
} else {
	setcookie ( "new_window" , "0", $cookie_life);
}

// bounce us back from whence we came
header('Location: ' . $HTTP_REFERER);

?>