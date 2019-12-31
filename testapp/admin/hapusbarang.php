<?php 
include "koneksi.php";
$id = $_GET['id_barang'];
mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id'");
header("location:index.php");
?>