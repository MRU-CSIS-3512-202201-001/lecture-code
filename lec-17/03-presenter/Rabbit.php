<?php

class Rabbit {

    public static $thingie;
    private $name;
    private $speed;
    private $colour;

    public function __construct($name) {
        $this->name = $name;

    }





    public function name() {
        return strtolower($this->name);
    }

    private function isFast() {
        return $this->speed > 10;
    }

    public function isFastText() {
        return $this->isFast() ? "fast" : "slow";
    }
 
}

$roger = new Rabbit("ROGER");
$name = $roger->name();
$fast = $roger->isFastText();

echo "$name is a $fast rabbit.";




// 💡 The bottom of a class file is a good place to test your classes to see
//    if they work!
