<?php
include "koneksi.php";
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor=#6f7571>
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
		<h2>ORDER SUKSES</h2>
		<br>
		<br>
		<table border="0">
			
			<?php
			include "koneksi.php";
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$jumlah = $_POST['jumlah'];
			$barang = mysqli_escape_string($koneksi, $_POST['barang']);
			$brg = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang = '$barang' ");
			while ($data = mysqli_fetch_array($brg))
			{
				$total = $jumlah * $data['harga'];
			echo ("<tr><td align=\"left\">Nama : $nama</td></tr>");
			echo ("<tr><td align = \"left\">Alamat : $alamat</td></tr>");
			echo ("<tr><td align = \"left\">Barang : ".$data['nama_barang']."</td></tr>");
			echo ("<tr><td align = \"left\">Harga : ".$data['harga']."</td></tr>");
			echo ("<tr><td align = \"left\">Jumlah Barang : $jumlah</td></tr>");
			echo ("<tr><td align = \"left\">Total Pembayaran : $total</td></tr>");
		}
			?>

		</table>
		<table border="0">
			<tr>
				<td align="center"><a href="index.php">Kembali ke Beranda</a></td>
			</tr>
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