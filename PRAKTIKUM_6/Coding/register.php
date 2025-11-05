<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun Baru</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #56CCF2, #2F80ED);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #2F80ED;
            margin-bottom: 20px;
        }
        input, select {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        input[type="submit"] {
            background-color: #2F80ED;
            color: white;
            cursor: pointer;
            border: none;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #1A5FDB;
        }
        a {
            text-decoration: none;
            color: #2F80ED;
        }
        .alert {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Daftar Akun</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <select name="gender" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        <input type="submit" name="daftar" value="Daftar">
    </form>

    <?php
    include "koneksi.php";

    if (isset($_POST['daftar'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $gender = $_POST['gender'];

        $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
        if (mysqli_num_rows($cek) > 0) {
            echo "<div class='alert' style='color:red;'>❌ Username sudah digunakan!</div>";
        } else {
            $simpan = mysqli_query($koneksi, "INSERT INTO users VALUES('$username','$password','$gender')");
            if ($simpan) {
                echo "<div class='alert' style='color:green;'>✅ User berhasil terdaftar! <br><a href='login.php'>Login sekarang</a></div>";
            } else {
                echo "<div class='alert' style='color:red;'>❌ Gagal menyimpan data!</div>";
            }
        }
    }
    ?>
</div>
</body>
</html>
