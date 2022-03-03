<?php

// let's make an array
$usernames = ['squidz', "r@nd0r", "NUX_BL@5TER"];

// let's look at it one way
// // ruh-roh

// let's try another way
// print_r($usernames);

// let's look at it another way
// var_dump($usernames);

// 💡 pro tip: install the var_masterpiece browser extension


// another way of making an array
// $shoeSizes = array(12, 7, 7, 10);

// var_dump($shoeSizes);


// 🧠 How do you add something to the end?
$usernames[] = "bl33ding-0ut";
// var_dump($usernames);

// 🧠 What if you wanted to add multiple things?
array_push($usernames, "bippity", "boppity", "boo");
// var_dump($usernames);

// 💡 NEW since text released: spread op in PHP from 7.4 (just like JS)
$otherShoeSizes = [5, 12, 13, 5.5];
// $shoeSizes = [...$shoeSizes, ...$otherShoeSizes];
// var_dump($shoeSizes);

// 
// 🛑 Here begins some unusual stuff
// 

$movie = [
    "title" => "Beetlejuice",
    "year" => 1980,
    "director" => "Tim Burton"
];

var_dump($movie);

// 🧠 How would we print out the year? The director?
echo "the year is ${movie['year']}";

// 🧠 How would we change the title?
$movie["title"] = "Beetlejuice!";
var_dump($movie);

// 🧠 Does this look kinda familiar at all?

// bargain basement object? 

// 😕 Nesting can be harder to read, but...you gotta do it.
$complexMovie = [
    "title" => "Beetlejuice",
    "year" => 1980,
    "director" => [
        "name" => [
            "first" => "Tim",
            "middle" => "William",
            "last" => "Burton"
        ],
        "born" => 1958
    ]
];

var_dump($complexMovie);
