<?php

class Kendaraan
{
    private $jenis;
    private $warna;
    private $kecepatan = 0;
    public function __construct($jenis, $warna)
    {
        $this->jenis = $jenis;
        $this->warna = $warna;
    }
    public function getJenis()
    {
        return $this->jenis;
    }
    public function getWarna()
    {
        return $this->warna;
    }
    public function tambahKecepatan($nilai)
    {
        $this->prosesTambahKecepatan($nilai);
        echo "Kecepatan saat ini: {$this->kecepatan} km/jam" . "<br>";
    }
    private function prosesTambahKecepatan($nilai)
    {
        $this->kecepatan += $nilai;
    }
}
$mobil = new Kendaraan("Mobil", "Merah");
echo "Jenis Kendaraan: " . $mobil->getJenis() . "<br>";
echo "Warna kendaraan : " . $mobil->getWarna() . "<br>";

$mobil->tambahKecepatan(30);
$mobil->tambahKecepatan(20);
