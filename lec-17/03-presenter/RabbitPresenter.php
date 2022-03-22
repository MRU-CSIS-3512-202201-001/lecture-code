<?php
require "Rabbit.php";

class RabbitPresenter {

    private $rabbit;

    public function __construct($rabbit) {
        $this->rabbit = $rabbit;
        
    }

    public function asH1() {
        $name = $this->rabbit->name();
        return "<h1>$name</h1>";
    }

}

$presenter = new RabbitPresenter(new Rabbit("ffober"));
echo $presenter->asH1();



// 💡 If you're going to be doing a complex string interpolation in
//    a class, you might want to store off your method calls into
//    variables to avoid oddness with "".
