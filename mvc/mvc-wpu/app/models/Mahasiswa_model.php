<?php

class Mahasiswa_model
{
    /*
    Before connected to database;
    private $mhs = [
        [
            "nama" => "ahmad",
            "nrp" => "123",
            "email" => "ahmad@gmail.com",
            "jurusan" => "ti",
        ],
        [
            "nama" => "budi",
            "nrp" => "456",
            "email" => "budi@gmail.com",
            "jurusan" => "si",
        ]
    ];

    public function getAllMhs()
    {
        return $this->mhs;
    }
    */

    // After connected to database but still not included config;
    // private $dbh; // database handler
    // private $stmt; // statement untuk simpan query

    // public function __construct()
    // {
    //     // data source name
    //     $dsn = "mysql:host=localhost;dbname=wpu_php_mvc";

    //     try {
    //         $this->dbh = new PDO($dsn, "root", "");
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function getAllMhs()
    // {
    //     $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    private $table = 'mahasiswa', $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMhs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)";
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id";
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahsiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
