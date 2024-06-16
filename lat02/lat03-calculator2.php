<?php

class Calculator
{
    public $bil1;
    public $bil2;

    function penjumlahan($x, $y)
    {
        $this->bil1 = $x;
        $this->bil2 = $y;
        $hasil = $x + $y;
        return $hasil;
    }

    function pengurangan($x, $y)
    {
        $this->bil1 = $x;
        $this->bil2 = $y;
        $hasil = $x - $y;
        return $hasil;
    }
}

$calculator = new Calculator();
echo $calculator->penjumlahan(10, 2) . "<br>";
echo $calculator->pengurangan(10, 2) . "<br>";
