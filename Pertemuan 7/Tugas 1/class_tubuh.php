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
            echo "Organ Tubuh: " . $this->type . "<br>";
            echo "Fungsi: " . $this->fuel . "<br>";
        }
    }

        // code class Vehicle..

        class Mata extends Vehicle {
        public $wheels; // property

        // Method
        public function __construct($type, $fuel, $wheels) {
            parent::__construct($type, $fuel);
            $this->wheels = $wheels;
        }

        
        public function getInfo() {
            parent::getInfo();
            echo "Jumlah: " . $this->wheels . "<br>";
        }
    }

        class Jari extends Vehicle {
        public $max_depth; // property

        // Method
        public function __construct($type, $fuel, $max_depth) {
            parent::__construct($type, $fuel);
            $this->max_depth = $max_depth;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Jumlah: " . $this->max_depth . " jari<br>";
        }
    }
?>