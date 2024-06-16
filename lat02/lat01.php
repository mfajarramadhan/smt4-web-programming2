<?php 

class Laptop{
    var $pemilik;
    var $merk;
    var $ukuran;

    function hidupkan_laptop(){
        return "Laptop dinyalakan";
    }

    function matikan_laptop(){
        return "Laptop dimatikan";
    }
}

$laptop1 = new Laptop();
echo $laptop1->pemilik = "Ahmad Mubarok <br>";
echo $laptop1->ukuran = "14 inch <br>";
echo $laptop1->merk = "Lenovo Thinkpad <br>";
echo $laptop1->hidupkan_laptop()."<br>";
echo $laptop1->matikan_laptop()."<br>";

?>