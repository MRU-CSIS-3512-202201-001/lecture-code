<?php

// 💡 We've isolated the connection logic into its own class. That might come 
//    in handy in a while.
//
// The next thing we should isolate is all that grody query stuff.

require "../classes/Cheese.php";
require "../database/Connection.php";

$pdo = Connection::connect("localhost", "cheese_db", "root", "");

$theQuery = <<<'EOD'
SELECT
    cheese.name as name,
    classification.code as classification,
    image.id as photoId,
    description 
FROM
    cheese
    INNER JOIN classification ON ( cheese.classification_id = classification.id )
    INNER JOIN description ON ( cheese.id = description.cheese_id )
    INNER JOIN image ON ( cheese.id = image.cheese_id ) 
WHERE
    cheese.id = 4
EOD;

$statement = $pdo->prepare($theQuery);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Cheese');

var_dump($results);

$cheese = $results[0];


require "../views/single-cheese.view.php";
