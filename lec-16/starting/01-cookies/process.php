<?php

if ($_GET == ["mode" => "dark"]) {
  setcookie("mode", "dark");
} else {
  setcookie("mode", "light");
}




// header("Location: index.php");


// 🧠 What if we want these to stick around after the browser is closed?

// 🧠 What if we want to add another cookie?

// 🧠 What if we want to delete a cookie?
