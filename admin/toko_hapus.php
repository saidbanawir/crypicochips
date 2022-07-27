<?php
require 'config.php';

$id_toko = $_GET['id_toko'];
mysqli_query($config,"delete from tb_toko where id_toko='$id_toko'");
header("location:.?page=toko");

?>