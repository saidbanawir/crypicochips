<?php
    include 'config.php';
?>
<div class="col-sm-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" style="float:right;" title="Tambah Data" data-toggle="modal" data-target="#tambah_barang">
    <span class="fas fa-plus-circle"></span>Tambah</button>
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
        <th>Stok</th>
        <th colspan="3">Aksi</th>
    </tr>
    </thead>
    <?php
        $no = 1;
        $qbarang = mysqli_query($config,"select * from tb_barang");
        while($qbarang2 = mysqli_fetch_array($qbarang)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $qbarang2['id_barang']; ?></td>
        <td><?php echo $qbarang2['nama_barang']; ?></td>
        <td>Rp. <?php echo number_format($qbarang2['harga_barang'],0, ".","."); ?></td>
        <td><?php echo $qbarang2['stok_barang']; ?> pcs</td>
        <td>
            <a href="#read_barang<?php echo $qbarang2['id_barang']; ?>" data-toggle="modal" class="btn btn-info btn-sm" title="Read"><span class="fas fa-eye"></span></a>
            <a href="#edit_barang<?php echo $qbarang2['id_barang']; ?>" data-toggle="modal" class="btn btn-warning btn-sm" title="Edit"><span class="fas fa-edit"></span></a>
            <a href="#hapus_barang<?php echo $qbarang2['id_barang']; ?>" data-toggle="modal" class="btn btn-danger btn-sm" title="Hapus"><span class="fas fa-trash-alt"></span></a>
           
        </td>
    </tr>
        <?php include('modal.php'); } ?>
</table>
</div>
        


