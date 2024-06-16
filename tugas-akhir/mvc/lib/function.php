<?php


class Database
{
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $db_name = "db_blkkarawang";
    protected $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
    }
}


// Admin
// Register Admin
class SignUp_Admin extends Database

{
    public function registration($name, $username, $password, $confirmpassword)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM users WHERE username = '$username'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
            // Username telah digyunakan
        } else {
            if ($password == $confirmpassword) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO users VALUES('', '$name', '$username', '$password')";
                mysqli_query($this->conn, $query);
                return 1;
            }
            // Registrasi berhasil
            else {
                return 100;
            }
            // Konfirmasi password tidak sesuai
        }
    }
}

// Login Admin
class Login_Admin extends Database
{
    public $id;
    public function login($username, $password)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM users WHERE username = '$username'");
        $row =  mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if (password_verify($password, $row["password"])) {
                $this->id = $row["id"];
                return 1;
                // Login berhasil
            } else {
                return 10;
                // Password salah
            }
        } else {
            return 100;
            // User tidak terdaftar
        }
    }

    public function idUser()
    {
        return $this->id;
    }
}




// Peserta
// Register Peserta
class SignUp_Peserta extends Database

{
    public function registration($name, $email, $no_telp, $password)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM peserta WHERE email = '$email' OR no_telp = '$no_telp'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
            // email atau no telepon telah digunakan
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO peserta VALUES('', '$name', '$email', '$no_telp', '$password')";
            mysqli_query($this->conn, $query);
            return 1;
            // Registrasi berhasil
        }
    }
}

// Login Peserta
class Login_Peserta extends Database
{
    public $id;
    public function login($emailno_telp, $password)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM peserta WHERE email = '$emailno_telp' OR no_telp = '$emailno_telp'");
        $row =  mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if (password_verify($password, $row["password"])) {
                $this->id = $row["id"];
                return 1;
                // Login berhasil
            } else {
                return 10;
                // Password salah
            }
        } else {
            return 100;
            // User tidak terdaftar
        }
    }

    public function idUser()
    {
        return $this->id;
    }
}


// Tambah data peserta
class Daftar_Pelatihan extends Database
{
    public function tambah($id_kejuruan, $nik, $nama, $tempat_lahir, $tanggal_lahir, $jk, $status_nikah, $tinggi_badan, $berat_badan, $no_telp, $email, $alamat, $id_desa, $id_kecamatan, $nama_ortu, $no_ortu, $pendidikan, $asal_sekolah, $jurusan, $tujuan, $ktp)
    {
        // query insert data peserta
        $query = "INSERT INTO tbl_peserta
            VALUES
            ('$id_kejuruan', '$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jk', '$status_nikah', '$tinggi_badan', '$berat_badan', '$no_telp', '$email', '$alamat', '$id_desa', '$id_kecamatan', '$nama_ortu', '$no_ortu', '$pendidikan', '$asal_sekolah', '$jurusan', '$tujuan', '$ktp')
            ";

        mysqli_query($this->conn, $query);
        // mysqli_query($conn, $input);
        return mysqli_affected_rows($this->conn);
    }
}
