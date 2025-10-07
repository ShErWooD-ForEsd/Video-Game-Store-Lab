<?php
require __DIR__ . '/includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="6">
        <tr>
            <th>Game ID</th>
            <th>Title</th>
            <th>Console</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        <tr>
            <?php foreach ($games as $game) {
                $path = "img/$games[4]"; ?>
                <td><?= esc_html($game[0]) ?></td>
                <td><?= esc_html($game[1]) ?></td>
                <td><?= esc_html($game[2]) ?></td>
                <td><?= esc_html(number_format((float)$game[3], 2)) ?></td>
                <td><?= esc_html("<img src='$path' alt='$game[4]'") ?></td>
            <?php } ?>
        </tr>

    </table>
</body>

</html>