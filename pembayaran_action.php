<?php
include 'config.php';

$id_pembayaran = $_POST['id_pembayaran'];
$id_keranjang = $_POST['id_keranjang'];
$id_user = $_POST['id_user'];
$id_barang = $_POST['id_barang'];
$nama_bank = $_POST['nama_bank'];
$no_rek = $_POST['no_rek'];
$tanggal_pembayaran = date("Y:m:d H:i:s");

$status = Y;


$q_pembayaran = mysqli_query($config,"insert into tb_checkout values('$id_pembayaran','$id_keranjang','$id_barang','$id_user'
,'$nama_bank','$no_rek','$tanggal_pembayaran')");

$update_keranjang = mysqli_query($config,"update tb_keranjang set status='$status' where id_keranjang='$id_keranjang' ");

header("location:.?page=keranjang");
?>