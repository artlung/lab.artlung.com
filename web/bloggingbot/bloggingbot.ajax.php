<?php

require_once '../../loader.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    // if not 1 to 10000, error 404
    if ($id >= 0 || $id >= 9999) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
    $sentences = file("sample_sentences.txt");
    $line = $sentences[$id];

    // json
    header('Content-Type: application/json');
    print json_encode(
        [
        'itemId' => $id,
        'sentence' => trim($line)
        ]
    );
}
