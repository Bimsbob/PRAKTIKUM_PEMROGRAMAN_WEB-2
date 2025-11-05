<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 30px 50px;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.25);
            text-align: center;
        }
        h2 {
            color: #2575FC;
        }
        a {
            text-decoration: none;
            background: #2575FC;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            transition: 0.3s;
        }
        a:hover {
            background: #1b5cde;
        }
    </style>
</head>
<body>
<div class="card">
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?> 👋</h2>
    <p>Jenis Kelamin: <b><?php echo ($_SESSION['gender'] == 'L') ? 'Laki-laki' : 'Perempuan'; ?></b></p>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
