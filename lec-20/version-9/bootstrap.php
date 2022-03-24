<?php
require "../classes/Cheese.php";
require "../database/Connection.php";
require "../database/QueryBuilder.php";
include "localconfig.php";
$config = require "config.php";
$dbConfig = $config['database'];


return new QueryBuilder(Connection::connect(
  $dbConfig['host'],
  $dbConfig['db'],
  $dbConfig['user'],
  $dbConfig['password']
));
