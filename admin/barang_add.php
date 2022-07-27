<?php

require 'config.php';
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_kategori_barang = $_POST['id_kategori_barang'];
$diskripsi_barang = $_POST['diskripsi_barang'];
$berat_barang = $_POST['berat_barang'];
$harga_barang = $_POST['harga_barang'];
$stok_barang = $_POST['stok_barang'];

mysqli_query($config,"insert into tb_barang values('$id_barang','$nama_barang','$id_kategori_barang','$diskripsi_barang','$berat_barang'
,'$harga_barang','$stok_barang')");

header("location:.?page=barang");


?>