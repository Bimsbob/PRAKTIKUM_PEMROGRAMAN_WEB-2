<html>
<head>
    <title>Proses Upload</title>
</head>
<body>
<h1>Simpan file yang diupload</h1>
<br>

<?php
if (isset($_FILES['file1']) && $_FILES['file1']['error'] == 0) {
    $namaFile = $_FILES['file1']['name'];
    $lokasiTmp = $_FILES['file1']['tmp_name'];

    // Menyimpan file ke server dengan nama hasilupload.txt
    if (move_uploaded_file($lokasiTmp, "hasilupload.txt")) {
        echo "File berhasil diupload sebagai <b>hasilupload.txt</b><br>";
        echo "Nama file asli: " . htmlspecialchars($namaFile);
    } else {
        echo "Gagal menyimpan file!";
    }
} else {
    echo "Tidak ada file yang diupload!";
}
?>

</body>
</html>