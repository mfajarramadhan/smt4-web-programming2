<?php
class Kelola_Kejuruan
{
    // Teknik PDO atau PHP data object 
    // $dbh = database handler
    private $table = 'tbl_kejuruan';
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
        $query = "INSERT INTO tbl_kejuruan VALUES('', :kode_kejuruan, :kejuruan, :pelatihan)";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('kode_kejuruan', $data['kode_kejuruan']);
        $this->db->bind('kejuruan', $data['kejuruan']);
        $this->db->bind('pelatihan', $data['pelatihan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM tbl_kejuruan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahData($data)
    {
        $query = "UPDATE tbl_kejuruan SET 
                    kode_kejuruan = :kode_kejuruan,
                    kejuruan = :kejuruan,
                    pelatihan = :pelatihan
                WHERE id = :id";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('kode_kejuruan', $data['kode_kejuruan']);
        $this->db->bind('kejuruan', $data['kejuruan']);
        $this->db->bind('pelatihan', $data['pelatihan']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tbl_kejuruan WHERE kejuruan LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
