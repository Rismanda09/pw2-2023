<?php
    require_once 'class_tubuh.php';

    $motor = new Mata("Mata", "Melihat", 2);
    $submarine = new Jari("Jari", "Menggenggam", 10);

    echo "Info Mata<br>";
    echo "*************<br>";

    $motor->getInfo();
    echo "<br>";

    echo "Info Jari Tangan<br>";
    echo "*************<br>";
    
    $submarine->getInfo();
?>