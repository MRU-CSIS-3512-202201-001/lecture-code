<?php

// This is looking better.
//
// 🧠 This file kinda has two part what are they?
// 🧠 Is there another refactoring we could do?

require "../classes/Cheese.php";

$cheese = new Cheese("ricotta", "fresh", "some slightly longer description", "002");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Lecture 19 - Version 2</title>
</head>

<body>
    <div class="container">
        <?php require "../partials/cheese-details.inc.php" ?>
    </div>
</body>

</html>