<?php
    
    class Calculator {
    private $a, $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function pertambahan() {
        $result = $this->a + $this->b;
        return "Hasil Pertambahan: " . $this->a . " + " . $this->b . " = " . $result;
    }

    public function pengurangan() {
        $result = $this->a - $this->b;
        return "Hasil Pengurangan: " . $this->a . " - " . $this->b . " = " . $result;
    }

    public function pembagian() {
        $result = $this->a / $this->b;
        return "Hasil Pembagian: " . $this->a . " : " . $this->b . " = " . $result;
    }

    public function perkalian() {
        $result = $this->a * $this->b;
        return "Hasil Perkalian: " . $this->a . " x " . $this->b . " = " . $result;
    }
}

    $calculator = new Calculator(10, 5);
    echo $calculator->pertambahan() . "<br>";
    echo $calculator->pengurangan() . "<br>";
    echo $calculator->pembagian() . "<br>";
    echo $calculator->perkalian() . "<br>";

?>