<?php
include ("koneksi.php");
$id = $_POST['id_barang'];
$nama = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
mysqli_query($koneksi, "insert into barang values('$id','$nama','$harga','$stok')");
header("location:index.php");
?>