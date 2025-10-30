<?php
require 'koneksi.php';

// hapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM peserta_lomba WHERE id_peserta=$id");
    header("Location: index.php?pesan=hapus");
    exit;
}

// update data
if (isset($_POST['update'])) {
    $id = $_POST['id_peserta'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $lomba = $_POST['lomba'];
    $instansi = $_POST['instansi'];

    $update = "UPDATE peserta_lomba 
               SET nama='$nama', email='$email', no_hp='$no_hp', lomba='$lomba', instansi='$instansi'
               WHERE id_peserta=$id";
    mysqli_query($koneksi, $update);
    header("Location: index.php?pesan=update");
    exit;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Data Peserta Lomba</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between">
      <h4>Data Peserta Lomba</h4>
      <a href="form_lomba.html" class="btn btn-light btn-sm">+ Tambah Peserta</a>
    </div>
    <div class="card-body">
      <?php if(isset($_GET['pesan'])): ?>
        <div class="alert alert-success">Data berhasil <?= $_GET['pesan']; ?>!</div>
      <?php endif; ?>

      <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Lomba</th>
            <th>Instansi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM peserta_lomba ORDER BY id_peserta DESC");
        while ($row = mysqli_fetch_assoc($data)):
        ?>
          <tr>
            <td><?= $row['id_peserta']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td><?= $row['lomba']; ?></td>
            <td><?= $row['instansi']; ?></td>
            <td>
              <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id_peserta']; ?>">Edit</button>
              <a href="?hapus=<?= $row['id_peserta']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
          </tr>

          <!-- Modal Edit -->
          <div class="modal fade" id="editModal<?= $row['id_peserta']; ?>" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="post">
                  <div class="modal-header bg-warning">
                    <h5 class="modal-title">Edit Peserta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="id_peserta" value="<?= $row['id_peserta']; ?>">
                    <div class="mb-2">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>" required>
                    </div>
                    <div class="mb-2">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="<?= $row['email']; ?>" required>
                    </div>
                    <div class="mb-2">
                      <label>No HP</label>
                      <input type="text" name="no_hp" class="form-control" value="<?= $row['no_hp']; ?>" required>
                    </div>
                    <div class="mb-2">
                      <label>Lomba</label>
                      <input type="text" name="lomba" class="form-control" value="<?= $row['lomba']; ?>" required>
                    </div>
                    <div class="mb-2">
                      <label>Instansi</label>
                      <input type="text" name="instansi" class="form-control" value="<?= $row['instansi']; ?>" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="update" class="btn btn-success">Simpan Perubahan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
