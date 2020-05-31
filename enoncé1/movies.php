<?php
$movieName= $_GET["movieName"];
$movieStar=$_GET["movieStar"];
$movieYears=$_GET["movieYears"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>
</head>
<body>
    <h1> Information about <?php echo $movieName; ?></h1>
    <p>Based on the input,here is the information so far: <br><?php echo $movieStar; ?>starred in the movie <?php echo $movieName; ?> which was released in year <?php echo $movieYears ?> </p>
</body>
</html>
