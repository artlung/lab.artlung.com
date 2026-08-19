<?php
$image = file_get_contents(__DIR__ . '/blur3.svg');
$image_64 = base64_encode($image);
print $image_64;
