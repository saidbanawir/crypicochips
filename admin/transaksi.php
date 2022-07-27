<?php
    include 'config.php';
?>
</style>
<!-- tabel user -->
<div class="col-sm-12"> 
    <h4><li class="breadcrumb-item active">Data Transaksi</li></h4>
</div>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>ID Pembayaran</th>
        <th>Id Keranjang</th>
        <th>Id Barang</th>
        <th>ID User</th>
        <th>Nama Bank</th>
        <th>No. Rekening</th>
        <th>Tanggal Pembayaran</th>
    </tr>
    </thead>
    <?php
        $no = 1;        
        $qtransaksi = mysqli_query($config,"select * from tb_checkout");
        while($qtransaksi2 = mysqli_fetch_array($qtransaksi)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $qtransaksi2['id_pembayaran']; ?></td>
        <td><?php echo $qtransaksi2['id_keranjang']; ?></td>
        <td><?php echo $qtransaksi2['id_barang']; ?></td>
        <td><?php echo $qtransaksi2['id_user']; ?></td>
        <td><?php echo $qtransaksi2['nama_bank']; ?></td>
        <td><?php echo $qtransaksi2['no_rek']; ?></td>
        <td><?php echo $qtransaksi2['tanggal_pembayaran']; ?></td>
    </tr>
        <?php  }
         ?>
</table>