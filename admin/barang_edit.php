<?php
require 'config.php';

    $id_barang = $_GET['id_barang'];

    $nama_barang = $_POST['nama_barang'];
    $id_kategori_barang = $_POST['id_kategori_barang'];
    $diskripsi_barang = $_POST['diskripsi_barang'];
    $berat_barang = $_POST['berat_barang'];
    $harga_barang = $_POST['harga_barang'];
    $stok_barang = $_POST['stok_barang'];
    
    mysqli_query($config,"update tb_barang set nama_barang='$nama_barang',id_kategori_barang='$id_kategori_barang',
    diskripsi_barang='$diskripsi_barang', berat_barang='$berat_barang',harga_barang='$harga_barang',stok_barang='$stok_barang'
    where id_barang='$id_barang'");
    
    header("location:.?page=barang");
?>


