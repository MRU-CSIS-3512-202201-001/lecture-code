<?php

// 💡 Huh. This is getting interesting.
//
// 🧠 We can't write out these cheese objects by hand like this. Where should
//    we be getting the data to make these objects from?
//

require "../classes/Cheese.php";

$cheese = new Cheese("ricotta", "fresh", "some slightly longer description", "002");

require "../views/single-cheese.view.php";
