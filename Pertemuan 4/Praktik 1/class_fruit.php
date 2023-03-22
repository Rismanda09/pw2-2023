<?php

    class Fruit {
        //property
        public $name = "Apple";
        public $color = "Red";

        //method
        function getName() {
            return $this->name;
        }

        function getcolor() {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->name = "Apple";
    $apple->color = "Red";
    echo $apple->getName();
    echo $apple->getColor();

    echo "<br><br>";

    $banana = new Fruit();
    $banana->name = "Banana";
    $banana->color = "Yellow";
    echo $banana->getName();
    echo $banana->getColor();
   
?>