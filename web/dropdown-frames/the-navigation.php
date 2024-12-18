<?php
/**
 * Dropdown Frames demonstration
 * php version 7.2
 *
 * @category PHP
 * @package  Dropdown_Frames
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title> This is a blank navigation Document. </title>
</head>
<body bgcolor="#CCCCCC">

<table border="0" cellspacing="0" cellpadding="8" width="95%" height="95%">
    <tr>
        <td align="CENTER">
            <form action="../">
                <select onchange="window.open(this.options[this.selectedIndex].value,'targetWINDOW');this.selectedIndex=0;">
                    <option>Choose A Site</option>
                    <option value="https://www.yahoo.com/">YAHOO</option>
                    <option value="https://www.google.com/">GOOGLE</option>
                    <option value="https://www.altavista.com/">ALTAVISTA</option>
                    <option value="https://www.amazon.com/">AMAZON</option>
                    <option value="https://artlung.com/">ARTLUNG</option>
                </select>
            </form>
        </td>
    </tr>
</table>

</body>
</html>
