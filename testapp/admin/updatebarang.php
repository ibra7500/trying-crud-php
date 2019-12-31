<?php
include "koneksi.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$update = "UPDATE barang SET nama_barang='$nama_barang', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'";
$test = mysqli_query($koneksi, $update);
  if( $test ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

?>