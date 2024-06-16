<?php
class Kelola_Peserta
{
    // Teknik PDO atau PHP data object 
    // $dbh = database handler
    private $table = 'tbl_peserta';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    public function getAll()
    {

        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKejuruan()
    {
        $this->db->query('SELECT * FROM tbl_kejuruan');
        return $this->db->resultSet();
    }

    public function getDesa()
    {
        $this->db->query('SELECT * FROM tbl_desa');
        return $this->db->resultSet();
    }

    public function getKecamatan()
    {
        $this->db->query('SELECT * FROM tbl_kecamatan');
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nik = :nik');
        $this->db->bind('nik', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO tbl_peserta VALUES(:id_kejuruan, :nik, :nama, :tempat_lahir , :tanggal_lahir, :jk, :status_nikah, :tinggi_badan, :berat_badan, :no_telp, :email, :alamat, :id_desa, :id_kecamatan, :nama_ortu, :no_ortu, :pendidikan, :asal_sekolah, :jurusan, :tujuan, :ktp)";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('id_kejuruan', $data['id_kejuruan']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('status_nikah', $data['status_nikah']);
        $this->db->bind('tinggi_badan', $data['tinggi_badan']);
        $this->db->bind('berat_badan', $data['berat_badan']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_desa', $data['id_desa']);
        $this->db->bind('id_kecamatan', $data['id_kecamatan']);
        $this->db->bind('nama_ortu', $data['nama_ortu']);
        $this->db->bind('no_ortu', $data['no_ortu']);
        $this->db->bind('pendidikan', $data['pendidikan']);
        $this->db->bind('asal_sekolah', $data['asal_sekolah']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('tujuan', $data['tujuan']);
        $this->db->bind('ktp', $data['ktp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM tbl_peserta WHERE nik = :nik";
        $this->db->query($query);
        $this->db->bind('nik', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahData($data)
    {
        $query = "UPDATE tbl_peserta SET 
                    id_kejuruan = :id_kejuruan,
                    nama = :nama,
                    tempat_lahir = :tempat_lahir,
                    tanggal_lahir = :tanggal_lahir,
                    jk = :jk,
                    status_nikah = :status_nikah,
                    tinggi_badan = :tinggi_badan,
                    berat_badan = :berat_badan,
                    no_telp = :no_telp,
                    email = :email,
                    alamat = :alamat,
                    id_desa = :id_desa,
                    id_kecamatan = :id_kecamatan,
                    nama_ortu = :nama_ortu,
                    no_ortu = :no_ortu,
                    pendidikan = :pendidikan,
                    asal_sekolah = :asal_sekolah,
                    jurusan = :jurusan,
                    tujuan = :tujuan,
                    ktp = :ktp
                WHERE nik = :nik";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('id_kejuruan', $data['id_kejuruan']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('status_nikah', $data['status_nikah']);
        $this->db->bind('tinggi_badan', $data['tinggi_badan']);
        $this->db->bind('berat_badan', $data['berat_badan']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_desa', $data['id_desa']);
        $this->db->bind('id_kecamatan', $data['id_kecamatan']);
        $this->db->bind('nama_ortu', $data['nama_ortu']);
        $this->db->bind('no_ortu', $data['no_ortu']);
        $this->db->bind('pendidikan', $data['pendidikan']);
        $this->db->bind('asal_sekolah', $data['asal_sekolah']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('tujuan', $data['tujuan']);
        $this->db->bind('ktp', $data['ktp']);
        $this->db->bind('nik', $data['nik']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tbl_peserta WHERE nama LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
