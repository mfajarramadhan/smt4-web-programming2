<?php
session_start();
if (!isset($_SESSION["logpes"])) {
    header("location: login-peserta.php");
    exit;
}
require "function.php";


// Mengambil semua data dari tabel kejuruan, desa, dan kecamatan untuk ditampilkan di select option
$conn = mysqli_connect("localhost", "root", "", "db_blkkarawang");
$kejuruan = mysqli_query($conn, "SELECT * FROM tbl_kejuruan");
$desa = mysqli_query($conn, "SELECT * FROM tbl_desa");
$kecamatan = mysqli_query($conn, "SELECT * FROM tbl_kecamatan");



// Instansiasi class Daftar Pelatihan
$daftar = new Daftar_Pelatihan();
if (isset($_POST["submit"])) {
    $result = $daftar->tambah($_POST["id_kejuruan"], $_POST["nik"], $_POST["nama"], $_POST["tempat_lahir"], $_POST["tanggal_lahir"], $_POST["jk"], $_POST["status_nikah"], $_POST["tinggi_badan"], $_POST["berat_badan"], $_POST["no_telp"], $_POST["email"], $_POST["alamat"], $_POST["id_desa"], $_POST["id_kecamatan"], $_POST["nama_ortu"], $_POST["no_ortu"], $_POST["pendidikan"], $_POST["asal_sekolah"], $_POST["jurusan"], $_POST["tujuan"], $_POST["ktp"]);
    if ($result == 1) {
        echo "<script> alert('Registrasi Berhasil'); window.location = '../index.html'; </script>";
    } elseif ($result == 10) {
    } elseif ($result == 100) {
        echo "<script> alert('Registrasi Gagal!'); </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Online</title>
    <link rel="stylesheet" href="../public/css/index.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="header">
        <h2>FORMULIR PENDAFTARAN ONLINE</h2>
    </div>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="id_kejuruan">Pilih Kejuruan : </label><br>
                    <select name="id_kejuruan" id="kejuruan">
                        <option value="">-- Pilih Kejuruan --</option>
                        <?php
                        foreach ($kejuruan as $row) :
                        ?>
                            <option value="<?= $row['id']; ?>">
                                <?= $row['kejuruan']; ?>
                            </option>
                        <?php
                        // }
                        endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nik">NIK :</label>
                    <input type="text" placeholder="Masukkan NIK anda" id="nik" name="nik" maxlength=16>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama">Nama :</label>
                    <input type="text" placeholder="Nama Lengkap" id="nama" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tempat_lahir">Tempat Lahir :</label>
                    <input type="text" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="laki_laki" class="radio">Jenis Kelamin :</label><br>
                    <input type="radio" id="laki_laki" name="jk" value="L">Laki-Laki <br>
                    <input type="radio" id="perempuan" name="jk" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>
                    <label for="belum_menikah">Status Pernikahan :</label><br>
                    <input type="radio" id="menikah" name="status_nikah" value="Menikah">Menikah <br>
                    <input type="radio" id="belum_menikah" name="status_nikah" value="Belum Menikah">Belum Memikah
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tinggi Badan :</label><br>
                    <input type="number" placeholder="Contoh  : 176" id="tinggi_badan" name="tinggi_badan"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Berat Badan :</label><br>
                    <input type="number" placeholder="Contoh  : 50" id="berat_badan" name="berat_badan">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">No Telepon :</label><br>
                    <input type="text" placeholder="0896*********" id="no_telp" name="no_telp">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Email :</label><br>
                    <input type="email" placeholder="Contoh  : pesertapelatihan@gmail.com" id="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Alamat :</label><br>
                    <textarea name="alamat" id="alamat" cols="50" rows="5" placeholder="Contoh : Jl. Soekarno-Hatta, RT/RW 001/002"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id_desa">Desa : </label><br>
                    <select name="id_desa" id="desa">
                        <option value="">-- Pilih Desa Anda --</option>
                        <?php
                        foreach ($desa as $row) :
                        ?>
                            <option value="<?= $row['id']; ?>">
                                <?= $row['nama_desa']; ?>
                            </option>
                        <?php
                        // }
                        endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id_kecamatan">Kecamatan : </label><br>
                    <select name="id_kecamatan" id="kecamatan">
                        <option value="">-- Pilih Kecamatan Anda --</option>
                        <?php
                        // $query = $conn->query("SELECT * FROM tbl_kecamatan");
                        // while($data = $query->fetch_assoc()){
                        foreach ($kecamatan as $row) :
                        ?>
                            <option value="<?= $row['id']; ?>">
                                <?= $row['nama_kecamatan']; ?>
                            </option>
                        <?php
                        // }
                        endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nama Orangtua :</label><br>
                    <input type="text" placeholder="Nama Orangtua" id="nama_ortu" name="nama_ortu">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">No. Telepon Orang Tua :</label><br>
                    <input type="number" placeholder="0896*********" id="no_ortu" name="no_ortu">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="pendidikan">Pendidikan Terakhir : </label><br>
                    <select name="pendidikan" id="pendidikan">
                        <option value="">-- Pilih Pendidikan Terakhir --</option>
                        <option value="strata" id="strata" name="pendidikan">S1/D3/D4</option>
                        <option value="sma/smk" id="sma" name="pendidikan">SMA/SMK</option>
                        <option value="smp" id="smp" name="pendidikan">SMP</option>
                        <option value="sd" id="sd" name="pendidikan">SD</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="asal_sekolah">Asal Sekolah : </label><br>
                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Jurusan/Kejuruan :</label><br>
                    <input type="text" placeholder="Contoh : Teknik Mesin" id="jurusan" name="jurusan">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tujuan">Tujuan Setelah Pelatihan : </label><br>
                    <select name="tujuan" id="tujuan">
                        <option value="">-- Pilih Tujuan --</option>
                        </option>
                        <option value="kerja" id="kerja" name="tujuan">Kerja</option>
                        <option value="usaha" id="usaha" name="tujuan">Usaha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ktp">Upload KTP : (max 2mb!)</label><br>
                    <input type="file" id="ktp" name="ktp">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="agree" id="agree">
                    <label for="agree">Bersedia mengikuti aturan dan tata tertib pelatihan</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit"></input>
                </td>
            </tr>
        </table>
    </form>
    <footer>
        Copyright 2023 @ BLK Karawang
    </footer>

    <!-- <script src="../js/validasi.js"></script> -->
</body>

</html>