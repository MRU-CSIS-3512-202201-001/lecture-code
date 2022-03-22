<?php

// 💡 
//
// 🧠 
//

require "../classes/Cheese.php";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=cheese_db;charset=utf8mb4", "root", "");
} catch (PDOException $e) {
    die($e->getMessage());
}

$theQuery = <<<'EOD'
SELECT
    cheese.name,
    classification.code,
    image.id,
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
$result = $statement->fetchAll();

var_dump($result);

// $cheese = new Cheese("ricotta", "fresh", "some slightly longer description", "002");

require "../views/single-cheese.view.php";
