<?php
    class Vehicle {

		// Property
        protected $type;
        protected $fuel;

        // Method
        protected function __construct($type, $fuel) {
            $this->type = $type;
            $this->fuel = $fuel;
        }

        protected function getInfo() {
            echo "Jenis Kendaraan: " . $this->type . "<br>";
            echo "Bahan Bakar: " . $this->fuel . "<br>";
        }
    }

        // code class Vehicle..

        class Motor extends Vehicle {
        public $wheels; // property

        // Method
        public function __construct($type, $fuel, $wheels) {
            parent::__construct($type, $fuel);
            $this->wheels = $wheels;
        }

        
        public function getInfo() {
            parent::getInfo();
            echo "Jumlah Roda: " . $this->wheels . "<br>";
        }
    }

        class Submarine extends Vehicle {
        public $max_depth; // property

        // Method
        public function __construct($type, $fuel, $max_depth) {
            parent::__construct($type, $fuel);
            $this->max_depth = $max_depth;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Kedalaman Maks: " . $this->max_depth . " meter<br>";
        }
    }
?>