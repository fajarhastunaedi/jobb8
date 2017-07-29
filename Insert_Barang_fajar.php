<html>
<head>
<title>Latihan Membuat Tabel Barang fajar</title>
</head>
<body>
<?php
include_once("dbinv_connect_fajar.php");
		$insert=mysql_query("INSERT INTO barang  (kode,nama_barang,kategori,jumlah,pokok_jual)
							VALUES ('1','Stip','Peralatan','6','3000')");

if($insert)
	{ echo"Berhasil menyisipkan data pada tabel barang";}
else
	{ echo"Gagal menyisipkan data";}
?>
</body>
</html>