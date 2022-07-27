<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/css_login.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Register - Form
            </h1>
         </div>
      </div>
      <form method="post" action="register_action.php">
      <div class="row">
  <div class="form-group col-md-6">
    <input type="text" name="nama_user"  class="form-control my-input" autofocus="" id="nama_user" placeholder="Nama">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="provinsi_au"  class="form-control my-input" id="provinsi_au" placeholder="Provinsi">
  </div>
  <div class="form-group col-md-6">
    <input type="email" name="email_user"  class="form-control my-input" id="email_user" placeholder="Email">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="kota_au"  class="form-control my-input" id="kota_au" placeholder="Kota">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="username_user"  class="form-control my-input" placeholder="Username">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="kecamatan_au"  class="form-control my-input" id="kecamatan_au" placeholder="Kecamatan">
  </div>
  <div class="form-group col-md-6">
    <input type="password" name="pwd_user"  class="form-control my-input" placeholder="Password">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="desakel_au"  class="form-control my-input" id="desakel_au" placeholder="Desa/Kelurahan">
  </div>
  <div class="form-group col-md-6">
    <input type="number" min="0" name="tlp_user"  class="form-control my-input" placeholder="No. Telp">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="more_au"  class="form-control my-input" id="more_au" placeholder="Lainnya">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="catatan_user"  class="form-control my-input" placeholder="Catatan user">
  </div>
  <div class="form-group col-md-6">
    <input type="number" name="kodepos_au"  class="form-control my-input" id="kodepos_au" placeholder="Kodepos">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="bank_ru"  class="form-control my-input" id="bank_ru" placeholder="Nama Bank">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="an_ru"  class="form-control my-input" id="an_ru" placeholder="A.N">
  </div>
  <div class="form-group col-md-6">
    <input type="number" name="no_ru"  class="form-control my-input" id="no_ru" placeholder="Nomor Rekening">
  </div>
  <?php
    $acak_id_user = rand(1000,9999);
    $acak_id_alamat_user = rand(100,9999);
    $acak_id_rekening_user = rand(100,9999);
  ?>
    <input type="hidden" name="point_user" value="1"  class="form-control my-input" placeholder="point user">
    <input type="hidden" name="status_user" value="Y"  class="form-control my-input" placeholder="status user">
    <input type="hidden" name="id_alamat_user" value="<?php echo $acak_id_alamat_user; ?>"  class="form-control my-input" placeholder="id alamat user">
    <input type="hidden" name="id_user" value="<?php echo $acak_id_user; ?>"  class="form-control my-input" placeholder="id user">
    <input type="hidden" name="id_rekening_user" value="<?php echo $acak_id_rekening_user; ?>"  class="form-control my-input" placeholder="id rekening user">
    <input type="hidden" name="status_ru" value="Y"  class="form-control my-input" placeholder="status ru">

    </div>
     <button type="submit" class="btn btn-block send-button tx-tfm">Register</button>
     <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">OR</span>
    </div>
     <a href="login.php" class="btn btn-block g-button">Login</a>
    </div>
    
                     
                     
                  
     </form>
</div>

</body>
