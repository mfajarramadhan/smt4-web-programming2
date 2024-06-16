<?php

interface Bangundatar
{

    public function HitungLuas();
}

class Persegi implements Bangundatar
{
    private $sisi;
    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function HitungLuas()
    {
        return pow($this->sisi, 2);
    }
}

class Segitiga implements Bangundatar
{
    private $alas;
    private $tinggi;
    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function HitungLuas()
    {
        return ($this->alas * $this->tinggi / 2);
    }
}

class Lingkaran implements Bangundatar
{
    private $jari2;
    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function HitungLuas()
    {
        return M_PI * pow($this->jari2, 2);
    }
}
$persegi = new Persegi(4);
echo "Luas Persegi = " . $persegi->HitungLuas() . "<br>";
$segitiga = new Segitiga(4, 5);
echo "Luas Segitiga = " . $segitiga->HitungLuas() . "<br>";
$lingkaran = new Lingkaran(10);
echo "Luas Lingkaran = " . $lingkaran->HitungLuas();
