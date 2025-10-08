<?php
// require __DIR__ . '/includes/functions.php';
require __DIR__ . '/functions.php'; //attach the functions page

$csvPath = __DIR__ . '/data/games.csv'; //path created to bring in data
$rows = read_csv_rows(); //calling the function to read the rows, which should go into the table below. I'm missing a connection before this I believe.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>


    <div>
        <table border="1" cellpadding="6">
            <tr>
                <th>Game ID</th>
                <th>Title</th>
                <th>Console</th>
                <th>Price</th>
                <th>Image</th>
            </tr>

                <!-- This section is supposed to read the data from the function listed above, but I'm encountering an error somewhere before this point -->
                <?php foreach ($rows as $row) {
                    $path = "img/$row[4]"; ?>
                    <!-- esc_html added to protect from user injected maliscious info -->
                                <tr><td><?= esc_html($row[0]) ?></td>
                    <td><?= esc_html($row[1]) ?></td>
                    <td><?= esc_html($row[2]) ?></td>
                    <td><?= esc_html(number_format((float)$row[3], 2)) ?></td>
                    <td><?= esc_html("<img src='$path' alt='$row[4]'") ?></td></tr>
                    <!-- This last one should add the images in the CSV file -->
                <?php } ?>
            

        </table>
    </div>
</body>

</html>