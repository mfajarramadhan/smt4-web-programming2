<?php 

class Produk{
    
}

$televisi = new Produk();
$mesinCuci = new Produk();
$Speaker = new Produk();

// var_dump($televisi);//object produk1 properti0
// echo"<br>";
// var_dump($mesinCuci);//object produk2 properti0
// echo"<br>";
// var_dump($Speaker);//object produk3 properti0

class Mobil{
    var $merk; 
    var $tahun; 
    var $warna; 

}

$mobil1 = new Mobil();
$mobil1->merk = 'Toyota';
$mobil1->tahun = 2024;
$mobil1->warna = 'merah';

$mobil2 = new Mobil();
$mobil2->merk = 'Daihatsu';
$mobil2->tahun = 2023;
$mobil2->warna = 'biru';

echo $mobil1->merk.$mobil1->tahun.$mobil1->warna;
echo "<br>";
echo $mobil2->merk.$mobil2->tahun.$mobil2->warna;

?>