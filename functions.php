<?php

function write_copyright_notice()
{
    $year = date('Y');
    echo '&copy; ' . $year . " " . "Elizabeth Sherwood";
}



function esc_html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}



function read_csv_rows()
{
    $filename = "games.csv";
    $csvPath = __DIR__ . DIRECTORY_SEPARATOR . "games" . DIRECTORY_SEPARATOR . $filename;
    if (!is_file($csvPath)) {
        return;
    }
    $file = fopen($csvPath, 'rb');
    $games = array();
    while (!feof($file)) {
        $game = fgetcsv($file);
        if ($game === false) continue;
        $games[] = $game;
    }
    fclose($file);
    return $games;
}



function write_csv_rows()
{
    $data = array(
        ['gameID' => 'B0B61YDF5V', 'title' => 'God of War: Ragnarök', 'console' => 'PlayStation5', 'price' => '69.99', 'image' => 'img/godofwarsony.jpeg'],
        ['gameID' => 'B01JYW2EY4', 'title' => 'The Witcher: Wild Hunt', 'console' => 'Microsoft', 'price' => '25.78', 'image' => 'img/theWitchermicrosoft.jpeg'],
        ['gameID' => 'B097B2YWFX', 'title' => 'The Legend of Zelda: Tears of the Kingdom', 'console' => 'Nintendo Switch', 'price' => '69.99', 'image' => 'img/zeldanintendo.jpeg'],
        ['gameID' => 'B0CLYM882Q', 'title' => 'Castlevania: Bloodlines (Renewed)', 'console' => 'Sega Genesis', 'price' => '117.37', 'image' => 'img/castlevaniasega.jpeg'],
        ['gameID' => 'B07NPKQW7Z', 'title' => 'Apex Legends', 'console' => 'EA App', 'price' => '39.99', 'image' => 'img/apexLegendsEA.jpeg'],
    );
    $path = __DIR__ . '/data';
    $file_name = __DIR__ . DIRECTORY_SEPARATOR . "/data" . DIRECTORY_SEPARATOR . "games.csv";
    $file = fopen($file_name, "wb");
    foreach ($data as $row) {
        fputcsv($file, [$row['gameID'], $row['title'], $row['console'], $row['price'], $row['image']]);
    }
    fclose($file);
}