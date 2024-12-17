<?php

use ArtlungLab\Rosetta;

require_once __DIR__ . '/../../loader.php';

$library_path = false;
$slug = false;

foreach (Rosetta::VALID_SLUGS_AND_LIBS as $trySlug => $tryPath) {
    if (isset($_GET[$trySlug]) && array_key_exists($trySlug, Rosetta::VALID_SLUGS_AND_LIBS)) {
        $slug = $trySlug;
        $library_path = $tryPath;
        break;
    }
}

if ($library_path) {
    $rosetta = (new Rosetta($slug, $library_path))->printPage();
} else {
    include 'rosetta.php';
}






