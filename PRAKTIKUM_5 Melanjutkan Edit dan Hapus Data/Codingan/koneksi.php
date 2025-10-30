<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // kosong kalau pakai XAMPP default
$dbname = 'db_lomba';

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if (!$koneksi) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>
