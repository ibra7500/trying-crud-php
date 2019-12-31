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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor=#6f7571>
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
		<h2>ORDER BARANG</h2>
		<br>
		<form method="post" action="ordersukses.php">
			<table>
				<tr>
					<td align="left">Nama</td>
					<td align="left"> : </td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td align="left">Alamat</td>
					<td align="left"> : </td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Barang</td>
					<td> : </td>
					<td> <select class="form-control" name="barang">
								<?php 
								$brg=mysqli_query($koneksi,"select * from barang");
								while($b=mysqli_fetch_array($brg)){
									?>	
									<option value="<?php echo $b['nama_barang']; ?>"><?php echo $b['nama_barang']; echo ("&nbsp;&nbsp;&nbsp;Rp. ".$b['harga']."") ?></option>
									<?php 
								}
								?>
							</select>
						</td>
					 
				</tr>
				<tr>
					<td>Jumlah Barang</td>
					<td> : </td>
					<td><input type="number" name="jumlah"></td>
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