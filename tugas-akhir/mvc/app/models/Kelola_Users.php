<?php
class Kelola_Users
{
    // Teknik PDO atau PHP data object 
    // $dbh = database handler
    private $table = 'users';
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

    public function getById($id_admin)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_admin = :id_admin');
        $this->db->bind('id_admin', $id_admin);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO users VALUES('', :nama, :username , :password)";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM users WHERE id_admin = :id_admin";
        $this->db->query($query);
        $this->db->bind('id_admin', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahData($data)
    {
        $query = "UPDATE users SET 
                    nama = :nama,
                    username = :username,
                    password = :password
                WHERE id_admin = :id_admin";
        // pake : (binding) agar bersih string querynya
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id_admin', $data['id_admin']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM users WHERE nama LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
