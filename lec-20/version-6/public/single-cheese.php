<?php

// 💡 Looking quite a bit cleaner, yes?
// 
// There are still some things bugging me:
//   1. That $results[0] is fugly.
//   2. It'd be nice to be able to specify any cheese via getCheese()
//   3. That DB stuff (our connect) is STILL ugly!   

require "../classes/Cheese.php";
require "../database/Connection.php";
require "../database/QueryBuilder.php";


$builder = new QueryBuilder(Connection::connect("localhost", "cheese_db", "root", ""));

$results = $builder->getCheese();

$cheese = $results[0];

require "../views/single-cheese.view.php";
