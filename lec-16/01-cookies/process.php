<?php

if ($_GET == ["mode" => "dark"]) {
  setcookie("mode", "dark");
} else {
  setcookie("mode", "light");
}

// 🧠 What if we want these to stick around after the browser is closed?


header("Location: index.php");
