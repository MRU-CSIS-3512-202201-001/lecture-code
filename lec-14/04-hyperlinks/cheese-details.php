<?php
// 🧠 How would you get the name?



function h1() {
    $cheeseName = $_GET["name"];
    $cheesePrice = $_GET["price"];
    return "<h1>$cheeseName ($$cheesePrice)";
}





// 🧠 How would you get the price and format it to 2 decimal places?
// 🧠 How would you display this in the body in an h1 tag <h1>name (price)</h1>?




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= h1() ?>
</body>

</html>