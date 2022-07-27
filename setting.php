<?php
include 'config.php';
?>
<div class="row">
        <h1 class="my-4">Setting Akun</h1>
</div>
<?php
$session_iduser = $_SESSION['id_user'];
$q_tb_user = mysqli_query($config," select * from tb_user where id_user='$session_iduser'");
$q_tb_user2 = mysqli_fetch_array($q_tb_user);

$q_tb_alamat_user = mysqli_query($config,"select * from tb_alamat_user inner join tb_user on tb_alamat_user.id_alamat_user
= tb_user.id_alamat_user");
$q_tb_alamat_user2 = mysqli_fetch_array($q_tb_alamat_user);

$q_tb_rekening_user = mysqli_query($config,"select * from tb_rekening_user inner join tb_user on tb_rekening_user.id_rekening_user
= tb_user.id_rekening_user");
$q_tb_rekening_user2 = mysqli_fetch_array($q_tb_rekening_user);
?>
<form method="post" action="setting_action.php">
<div class="row g-3">
    <input type="hidden" name="id_user" value="<?php echo $q_tb_user2['id_user'];?>" class="form-control my-input" id="id_user">
    <input type="hidden" name="status_user" value="<?php echo $q_tb_user2['status_user'];?>" class="form-control my-input" id="status_user">
    <input type="hidden" name="id_alamat_user" value="<?php echo $q_tb_alamat_user2['id_alamat_user'];?>" class="form-control my-input" id="id_alamat_user">
    <input type="hidden" name="id_rekening_user" value="<?php echo $q_tb_rekening_user2['id_rekening_user'];?>" class="form-control my-input" id="id_rekening_user">
    <input type="hidden" name="status_ru" value="<?php echo $q_tb_rekening_user2['status_ru'];?>" class="form-control my-input" id="status_ru">
    <div class="col-md-6">
    <label>Nama</label>
    <input type="text" name="nama_user" value="<?php echo $q_tb_user2['nama_user'];?>" class="form-control my-input" id="nama_user">
    </div>
    <div class="col-md-6">
    <label>Provinsi</label>
    <input type="text" name="provinsi_au" value="<?php echo $q_tb_alamat_user2['provinsi_au'] ?>"  class="form-control my-input" id="provinsi_au">
    </div>
    <div class="col-md-6">
    <label>Email</label>
    <input type="email" name="email_user" value="<?php echo $q_tb_user2['email_user'];?>"  class="form-control my-input" id="email_user">
    </div>
    <div class="col-md-6">
    <label>Kota</label>
    <input type="text" name="kota_au" value="<?php echo $q_tb_alamat_user2['kota_au'] ?>" class="form-control my-input" id="kota_au">
    </div>
    <div class="col-md-6">
    <label>Username</label>
    <input type="text" name="username_user" value="<?php echo $q_tb_user2['username_user'];?>"  class="form-control my-input" id="username_user">
    </div>
    <div class="col-md-6">
    <label>Kecamatan</label>
    <input type="text" name="kecamatan_au" value="<?php echo $q_tb_alamat_user2['kecamatan_au'] ?>"  class="form-control my-input" id="kecamatan_au">
    </div>
    <div class="col-md-6">
    <label>Password</label>
    <input type="text" name="pwd_user" value="<?php echo $q_tb_user2['pwd_user'];?>"  class="form-control my-input" id="pwd_user">
    </div>
    <div class="col-md-6">
    <label>Desa/Kelurahan</label>
    <input type="text" name="desakel_au" value="<?php echo $q_tb_alamat_user2['desakel_au'] ?>"  class="form-control my-input" id="desakel_au">
    </div>
    <div class="col-md-6">
    <label>No. Telp</label>
    <input type="number" name="tlp_user" value="<?php echo $q_tb_user2['tlp_user'];?>"  class="form-control my-input" id="tlp_user">
    </div>
    <div class="col-md-6">
    <label>Lainnya</label>
    <input type="text" name="more_au" value="<?php echo $q_tb_alamat_user2['more_au'] ?>"  class="form-control my-input" id="more_au">
    </div>
    <div class="col-md-6">
    <label>Catatan</label>
    <textarea name="catatan_user" class="form-control"><?php echo $q_tb_user2['catatan_user'];?></textarea>
    </div>
    <div class="col-md-6">
    <label>Kodepos</label>
    <input type="text" name="kodepos_au" value="<?php echo $q_tb_alamat_user2['kodepos_au'] ?>"  class="form-control my-input" id="kodepos_au">
    </div>
    <div class="col-md-6">
    <label>Nama Bank</label>
    <input type="text" name="bank_ru" value="<?php echo $q_tb_rekening_user2['bank_ru'] ?>"  class="form-control my-input" id="bank_ru">
    </div>
    <div class="col-md-6">
    <label>No Rekening</label>
    <input type="text" name="no_ru" value="<?php echo $q_tb_rekening_user2['no_ru'] ?>"  class="form-control my-input" id="no_ru">
    </div>
    <div class="col-md-6">
    <label>A.N</label>
    <input type="text" name="an_ru" value="<?php echo $q_tb_rekening_user2['an_ru'] ?>"  class="form-control my-input" id="an_ru">
    </div>
    <div class="col-md-6">
    <label>Point User</label>
    <input type="text" name="point_user" value="<?php echo $q_tb_user2['point_user'];?>" readonly  class="form-control my-input" id="point_user">
    </div>
</div>
    <div class="d-grid gap-2 col-9 mx-auto">
    <button type="submit" name="update_akun" id="update_akun" class="btn btn-primary float-right">Update Akun</button>
    </div>
</form>