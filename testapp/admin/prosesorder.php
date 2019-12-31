<?php 
include("koneksi.php");
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
	}
$nama = $_POST['nama_order'];
$alamat = $_POST['alamat'];
$jumlah = $_POST['jumlah'];
$id_barang = $_POST['barang'];
$input = mysqli_query($koneksi, "INSERT INTO order VALUES('','$id_barang','$nama','$alamat','$jumlah')");
header("location:ordersukses.php");
?>
