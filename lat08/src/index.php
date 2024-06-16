<?php

require "calculator.php";
require "mobil/mobil.php";
require "mobil/toyota.php";
require "mobil/honda.php";

use calculator\Cal;
use mobil\Mobil;
use mobil\Toyota;
use mobil\Honda;

$toyota = new Toyota("test", 10);
$calculator = new Cal($toyota);
echo "Jarak Maksimum ";
