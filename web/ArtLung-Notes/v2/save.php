<?php

$stuff = array(
    'guid' => '',
    'top' => '',
    'left' => '',
    'height' => '',
    'content' => '',
    'updated' => date('Y-m-d H:i:s'),
);
$save = array();
foreach ($stuff as $key => $value) {
    $save[$key] = strip_tags(trim($_POST[$key]));
    // limit to 1000 characters
    if (strlen($save[$key]) > 1000) {
        $save[$key] = substr($save[$key], 0, 1000);
    }
}

$json_save = json_encode($save);

$filename = 'notes/' . $save['guid'] . '.json';
$fp = fopen($filename, 'w');
fwrite($fp, $json_save);
fclose($fp);
print 'ok';

?>
