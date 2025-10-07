<?php
// require __DIR__ . '/includes/functions.php';
require __DIR__ . '/functions.php';


write_csv_rows();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tmpName = $_FILES['datafile'];
    print_r($tmpName);
    $path = __DIR__ . DIRECTORY_SEPARATOR . "storage";
    if (!is_dir($path)) {
        mkdir($path, 0775, true);
    }

    $fileName = $path . DIRECTORY_SEPARATOR . $tmpName['name'];

    $success = move_uploaded_file($tmpName['tmp_name'], $fileName);
}




