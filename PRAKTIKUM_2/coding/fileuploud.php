<!DOCTYPE html>
<html>
<head>
    <title>Form Upload File</title>
</head>
<body>
    <h2>Upload File Anda</h2>
    <p>Silakan klik tombol Browse untuk memilih file yang ingin diupload.</p>
    
    <form action="do_upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000">
        <label for="file1">Pilih File :</label>
        <input type="file" id="file1" name="file1" size="30">
        <br><br>
        <input type="submit" value="Upload File">
    </form>
</body>
</html>