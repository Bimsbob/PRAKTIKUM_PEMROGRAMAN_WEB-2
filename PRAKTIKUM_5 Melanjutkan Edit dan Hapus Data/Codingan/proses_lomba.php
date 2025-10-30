<?php
require 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$lomba = $_POST['lomba'];
$instansi = $_POST['instansi'];

$query = "INSERT INTO peserta_lomba (nama, email, no_hp, lomba, instansi)
          VALUES ('$nama', '$email', '$no_hp', '$lomba', '$instansi')";

if (mysqli_query($koneksi, $query)) {
    header('Location: index.php?pesan=sukses');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>
