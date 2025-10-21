<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Buku Tamu</title>
</head>
<body>
    <h1>Form Buku Tamu</h1>
    <p>
        Silakan tinggalkan pesan, kritik, atau saran Anda untuk membantu kami
        meningkatkan kualitas layanan.
    </p>
    <hr>

    <form action="proc_bukutamu.php" method="post">
        <label for="nama">Nama Anda:</label><br>
        <input type="text" id="nama" name="nama" size="30" maxlength="50" placeholder="Masukkan nama Anda"><br><br>

        <label for="email">Alamat Email:</label><br>
        <input type="email" id="email" name="email" size="30" maxlength="50" placeholder="contoh@email.com"><br><br>

        <label for="komentar">Komentar:</label><br>
        <textarea id="komentar" name="komentar" cols="45" rows="5" placeholder="Tulis komentar Anda di sini..."></textarea><br><br>

        <input type="submit" value="Kirim Pesan">
        <input type="reset" value="Hapus Data">
    </form>

    <hr>
    <p><small>Terima kasih telah mengunjungi situs kami!</small></p>
</body>
</html>