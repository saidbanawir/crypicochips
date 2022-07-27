<?php
include 'config.php';

$id_keranjang = $_POST['id_keranjang'];
$id_user = $_POST['id_user'];
$id_barang = $_POST['id_barang'];
$total_qty = $_POST['total_qty'];
$status = $_POST['status'];

$harga_barang = $_POST['harga_barang'];
$total_harga = $harga_barang*$total_qty;

$stok_barang = $_POST['stok_barang'];
$stokbarang2 = $stok_barang-$total_qty;

mysqli_query($config,"insert into tb_keranjang values('$id_keranjang','$id_user','$id_barang','$total_qty','$total_harga','$status')");

mysqli_query($config,"update tb_barang set stok_barang='$stokbarang2' where id_barang='$id_barang' ");

header("location:.");
?>