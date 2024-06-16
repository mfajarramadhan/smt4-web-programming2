<?php

class Database
{
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $db = "perpustakaan";

    public function openDBConnection()
    {
        $link = new PDO(
            "mysql:host=$this->host;
        dbName = $this->db",
            $this->user,
            $this->password
        );
        return $link;
    }

    public function closeDBconnection($link)
    {
        $link = null;
    }
}




// $koneksi = mysqli_connect("localhost", "root", "", "perpustakaan");
// if ($koneksi) {
//     echo
//     "<script>
//     alert('sukses');
//     </script>";
// }
