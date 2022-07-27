<div class="row">
        <h1 class="my-4">Tabel Keranjang</h1>
</div>
<div class="row">
<table class="table table-striped table-hover">
  <tr>
    <th>No</th>
    <th>Id Keranjang</th>
    <th>Id Barang</th>
    <th>Qty</th>
    <th>Total Harga</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  <?php
    $no = 1;
    $id_user = $_SESSION['id_user'];
    $qkeranjang = mysqli_query($config,"select * from tb_keranjang where id_user='$id_user'");
    while($qkeranjang2 = mysqli_fetch_array($qkeranjang)){
  ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $qkeranjang2['id_keranjang']; ?></td>
    <td><?php echo $qkeranjang2['id_barang']; ?></td>
    <td><?php echo $qkeranjang2['total_qty']; ?></td>
    <td>Rp. <?php echo number_format($qkeranjang2['total_harga'],0, ".","."); ?></td>
    <td><?php if($qkeranjang2['status']=="Y"){
          echo "Success";
          }else{
            echo "Pending";
          } ?>
    </td>
    <?php
      if($qkeranjang2['status']=='N'){
    ?>
    <td><a data-toggle="modal" data-target="#pembayaran<?php echo $qkeranjang2['id_keranjang'];?>" class="btn btn-success"><i class="fas fa-money-bill-alt"></i> Bayar</a></td>
    <?php }else{ ?>
      <td><a data-toggle="modal" data-target="#pembayaran<?php echo $qkeranjang2['id_keranjang'];?>" aria-disabled="true" class="btn btn-success disabled"><i class="fas fa-money-bill-alt"></i> Bayar</a></td>
    <?php } ?>
  </tr>
  <?php include 'modal.php'; } ?>
</table>

</div>