<?php

// Upload dir with trailing slash
$uploaddir = 'webcam/';

$time = time ();
$uploadfile = $uploaddir . $time . "_" . basename($_FILES['image']['name']);

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "OK.\n";
} else {
    echo "Error!\n";
}

?>
