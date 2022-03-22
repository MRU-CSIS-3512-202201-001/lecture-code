<?php

// 💡 Thanks to our first version, we now know what data we need to display - so
//    we can capture this in a class. This lets us add useful methods
//    (like an uppercase name, or a complicated URL).
//
// 🧠 Notice how we use $cheese down in the markup? Can you suggest a refactoring
//    we could do? Something involving a partial?

require "../classes/Cheese.php";

$cheese = new Cheese("cottage", "fresh", "some slightly longer description", "001");

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
        <?php require "../partials/cheese.partial.php" ?>
    </div>
</body>

</html>