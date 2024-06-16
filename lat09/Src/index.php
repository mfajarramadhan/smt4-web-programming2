<?php

    require "Mobil/Mobil.php";
    require "Mobil/Toyota.php";
    require "Mobil/Honda.php";
    require "Calculator.php";

    $Toyota = new Dummy\Mobil\Toyota("Toyota", 10);
    $calculator = new Dummy\Calculator($Toyota);
    echo "Jarak maksimum " . $Toyota->getMerk() . " adalah " . $calculator->hitungJarak() . "KM";
    echo "<br>";

    $Honda = new Dummy\Mobil\Honda("Honda", 10);
    $calculator2 = new Dummy\Calculator($Honda);
    echo "Jarak maksimum " . $Honda->getMerk() . " adalah " . $calculator2->hitungJarak() . "KM";