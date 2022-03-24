<?php

// 💡 Almost done.
//    Let's pull the id in from a query string.  

$builder = require("../bootstrap.php");

$cheese = $builder->getCheese(2);

require "../views/single-cheese.view.php";
