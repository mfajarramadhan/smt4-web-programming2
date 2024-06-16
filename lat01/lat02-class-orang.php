<?php 
class Orang{
    var $nama; 
    var $umur; 
    var $jk; 
    var $warnaRambut; 
}

$orang1 = new Orang();
$orang1->nama = 'Diva';
$orang1->umur = 20;
$orang1->jk = 'laki-laki';
$orang1->warnaRambut = 'merah';

$orang2 = new Orang();
$orang2->nama = 'Hanif';
$orang2->umur = 21;
$orang2->jk = 'perermpuan';
$orang2->warnaRambut = 'biru';

echo $orang1->nama.$orang1->umur.$orang1->jk.$orang1->warnaRambut;
echo "<br>";
echo $orang2->nama.$orang2->umur.$orang2->jk.$orang2->warnaRambut;

?>