<?php

include "B.inc.php";

function placeholder($width, $height, $text)
{
    $encodedText = urlencode($text);
    // $size = "$width" . "x" . "$height";
    return "https://via.placeholder.com/${width}x${height}.png?text=$encodedText";
}

function placeholderImg($width, $height, $text)
{
    $url = placeholder($width, $height, $text);
    return img($url);
}
