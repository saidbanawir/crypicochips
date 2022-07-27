<?php
require 'config.php';

if(isset($_POST['edit_toko'])){
    $id_toko = $_GET['id_toko'];
    
    $nama_toko = $_POST['nama_toko'];
    $alamat_toko = $_POST['alamat_toko'];
    $telp_toko = $_POST['telp_toko'];
    $email_toko = $_POST['email_toko'];
    $facebook_toko = $_POST['facebook_toko'];
    $twitter_toko = $_POST['twitter_toko'];
    $instagram_toko = $_POST['instagram_toko'];
    $deskripsi_toko = $_POST['deskripsi_toko'];
    $image_toko = $_FILES['image_toko']['name'];

    if(!empty($image_toko)){
    $rand_toko = rand(1,99);
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.', $image_toko);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['image_toko']['tmp_name'];
    $image_toko2 = $rand_toko.'-'.$image_toko;



    if(in_array($ekstensi,$ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp,'img_toko/'.$image_toko2);
        
                mysqli_query($config,"update tb_toko set nama_toko='$nama_toko', alamat_toko='$alamat_toko',telp_toko='$telp_toko'
            ,email_toko='$email_toko', facebook_toko='$facebook_toko', twitter_toko='$twitter_toko', instagram_toko='$instagram_toko'
            , deskripsi_toko='$deskripsi_toko',image_toko='$image_toko2' where id_toko='$id_toko' ");
            header ("location:.?page=toko");
        }else{
            echo "<script>alert('File Harus berbentuk png/jpg/jpeg');window.location='.?page=toko';</script>";
        
    }
            }else{
                mysqli_query($config,"update tb_toko set nama_toko = '$nama_toko', alamat_toko='$alamat_toko',telp_toko='$telp_toko'
                ,email_toko='$email_toko', facebook_toko='$facebook_toko', twitter_toko='$twitter_toko', instagram_toko='$instagram_toko'
                , deskripsi_toko='$deskripsi_toko' where id_toko='$id_toko' ");
                header ("location:.?page=toko");
            }

}
?>