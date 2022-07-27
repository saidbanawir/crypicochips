<?php
    include 'config.php';
?>

<div class="col-sm-12">
    <!-- Button trigger modal -->
    
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
        <th colspan="3">Aksi</th>
    </tr>
    </thead>
    <?php
        $no = 1;
        $quser = mysqli_query($config,"select * from tb_user");
        while($quser2 = mysqli_fetch_array($quser)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $quser2['id_user']; ?></td>
        <td><?php echo $quser2['nama_user']; ?></td>
        <td><?php echo $quser2['email_user']; ?></td>
        <td><?php if($quser2['status_user']=="Y"){
            echo "Active";
        }else{
            echo "Susped";
        } ?></td>
        <td>
            <a href="#read_user<?php echo $quser2['id_user']; ?>" data-toggle="modal" class="btn btn-info btn-sm" title="Read"><span class="fas fa-eye"></span></a>
        </td>
    </tr>
        <?php include('modal.php'); } ?>
</table>
</div>
        


