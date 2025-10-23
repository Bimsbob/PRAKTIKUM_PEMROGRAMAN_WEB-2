<?php
require 'koneksi.php';

$nama     = $_POST['nama'] ?? '';
$email    = $_POST['email'] ?? '';
$no_hp    = $_POST['no_hp'] ?? '';
$lomba    = $_POST['lomba'] ?? '';
$instansi = $_POST['instansi'] ?? '';

if ($nama == '' || $email == '' || $no_hp == '' || $lomba == '' || $instansi == '') {
    die('Semua field wajib diisi. <a href="form_lomba.html">Kembali</a>');
}

$query = "INSERT INTO peserta_lomba (nama, email, no_hp, lomba, instansi)
          VALUES ('$nama', '$email', '$no_hp', '$lomba', '$instansi')";

if (mysqli_query($koneksi, $query)) {
    echo "<h2>Pendaftaran Berhasil!</h2>";
    echo "<a href='form_lomba.html'>Daftar Peserta Baru</a><br><br>";

    $result = mysqli_query($koneksi, "SELECT * FROM peserta_lomba ORDER BY id_peserta ASC");
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nama</th><th>Email</th><th>No HP</th><th>Lomba</th><th>Instansi</th><th>Waktu Daftar</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id_peserta']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
                <td>{$row['no_hp']}</td>
                <td>{$row['lomba']}</td>
                <td>{$row['instansi']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
