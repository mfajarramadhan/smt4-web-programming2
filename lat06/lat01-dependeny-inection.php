<?php

class Fakultas
{
    protected $mahasiswa;

    public function __construct($mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }
    public function getMahasiswa()
    {
        return $this->mahasiswa;
    }
}

interface Mahasiswa
{
    public function name($name);
}

class Prodi implements Mahasiswa
{
    public function name($name)
    {
        return "Nama saya adalah ...$name";
    }
}

class Semester implements Mahasiswa
{
    public function name($name)
    {
        return "Prodi saya adalah ...$name";
    }
}

$Prodi = new Prodi();
$fakultas = new Fakultas($Prodi);
echo $fakultas->getMahasiswa()->name("Ucup") . "<br> ";



$Semester = new Semester();
$fakultas = new Fakultas($Semester);
echo $fakultas->getMahasiswa()->name("Sistem informasi");
