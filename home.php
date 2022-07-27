<?php
require 'config.php';
?>
<div class="row">
        <h1 class="my-4">Order Menu</h1>
      </div>
    <div class="row">
        <?php
                $shop_barang = mysqli_query($config,"select * from tb_barang");
                while($shop_barang2 = mysqli_fetch_array($shop_barang)){
        ?>
          <div class="col-lg-3 col-md-5 mb-3">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/logo.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <p><?php echo $shop_barang2['nama_barang']; ?></a>
                </h4>
                <h6>Rp. <?php echo number_format($shop_barang2['harga_barang'],0, ".","."); ?></h6>
                <p class="card-text"><?php echo $shop_barang2['diskripsi_barang']; ?></p>
              </div>
              <div class="card-footer">
              <i class="card-text">Stock : <?php echo $shop_barang2['stok_barang']; ?></i>
               <a class="btn btn-secondary" data-toggle="modal" data-target="#tambah_keranjang<?php echo $shop_barang2['id_barang']; ?>" style="float:right;"> Add to cart <span class="fas fa-shopping-cart"></span></a>
               <?php include "modal.php"; ?>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>