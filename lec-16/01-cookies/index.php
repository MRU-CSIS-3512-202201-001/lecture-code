<?php
$mode = "light";
if (isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'dark') {
  $mode = "dark";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .dark {
      background-color: black;
      color: white;
    }

    .light {
      background-color: aliceblue;
      color: darkblue;
    }
  </style>
  <title>Document</title>
</head>

<body class="<?= $mode ?>">
  <h1>Welcome, welcome, welcome</h1>
</body>

</html>
