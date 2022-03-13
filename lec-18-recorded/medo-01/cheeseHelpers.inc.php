<?php


function filteredUl($cheeses)
{
    $filteredCheeses = array_filter($cheeses, "firmOrSoft");
    return cheeseUl($filteredCheeses);
}

function firmOrSoft($cheese)
{
    $code = classificationCode($cheese);
    return $code == "R" || $code == "S";
}

function cheeseUl($cheeses)
{
    $ul = "<ul>";
    foreach ($cheeses as $cheese) {
        $ul .= cheeseLi($cheese);
    }
    return "$ul</ul>";
}

function cheeseLi($cheese)
{
    $cheeseName = $cheese["name"];
    $stockClass = stockClass($cheese);
    $classificationCode = classificationCode($cheese);
    return "<li><span class='dot $stockClass'></span><span class='classification'>$classificationCode</span>$cheeseName</li>";
}

function stockClass($cheese)
{
    return $cheese["available"] ? "in-stock" : "out-of-stock";
    // return $cheese["available"]["calgary"] ? "in-stock" : "out-of-stock";
}

function classificationCode($cheese)
{
    $classification = $cheese["classification"];

    switch ($classification) {
        case "fresh":
            return "F";
        case "soft":
            return "S";
        case "firm":
            return "R";
        case "blue":
            return "B";
        case "goat":
            return "G";
        default:
            return "X";
    }
}
