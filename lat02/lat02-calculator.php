<?php 
// Muhammad Fajar Ramadhan
// 4337857201220003
// Sistem Informasi

class Calculator{
    private $bil1;
    private $bil2;

    public function __construct($x, $y){
        $this->bil1 = $x;
        $this->bil2 = $y;
    }

    public function Penjumlahan(){
        $hasil = $this->bil1 + $this->bil2;
        return $hasil;
    }

    public function pengurangan(){
        $hasil = $this->bil1 - $this->bil2;
        return $hasil;
    }

}

$calculator1 = new Calculator(10,5);
echo $calculator1->Penjumlahan()."<br>";
echo $calculator1->pengurangan();

// Output 
// 15
// 5

?>