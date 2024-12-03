<?php

//report all errors
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
