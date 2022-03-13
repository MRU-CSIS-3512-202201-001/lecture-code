<?php

include "cheeseHelpers.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .classification {
      border: 2px solid #CFCCCB;
      border-radius: 4px;
      width: 15px;
      height: 15px;
      padding: 3px;
      display: flex;
      justify-content: center;
      margin-right: 10px;
      font-size: 0.6em;
      font-weight: bold;
      color: #696665;
    }

    li {
      display: flex;
      align-items: center;
      padding: 3px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      font-size: 1.3em;
    }

    .dot {
      height: 15px;
      width: 15px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 10px;
    }

    .out-of-stock {
      background-color: #A5A014;
    }

    .in-stock {
      background-color: blue;
    }
  </style>
  <title>Document</title>
</head>

<body>

  <h1>Calgary Cheese Shop</h1>

  <?php


  $cheeses = []; // cheese from database, not from array
  echo filteredUl($cheeses);


  ?>
</body>

</html>
