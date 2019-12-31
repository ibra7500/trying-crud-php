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
		<h2>EDIT DATA BARANG</h2>
		<br>
		<form method="post" action="updatebarang.php">
			<?php
			include 'koneksi.php';
			$id_barang = $_GET['id_barang'];
			$data = mysqli_query($koneksi,"select * from barang where id_barang='$id_barang'");
			while($d = mysqli_fetch_array($data)){
			?>
			<table>
				<tr>
					<td>Nama Barang</td>
					<td> : </td>
					<td><input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
						<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
						</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td> : </td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td> : </td>
					<td><input type="number" name="stok" value="<?php echo $d['stok']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
	</div>
</br>
</div>
<div id="footer">
	<b>Copykanan &copy;2019 IBER</b>
</div>
</div>
</body>
</html>