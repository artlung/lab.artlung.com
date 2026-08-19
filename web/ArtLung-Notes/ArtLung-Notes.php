<?php
if (php_sapi_name() !== 'cli') {
    header('Location: /ArtLung-Notes/v2/');
    exit;
}

require __DIR__ . '/v2/index.php';