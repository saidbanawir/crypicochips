<?php
require 'config.php';

$id_barang = $_GET['id_barang'];
mysqli_query($config,"delete from tb_barang where id_barang='$id_barang'");
header("location:.?page=barang");

?>