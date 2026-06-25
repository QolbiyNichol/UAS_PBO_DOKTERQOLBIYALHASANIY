<?php
class Koneksi {
    private string $host = "localhost";
    private string $username = "root"; // Sesuaikan dengan username MySQL Anda
    private string $password = "";     // Sesuaikan dengan password MySQL Anda
    private string $dbName = "DB_UAS_PBO_TI1D_DOKTERQOLBIYALHASANIY";
    protected ?PDO $db = null;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi Database Gagal: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->db;
    }
}