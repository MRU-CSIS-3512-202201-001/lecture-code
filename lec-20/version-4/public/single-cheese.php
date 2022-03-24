<?php

// 💡 Huh. This is getting interesting.
//
// 🧠 We can't write out these cheese objects by hand like this. Where should
//    we be getting the data to make these objects from?
//

require "../classes/Cheese.php";

$pdo = new PDO("mysql:host=localhost;dbname=cheese_db;charset=utf8mb4", "root", "");

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
    cheese.id = 1
EOD;

$statement = $pdo->prepare($theQuery);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);
$theOneCheese = $results[0];

// var_dump($results);

// echo $results[0]->cheese_name;


$cheese = new Cheese($theOneCheese->name, $theOneCheese->classification, $theOneCheese->photoId, $theOneCheese->description);

require "../views/single-cheese.view.php";
