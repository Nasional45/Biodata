<?php
class Database
{
    //property
    public $host = "localhost", $user = "root", $pass, $db = "contoh2";
    public $koneksi;

    //method
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
    }
}
//Data Tabel Siswa
include 'biodata.php';
//konekssi DB
$db = new Database();
