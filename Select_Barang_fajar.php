<html>
<head>
<title>Latihan Membuat Tabel Barang fajar</title>
</head>
<body>
<table border="1">
<tr bgcolor="#CCCCCC">
	<td>Kode</td>
	<td>Nama</td>
	<td>Kategori</td>
	<td>Jumlah</td>
	<td>Harga Jual</td>
</tr>
<?php
include_once("dbinv_connect_fajar.php");
$selectview=mysql_query("select kode,nama_barang,kategori,jumlah,pokok_jual
			from barang order by kode,nama_barang asc");
while($data=mysql_fetch_array($selectview))
{	echo"<tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	<td>$data[4]</td>
  </tr>";
}
?>
</table>
</body>
</html>