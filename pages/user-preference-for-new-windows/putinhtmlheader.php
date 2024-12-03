<?php
/**
 * if they want new windows, give it to them! 
 */
if ($_COOKIE['new_window'] == "1") {
    ?>
    <base target="_blank"/><?php
} else {
    // otherwise, default to the same window
    ?>
    <base target="_self"/><?php
}
?>
