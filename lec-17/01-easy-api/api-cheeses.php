<?php

include "cheeses.inc.php";

$result = [];

// 🧠 What if we want to get all cheeses (that is, just the entire $cheeses array?)

header('Content-Type: application/json');

echo json_encode($result);


// 🧠 What if we want to get all in-stock calgary cheeses if someone passes
//    in a query string location=calgary?
// 🧠 Notice how json_encode behaves if you pass something like `["foo" => [some array]]`
//    versus `[some array]`.
// 💡 You may find some of the parameters you can use in json_encode useful. RTM.
// 🧠 How will this be used in assignment 2?
