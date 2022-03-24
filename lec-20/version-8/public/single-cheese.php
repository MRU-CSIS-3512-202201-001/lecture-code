<?php

// 💡 Last step. (well, almost)
//
// 🧠 Take a look at our bootstrap. Anything making you twitchy there?

$builder = require("../bootstrap.php");

// you'd want the following to have some kind of function call 
// handling query string sanitization
$id = $_GET['id'];

$cheese = $builder->getCheese($id);

require "../views/single-cheese.view.php";
