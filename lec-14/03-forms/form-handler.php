<?php

// Use GET as the action again and proceed.

// 🧠 What key/value pair is in the query string for the email submitted?
// 🧠 Where is that key specified in the form?
// 🧠 How could we get the email from the query string?

// var_dump($_POST);
echo "<h1>Hello, " . $_POST["user_name"] . "!</h1>";

// 🧠 What values come back for empty form fields? (the name is a hint...)
// 🧠 What if the form used POST instead?
