<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body bgcolor="#cfc8c8">
<div id="layout" align="center">
<div id="header"></div>
<div id="kolom1">
	<table>
		<tr>
			<td>Username</td>
			<td> :</td>
			<td><?php echo $_SESSION["username"];?></td>
		</tr>
		<tr>
			<td> <a href="logout.php"> LOGOUT</a></td>
		</tr>
	</table>
</div>
<div id="kolom2">
	<div align="center">
		<a href="inputbarang.php"> TAMBAH DATA BARANG </a>
		<br>
		<br>
		<table border="1">
			<tr>
				<th>ID BARANG</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Stok</th>
			</tr>
			<?php
			include "koneksi.php";
			$result = mysqli_query($koneksi, "SELECT * FROM barang");
			while($data = mysqli_fetch_array($result)) {
 			echo "<tr>";
 			echo ("<td align = \"left\"> ".$data['id_barang']."</td>");
			echo ("<td align = \"left\"> ".$data['nama_barang']."</td>");
			echo ("<td align = \"left\"> Rp. ".$data['harga']."</td>");
			echo ("<td align = \"center\"> ".$data['stok']."</td>");
			echo ("<td align = \"right\"><a href=\"editbarang.php?id_barang=".$data['id_barang']."\">EDIT</a></td>");
			echo ("<td align = \"right\"><a href=\"hapusbarang.php?id_barang=".$data['id_barang']."\">HAPUS</a></td></tr>");
			}
			?>
		</table>
	</div>
</br>
</div>
<div id="footer">
	<b>Copykanan &copy;2019 IBER</b>
</div>
</div>
</body>
</html>