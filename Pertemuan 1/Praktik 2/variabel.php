<?php

    /*
        variabel sistem
        variabel built in php
    */
    echo $_SERVER["DOCUMENT_ROOT"];


    /*
        variabel user
        variabel yang dibuat oleh user
    */
    echo '<br><br>';

    $name = 'Manda';

    echo 'Nama saya adalah ' . $name;

    echo '<br><br>';

    define("fruit","apel");
    echo fruit;

?>