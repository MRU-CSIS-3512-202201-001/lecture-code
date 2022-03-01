<?php

function h1($content)  // 😕 I find it easy to forget the $ with params
{
    return "<h1>" . $content . "</h1>";  // 🧠 How else can we write this? 3 more ways (', ${}, "")
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    echo h1("Hello. I'll be your H1 tag for this evening.");  // 🧠 How else can we write this? 1 more way 
    ?>
</body>

</html>