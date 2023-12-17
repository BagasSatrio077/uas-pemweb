<?php
class Database {
    // Informasi koneksi database (host, username, password, nama database)
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "datadewa";

    // Objek koneksi database
    private $connection;

    // Konstruktor untuk membuat koneksi ke database saat objek dibuat
    public function __construct() {
        // Membuat koneksi menggunakan objek mysqli
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah koneksi berhasil
        if ($this->connection->connect_error) {
            // Menampilkan pesan kesalahan dan menghentikan eksekusi skrip jika koneksi gagal
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Metode untuk mendapatkan objek koneksi database
    public function getConnection() {
        return $this->connection;
    }

    // Metode untuk menutup koneksi database
    public function closeConnection() {
        $this->connection->close();
    }
}

// Membuat objek dari kelas Database untuk mengelola koneksi
$database = new Database();

// Mendapatkan objek koneksi dari kelas Database
$koneksi = $database->getConnection();
?>
