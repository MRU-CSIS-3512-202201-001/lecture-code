<?php

// let's make an array
$usernames = ['squidz', "r@nd0r", "NUX_BL@5TER"];

// 🧠 How could we display this as an unordered list?
//    Use a function.

echo "<ul>";
foreach($usernames as $username) {
    echo "<li>$username</li>";
}

echo "</ul>";


$movie = [
    "title" => "Beetlejuice",
    "year" => 1980,
    "director" => "Tim Burton"
];

// 🧠 How could we display this as field: value divs inside another div?
//    Use a function.

function displayMovie($movieInfo) {
    $result = "<div class='container'>";
    foreach($movieInfo as $key => $value) {
        $result .= "<div>$key: $value</div>";
    }
    $result .= "</div>";
    return $result;
}

echo displayMovie($movie);