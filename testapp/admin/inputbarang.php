<?php 
include("koneksi.php");
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
<body bgcolor=#cfc8c8>
<div id="layout">
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
		<a href="index.php">KEMBALI</a>
		<br>
		<br>
		<h2>TAMBAH DATA BARANG</h2>
		<br>
		<form method="post" action="aksiinputbarang.php">
			<table>
				<tr>
					<td>ID Barang</td>
					<td> : </td>
					<td><input type="text" name="id_barang"></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td> : </td>
					<td><input type="text" name="nama_barang"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td> : </td>
					<td><input type="number" name="harga"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td> : </td>
					<td><input type="number" name="stok"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	</div>
</br>
</div>
<div id="footer">
	<b>Copykanan &copy;2019 IBER</b>
</div>
</div>
</body>
</html>