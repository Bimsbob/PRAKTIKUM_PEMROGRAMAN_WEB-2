<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP dan HTML</title>
</head>
<body>

    <!-- Bagian pertama: Menampilkan kode PHP di awal -->
    <?php
        echo "<h2>Belajar Menggabungkan PHP dengan HTML</h2>";
        echo "Bagian ini ditulis menggunakan PHP.<br>";
    ?>

    <!-- Bagian HTML biasa -->
    <p>Ini adalah bagian HTML biasa, di luar blok PHP.</p>

    <!-- Bagian kedua: Menampilkan kode PHP di akhir -->
    <?php
        $nama = "Adrian";
        $jurusan = "Teknik Informaatika";
        echo "Halo, nama saya <b>$nama</b> dari jurusan <b>$jurusan</b>.";
    ?>

</body>
</html>