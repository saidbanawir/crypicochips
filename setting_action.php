<?php
include 'config.php';

if(isset($_POST['update_akun'])){
    $id_rekening_user = $_POST['id_rekening_user'];
    $id_alamat_user = $_POST['id_alamat_user'];
    $id_user = $_POST['id_user'];

    //tb_user
    $nama_user = $_POST['nama_user'];
    $email_user = $_POST['email_user'];
    $username_user = $_POST['username_user'];
    $pwd_user = $_POST['pwd_user'];
    $tlp_user = $_POST['tlp_user'];
    $catatan_user = $_POST['catatan_user'];
    $status_user = $_POST['status_user'];
    $point_user = $_POST['point_user'];

    //tb_rekening_user
    $bank_ru = $_POST['bank_ru'];
    $an_ru = $_POST['an_ru'];
    $no_ru = $_POST['no_ru'];
    $status_ru = $_POST['status_ru'];

    //tb_alamat_user
    $provinsi_au = $_POST['provinsi_au'];
    $kota_au = $_POST['kota_au'];
    $kecamatan_au = $_POST['kecamatan_au'];
    $desakel_au = $_POST['desakel_au'];
    $more_au = $_POST['more_au'];
    $kodepos_au = $_POST['kodepos_au'];

    mysqli_query($config,"update tb_user set nama_user='$nama_user', username_user='$username_user', pwd_user='$pwd_user', 
    point_user='$point_user', email_user='$email_user', tlp_user='$tlp_user', id_alamat_user='$id_alamat_user', id_rekening_user='$id_rekening_user',
    status_user='$status_user', catatan_user='$catatan_user' where id_user='$id_user'");
    

    mysqli_query($config,"update tb_alamat_user set id_user='$id_user', kota_au='$kota_au', provinsi_au='$provinsi_au',
    kodepos_au='$kodepos_au', desakel_au='$desakel_au', kecamatan_au='$kecamatan_au', more_au='$more_au' where id_alamat_user='$id_alamat_user' ");
    

    mysqli_query($config,"update tb_rekening_user set bank_ru='$bank_ru', an_ru='$an_ru', no_ru='$no_ru', id_user='$id_user',
    status_ru='$status_ru' where id_rekening_user='$id_rekening_user' ");

    echo "<script>alert('Berhasil Edit Akun');window.location='.?page=setting'</script>";
}

?>