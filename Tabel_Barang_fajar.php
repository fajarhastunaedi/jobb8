<html>
<head>
<title>Latihan Membuat Tabel Barang fajar</title>
</head>
<body>
<?php
include_once("dbinv_connect_fajar.php");
$tabel=mysql_query("CREATE TABLE barang (
kode INT NOT NULL,
nama_barang VARCHAR(60) NOT NULL,
kategori VARCHAR(30) NOT NULL,
jumlah INT NOT NULL,
pokok_jual INT NOT NULL,
PRIMARY KEY(kode))");

if($tabel)
	{ echo"Berhasil membuat tabel barang melalui script php";}
else
	{ echo"Gagal membuat tabel";}
?>
</body>
</html>