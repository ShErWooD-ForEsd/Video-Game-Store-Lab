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
            <?php foreach ($rows as $row) {
                $path = "img/$rows[4]"; ?>
                <td><?= esc_html($row[0]) ?></td>
                <td><?= esc_html($row[1]) ?></td>
                <td><?= esc_html($row[2]) ?></td>
                <td><?= esc_html(number_format((float)$row[3], 2)) ?></td>
                <td><?= esc_html("<img src='$path' alt='$row[4]'") ?></td>
            <?php } ?>
        </tr>

    </table>
</body>

</html>