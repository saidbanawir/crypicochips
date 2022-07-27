<?php
    include 'config.php';
?>

<div class="row">
 <div class="col-xl-3 col-md-6">
   <div class="card bg-primary text-white mb-4">
   <?php $totalbarang = mysqli_query($config, "select * from tb_barang");
         $totalbarang2 = mysqli_num_rows($totalbarang);
   ?>
     <h5><div class="card-body">Total Barang : <?php echo $totalbarang2;?> <span class="fas fa-folder-open"></span></div></h5>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href=".?page=barang">View Details</a>
           <div class="small text-white"><i class="fas fa-angle-right"></i></div>
           </div>
          </div>
         </div>
  <div class="col-xl-3 col-md-6">
    <div class="card bg-success text-white mb-4">
    <?php $totaluser = mysqli_query($config, "select * from tb_user");
         $totaluser2 = mysqli_num_rows($totaluser);
    ?>
      <h5><div class="card-body">Total User : <?php echo $totaluser2; ?> <span class="fas fa-users"></span></div></h5>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href=".?page=user">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
            </div>
           </div>
 <div class="col-xl-3 col-md-6">
  <div class="card bg-danger text-white mb-4">
  <?php $totaltransaksi = mysqli_query($config, "select * from tb_checkout");
        $totaltransaksi2 = mysqli_num_rows($totaltransaksi);
    ?>
    <h5><div class="card-body">Total Transaksi : <?php echo $totaltransaksi2; ?> <span class="fas fa-table"></span></div></h5>
      <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href=".?page=transaksi">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
          </div>
         </div>
        </div>
<!-- tabel user -->
<div class="col-sm-12"> 
    <h4><li class="breadcrumb-item active">Data User</li></h4>
</div>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>ID User</th>
        <th>Nama User</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    </thead>
    <?php
        $no = 1;
        $quser = mysqli_query($config,"select * from tb_user limit 5");
        while($quser2 = mysqli_fetch_array($quser)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $quser2['id_user']; ?></td>
        <td><?php echo $quser2['nama_user']; ?></td>
        <td><?php echo $quser2['email_user']; ?></td>
        <td><?php echo $quser2['status_user']; ?></td>
    </tr>
        <?php  } ?>
</table>
</div>
<!-- tabel barang -->
<div class="col-sm-12"> 
    <h4><li class="breadcrumb-item active">Data Barang</li></h4>
</div>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stock</th>
    </tr>
    </thead>
    <?php
        $no = 1;
        $qbarang = mysqli_query($config,"select * from tb_barang limit 5");
        while($qbarang2 = mysqli_fetch_array($qbarang)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $qbarang2['id_barang']; ?></td>
        <td><?php echo $qbarang2['nama_barang']; ?></td>
        <td><?php echo $qbarang2['harga_barang']; ?></td>
        <td><?php echo $qbarang2['stok_barang']; ?></td>
    </tr>
        <?php  } ?>
</table>
</div>
        


