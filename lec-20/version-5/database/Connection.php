<?php

class Connection
{

  public static function connect($host, $db, $user, $password)
  {
    try {
      return new PDO("mysql:hosts=$host;dbname=$db;charset=utf8mb4", "$user", "$password");
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
