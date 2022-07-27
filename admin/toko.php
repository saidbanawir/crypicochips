<?php 
include 'config.php';
 ?>

    <div class="col-sm-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" style="float:right;" title="Tambah Toko" data-toggle="modal" data-target="#tambah_toko">
    <span class="fas fa-plus-circle"></span>Tambah</button>
    <h4><li class="breadcrumb-item active">Toko</li></h4>
                       
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Toko</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Email</th>
                <th>Image</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <?php 
            $no = 1;
            $qtoko = mysqli_query($config,"select * from tb_toko");
            while($qtoko2 = mysqli_fetch_array($qtoko)){
        ?>
        <tr>
                <td><?php echo $no++ ; ?></td>
                <td><?php echo $qtoko2['nama_toko']; ?></td>
                <td><?php echo $qtoko2['alamat_toko']; ?></td>
                <td><?php echo $qtoko2['telp_toko']; ?></td>
                <td><?php echo $qtoko2['email_toko']; ?></td>
                <td><img src="img_toko/<?php echo $qtoko2['image_toko'] ?>" width="50" height="50"></td>
                <td>
            <a href="#read_toko<?php echo $qtoko2['id_toko']; ?>" data-toggle="modal" class="btn btn-info btn-sm" title="Read"><span class="fas fa-eye"></span></a>
            <a href="#edit_toko<?php echo $qtoko2['id_toko']; ?>" data-toggle="modal" class="btn btn-warning btn-sm" title="Edit"><span class="fas fa-edit"></span></a>
            <a href="#hapus_toko<?php echo $qtoko2['id_toko']; ?>" data-toggle="modal" class="btn btn-danger btn-sm" title="Hapus"><span class="fas fa-trash-alt"></span></a>
                
                </td>
        </tr>
        <?php include('modal.php'); } ?>
    </table>
</div>


