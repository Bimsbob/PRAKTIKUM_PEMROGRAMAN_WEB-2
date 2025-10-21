<html>
<head>
<title></title>
</head>
<body>
<h1>Simpan file yang diupload</h1>
<?
$namafile = $HTTP_POST_FILES['file1']['name'];
?>
<p>Nama File : <?echo $namafile;?></p>
<br>
<?
if ($file1!="none") {
copy("$file1","files/$namafile") or
die ("No files");
}
else {
die("Tidak ada file yang diupload");
}
?>
</body>
</html>