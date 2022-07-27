<?php

include 'config.php';

//tb_user
$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$username_user = $_POST['username_user'];
$pwd_user = $_POST['pwd_user'];
$tlp_user = $_POST['tlp_user'];
$catatan_user = $_POST['catatan_user'];
$status_user = $_POST['status_user'];
$point_user = $_POST['point_user'];
//tb_alamat_user
$provinsi_au = $_POST['provinsi_au'];
$kota_au = $_POST['kota_au'];
$kecamatan_au = $_POST['kecamatan_au'];
$desakel_au = $_POST['desakel_au'];
$more_au = $_POST['more_au'];
$kode_pos = $_POST['kodepos_au'];
//tb_rekening_user
$bank_ru = $_POST['bank_ru'];
$an_ru = $_POST['an_ru'];
$no_ru = $_POST['no_ru'];
$status_ru = $_POST['status_ru'];

//foreign key tb_user,tb_alamatuser,tb_rekening_user
$id_alamat_user = $_POST['id_alamat_user'];
$id_user = $_POST['id_user'];
$id_rekening_user = $_POST['id_rekening_user'];

 $q_tbuser = mysqli_query($config,"insert into tb_user values('$id_user','$nama_user','$username_user','$pwd_user','$point_user','$email_user'
 ,'$tlp_user','$id_alamat_user','$id_rekening_user','$status_user','$catatan_user')");
 $q_tbalamatuser = mysqli_query($config,"insert into tb_alamat_user values('$id_alamat_user','$id_user','$kota_au','$provinsi_au',
 '$kode_pos','$desakel_au','$kecamatan_au','$more_au')");
 $q_tbrekeninguser = mysqli_query($config,"insert into tb_rekening_user values('$id_rekening_user','$bank_ru','$an_ru','$no_ru','$id_user','$status_ru')");

 header("location:register.php");
?>