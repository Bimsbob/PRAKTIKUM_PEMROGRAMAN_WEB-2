<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Buku Tamu</title>
</head>
<body>
<?php
    // Tangkap data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
?>

    <h1>Data Buku Tamu</h1>
    <hr>
    <p><strong>Nama Anda:</strong> <?= htmlspecialchars($nama); ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email); ?></p>
    <p><strong>Komentar:</strong><br>
    <textarea cols="50" rows="6" readonly><?= htmlspecialchars($komentar); ?></textarea></p>

    <br>
    <a href="bukutamu.php">← Kembali ke Form</a>
</body>
</html>