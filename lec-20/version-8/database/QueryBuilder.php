<?php

class QueryBuilder
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function getCheese($id)
  {
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
        cheese.id = :id
    EOD;

    $statement = $this->pdo->prepare($theQuery);
    $statement->execute(["id" => $id]);
    return $statement->fetchObject('Cheese');
  }
}
