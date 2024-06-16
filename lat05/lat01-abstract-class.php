<?php

abstract class Produk
{
    abstract public function cekHarga();
}

class Televisi extends Produk
{
    public function cekHarga()
    {
        return 3000000;
    }
}
class MesinCuci extends Produk
{
    public function cekHarga()
    {
        return 1500000;
    }
}

$produk01 = new Televisi();
echo "Harga Televisi adalah: " . $produk01->cekHarga();
echo "<br>";

$produk01 = new MesinCuci();
echo "Harga Mesin Cuci adalah: " . $produk01->cekHarga();
