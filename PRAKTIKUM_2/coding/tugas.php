<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Mahasiswa Baru</title>
</head>
<body>
    <h2>Form Registrasi Mahasiswa Baru</h2>

    <form method="post" action="">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>
                    <select name="prodi" required>
                        <option value="">-- Pilih --</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="daftar" value="Daftar">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['daftar'])) {
        $nama   = $_POST['nama'];
        $nim    = $_POST['nim'];
        $prodi  = $_POST['prodi'];
        $alamat = $_POST['alamat'];
        $email  = $_POST['email'];

        // Simpan ke file txt
        $file = fopen("data_mhs.txt", "a");
        $tulis = "$nama | $nim | $prodi | $alamat | $email\n";
        fwrite($file, $tulis);
        fclose($file);

        echo "<hr>";
        echo "<h3>Data Pendaftar:</h3>";
        echo "Nama: $nama <br>";
        echo "NIM: $nim <br>";
        echo "Prodi: $prodi <br>";
        echo "Alamat: $alamat <br>";
        echo "Email: $email <br>";
        echo "<p style='color:green;'>Data berhasil disimpan!</p>";
    }
    ?>

    <hr>
    <h3>Data Mahasiswa Terdaftar:</h3>
    <pre>
<?php
if (file_exists("data_mhs.txt")) {
    $data = file("data_mhs.txt");
    foreach ($data as $baris) {
        echo $baris;
    }
} else {
    echo "Belum ada data yang terdaftar.";
}
?>
    </pre>

</body>
</html>