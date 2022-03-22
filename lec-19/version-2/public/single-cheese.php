<?php

// 💡 Thanks to our first version, we now know what data we need to display - so
//    we can capture this in a class. This lets us add useful methods
//    (like an uppercase name, or a complicated URL).
//
// 🧠 Notice how we use $cheese down in the markup? Can you suggest a refactoring
//    we could do? Something involving a partial?

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
        <div class="cheese-header">
            <span class="cheese-name"><?= $cheese->name() ?></span>
            <span class="cheese-pic"><img src="<?= $cheese->cloudinaryUrl(70) ?>">
        </div>
        <div class="cheese-description"><?= $cheese->description ?></div>
    </div>
</body>

</html>