<?php
//function put my name and the date on the page to remind you who did the assignment :P
function write_copyright_notice()
{
    $year = date('Y');
    echo '&copy; ' . $year . " " . "Elizabeth Sherwood";
}


//function makes the data safe from people injecting info it, like maliscious links
function esc_html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}


//reads the csv rows from the file
function read_csv_rows()
{
    $filename = "games.csv";  //assigns name
    $csvPath = __DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . $filename; //creates a path
    if (!is_file($csvPath)) { //if it is not a file, it returns
        return;
    }
    $file = fopen($csvPath, 'rb'); //opens the file and reads the file contents/lists folder contents
    $games = array(); //initializes an array
    while (!feof($file)) { 
        $game = fgetcsv($file); //reads the lines from the CSV file, putting it into the array
        if ($game === false) continue; //if the line is false, it'll skip it
        $games[] = $game; //add the csv line to the games array created above
    }
    fclose($file); //closes the file
    return $games; //returns the created array
}


//function to write out the csv rows from the data array
function write_csv_rows() //I made my CVS file with a create.php originally and then tested that file, uploading it on the index page
{
    $data = array( //created a data array to upload to a DVS file
        ['gameID' => 'B0B61YDF5V', 'title' => 'God of War: Ragnarök', 'console' => 'PlayStation5', 'price' => '69.99', 'image' => 'img/godofwarsony.jpeg'],
        ['gameID' => 'B01JYW2EY4', 'title' => 'The Witcher: Wild Hunt', 'console' => 'Microsoft', 'price' => '25.78', 'image' => 'img/theWitchermicrosoft.jpeg'],
        ['gameID' => 'B097B2YWFX', 'title' => 'The Legend of Zelda: Tears of the Kingdom', 'console' => 'Nintendo Switch', 'price' => '69.99', 'image' => 'img/zeldanintendo.jpeg'],
        ['gameID' => 'B0CLYM882Q', 'title' => 'Castlevania: Bloodlines (Renewed)', 'console' => 'Sega Genesis', 'price' => '117.37', 'image' => 'img/castlevaniasega.jpeg'],
        ['gameID' => 'B07NPKQW7Z', 'title' => 'Apex Legends', 'console' => 'EA App', 'price' => '39.99', 'image' => 'img/apexLegendsEA.jpeg'],
    );
    $path = __DIR__ . '/data'; //creates a path to the data folder
    $file_name = __DIR__ . DIRECTORY_SEPARATOR . "/data" . DIRECTORY_SEPARATOR . "games.csv"; // puts the file into the directory with the name games.csv
    $file = fopen($file_name, "wb"); //opens the file and modifies file/creates/deletes file in folder
    foreach ($data as $row) { //writes out the rows
        fputcsv($file, [$row['gameID'], $row['title'], $row['console'], $row['price'], $row['image']]);
    }
    fclose($file); //closes the file
}