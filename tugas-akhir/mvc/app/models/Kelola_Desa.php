<?php
class Kelola_Desa
{
    // Teknik PDO atau PHP data object 
    // $dbh = database handler
    private $table = 'tbl_desa';
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
        $query = "INSERT INTO tbl_desa VALUES('', :kode_desa, :nama_desa, :alamat, :ket)";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('kode_desa', $data['kode_desa']);
        $this->db->bind('nama_desa', $data['nama_desa']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('ket', $data['ket']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM tbl_desa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahData($data)
    {
        $query = "UPDATE tbl_desa SET 
                    kode_desa = :kode_desa,
                    nama_desa = :nama_desa,
                    alamat = :alamat,
                    ket = :ket
                WHERE id = :id";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('kode_desa', $data['kode_desa']);
        $this->db->bind('nama_desa', $data['nama_desa']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('ket', $data['ket']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tbl_desa WHERE nama_desa LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
