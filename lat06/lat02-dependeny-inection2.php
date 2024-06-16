<?php

class Database
{
    protected $host = "localhost";
    protected $dbname = "perpustakaan";
    protected $user = "root";
    protected $password = "";

    public function getConnection()
    {
        return new PDO(
            "mysql:host=$this->host;dbname=$this->dbname",
            $this->user,
            $this->password
        );
    }
} 

// interface Mahasiswa
// {
//     public function name($name);
// }

// class Prodi implements Mahasiswa
// {
//     public function name($name)
//     {
//         return "Nama saya adalah ...$name";
//     }
// }

// class Semester implements Mahasiswa
// {
//     public function name($name)
//     {
//         return "Prodi saya adalah ...$name";
//     }
// }

// $Prodi = new Prodi();
// $fakultas = new Fakultas($Prodi);
// echo $fakultas->getMahasiswa()->name("Ucup") . "<br> ";



// $Semester = new Semester();
// $fakultas = new Fakultas($Semester);
// echo $fakultas->getMahasiswa()->name("Sistem informasi");
