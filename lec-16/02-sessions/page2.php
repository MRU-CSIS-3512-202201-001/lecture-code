<?php
session_start();

$msg = $_SESSION["are_we_having_fun"];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Two</title>
</head>

<body>
    <h1>Page Two - I'm Writing To Session Storage</h1>
    <h2><?= $msg ?></h2>
    <a href="page1.php">to page 1</a>
</body>

</html>