<?php

/**
 * Class BlueDragon
 *
 * @category PHP
 * @package  Classes
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class BlueDragon
{

    /**
     * Emit an H2 tag with the contents of a file
     *
     * @param $filename
     *
     * @return string
     */
    public static function handleh2($filename)
    {
        return "<h2>" . htmlentities(file_get_contents($filename)) . "</h2>";
    }

    /**
     * Emit an image tag with the contents of a file
     *
     * @param $filename
     *
     * @return string
     */
    public static function handlePng($filename)
    {
        return "<div class=\"screenshot\"><img src=\"{$filename}\" alt=\"\" /></div>";
    }

    /**
     * Emit a div with the contents of a file
     *
     * @param $filename
     *
     * @return string
     */
    public static function handleTxt($filename)
    {
        return "<div class=\"text\">" . nl2br(htmlentities(file_get_contents($filename))) . "</div>";
    }
}