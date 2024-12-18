<?php
/**
 * If they want new windows, give it to them!
 * php version 7.2
 *
 * @category PHP
 * @package  User_Preference_For_New_Windows
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
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