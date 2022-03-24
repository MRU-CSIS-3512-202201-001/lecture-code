<?php

return [
  "database" => [
    "host" => $_ENV['DB_HOST'] ?? "localhost",
    "db" => $_ENV['DB_NAME'] ?? "cheese_db",
    "user" => $_ENV['DB_USER'] ?? "root",
    "password" => $_ENV['DB_PASSWORD'] ?? ""
  ]
];
