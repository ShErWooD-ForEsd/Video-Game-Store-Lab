<?php
// require __DIR__ . '/includes/functions.php';
require __DIR__ . '/functions.php'; //attaches the functions page

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tmpName = $_FILES['datafile']; //extracts the data file
    print_r($tmpName); //shows me my error when I submit. I'm flumuxed, and will ask in lab tomorrow
    $path = __DIR__ . DIRECTORY_SEPARATOR . "data"; //creates a path to a data folder
    if (!is_dir($path)) {       //creates a data folder if needed, owner rwx, group r-x, other r-x (permissions)
        mkdir($path, 0775, true);
    }

    $fileName = $path . DIRECTORY_SEPARATOR . $tmpName['name'];

    $success = move_uploaded_file($tmpName['tmp_name'], $fileName); //moves the file
}

// read_csv_rows();  //call the read CSV function.

?>

