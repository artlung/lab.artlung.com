<?php
$fn = ($_SERVER['HTTP_X_FILENAME'] ?? false);

$types = array('image/png', 'image/jpeg', 'image/gif');
$extensions = array('png', 'jpg', 'gif');
$maxsize = 1024 * 1024; // 1MB


$okToUpload = false;

// we will respond with json with a key of input_id if successful

function respondAndExit($input_id, $message) {
    echo json_encode(array(
        'input_id' => $input_id,
        'message' => $message
    ));
    exit();
}

if ($fn):

    if (in_array($_SERVER['CONTENT_TYPE'], $types) &&
        in_array(pathinfo($fn, PATHINFO_EXTENSION), $extensions) &&
        $_SERVER['CONTENT_LENGTH'] <= $maxsize) {

        file_put_contents(
            'uploads/' . $fn,
            file_get_contents('php://input')
        );
//        echo "$fn uploaded";
        respondAndExit('fileselect', "$fn uploaded");

    } else {
        respondAndExit('fileselect', "Invalid file");
    }


else:

    // form submit
    $files = $_FILES['fileselect'];

    foreach ($files['error'] as $id => $err) {
        if ($err == UPLOAD_ERR_OK) {
            $fn = $files['name'][$id];
            move_uploaded_file(
                $files['tmp_name'][$id],
                'uploads/' . $fn
            );

        }
    }
    respondAndExit('fileselect', "File uploaded");

endif;