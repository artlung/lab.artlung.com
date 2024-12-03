<?php

/**
 * Autoload classes
 * php version 7.4
 *
 * @category Autoload
 * @package  Autoload
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// autolad files from classes directory
spl_autoload_register(
    function ($class) {
        // relative to the current page
        include_once dirname(__FILE__) . '/classes/' . $class . '.php';
    }
);
