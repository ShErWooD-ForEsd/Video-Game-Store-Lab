<?php 
// require __DIR__ . '/includes/functions.php'
require __DIR__ . '/functions.php'; //attaches the functions page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div>
        <h1>Video Game Store</h1>
        <!-- the form is attached here for the file to be uploaded and submitted to the upload.php page -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="datafile" id="datafile">
            <input type="submit" value="Submit">
        </form>
    </div>
    
</body>
<footer>
    <?php write_copyright_notice(); ?>
    <!-- copyright function -->
</footer>

</html>