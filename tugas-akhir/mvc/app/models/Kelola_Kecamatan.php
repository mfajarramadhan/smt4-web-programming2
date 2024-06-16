<?php
class Kelola_Kecamatan
{
    // Teknik PDO atau PHP data object 
    // $dbh = database handler
    private $table = 'tbl_kecamatan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    public function getAll()
    {

        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();

        //// Sudah tidak menggunakan syntax ini, karena sudah digunakan di Database Wrapper pada core/Database.php
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO tbl_kecamatan VALUES('', :kode_kecamatan, :nama_kecamatan, :alamat, :ket)";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('kode_kecamatan', $data['kode_kecamatan']);
        $this->db->bind('nama_kecamatan', $data['nama_kecamatan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('ket', $data['ket']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM tbl_kecamatan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahData($data)
    {
        $query = "UPDATE tbl_kecamatan SET 
                    kode_kecamatan = :kode_kecamatan,
                    nama_kecamatan = :nama_kecamatan,
                    alamat = :alamat,
                    ket = :ket
                WHERE id = :id";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('kode_kecamatan', $data['kode_kecamatan']);
        $this->db->bind('nama_kecamatan', $data['nama_kecamatan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('ket', $data['ket']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tbl_kecamatan WHERE nama_kecamatan LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
