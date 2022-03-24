<?php
require "../classes/Cheese.php";
require "../database/Connection.php";
require "../database/QueryBuilder.php";


return new QueryBuilder(Connection::connect("localhost", "cheese_db", "root", ""));
