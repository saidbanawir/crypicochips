<!-- Modal Tambah Barang -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="tambah_barangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="barang_add.php">
              <div class="form-group">
              <label>Id Barang</label>
              <input type="text" name="id_barang" id="id_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" id="nama_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Id Kategori Barang</label>
              <input type="text" name="id_kategori_barang" id="id_kategori_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Berat Barang</label>
              <input type="text" name="berat_barang" id="berat_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Harga barang</label>
              <input type="text" name="harga_barang" id="harga_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok_barang" id="stok_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Diskripsi</label>
              <textarea name="diskripsi_barang" id="diskripsi_barang" class="form-control" required="true"></textarea>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add_barang" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Edit Barang -->
<div class="modal fade" id="edit_barang<?php echo $qbarang2['id_barang'];?>" tabindex="-1" aria-labelledby="edit_barangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
            $barang_edit = mysqli_query($config,"select * from tb_barang where id_barang='".$qbarang2['id_barang']."'");
            $barang_edit2 = mysqli_fetch_array($barang_edit);
        ?>
<form method="post" action="barang_edit.php?id_barang=<?php echo $barang_edit2['id_barang']; ?>">
              <div class="form-group">
              <label>Id Barang</label>
              <input type="text" name="id_barang" id="id_barang" readonly value="<?php echo $barang_edit2['id_barang']; ?>" class="form-control" required="true">
              <p class="text-danger" id="err_id_barang"></p>
              </div>
              <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $barang_edit2['nama_barang']; ?>" class="form-control" required="true">
              <p class="text-danger" id="err_nama_barang"></p>
              </div>
              <div class="form-group">
              <label>Id Kategori Barang</label>
              <input type="text" name="id_kategori_barang" id="id_kategori_barang" value="<?php echo $barang_edit2['id_kategori_barang']; ?>" class="form-control" required="true">
              <p class="text-danger" id="err_id_kategori_barang"></p>
              </div>
              <div class="form-group">
              <label>Berat Barang</label>
              <input type="text" name="berat_barang" id="berat_barang" value="<?php echo $barang_edit2['berat_barang']; ?>" class="form-control" required="true">
              <p class="text-danger" id="err_berat_barang"></p>
              </div>
              <div class="form-group">
              <label>Harga barang</label>
              <input type="text" name="harga_barang" id="harga_barang" value="<?php echo $barang_edit2['harga_barang']; ?>" class="form-control" required="true">
              <p class="text-danger" id="err_harga_barang"></p>
              </div>
              <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok_barang" id="stok_barang" value="<?php echo $barang_edit2['stok_barang']; ?>" class="form-control" required="true">
              <p class="text-danger" id="err_stok_barang"></p>
              </div>
              <div class="form-group">
              <label>Diskripsi</label>
              <textarea name="diskripsi_barang" id="diskripsi_barang" class="form-control" required="true"><?php echo $barang_edit2['diskripsi_barang']; ?></textarea>
              <p class="text-danger" id="err_diskripsi_barang"></p>
              </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="edit_barang" class="btn btn-primary" value="Simpan">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Hapus Barang -->
<div class="modal fade" id="hapus_barang<?php echo $qbarang2['id_barang'];?>" tabindex="-1" aria-labelledby="hapus_barangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Hapus Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
            $barang_hapus = mysqli_query($config,"select * from tb_barang where id_barang='".$qbarang2['id_barang']."'");
            $barang_hapus2 = mysqli_fetch_array($barang_hapus);
        ?>
                <div class="container-fluid">
					<h5><center>Anda yakin akan menghapus <strong><?php echo $barang_hapus2['nama_barang']; ?></strong> ?</center></h5> 
                </div> 
        </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="barang_hapus.php?id_barang=<?php echo $qbarang2['id_barang']; ?>" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
<!-- Modal Read Barang -->
<div class="modal fade" id="read_barang<?php echo $qbarang2['id_barang'];?>" tabindex="-1" aria-labelledby="read_barangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Read Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
            $barang_read = mysqli_query($config,"select * from tb_barang where id_barang='".$qbarang2['id_barang']."'");
            $barang_read2 = mysqli_fetch_array($barang_read);
        ?>
      <form>
      <div class="form-group">
              <label>Id Barang</label>
              <input type="text" name="id_barang" id="id_barang" value="<?php echo $barang_read2['id_barang']; ?>" class="form-control" readonly required="true">
              <p class="text-danger" id="err_id_barang"></p>
              </div>
              <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $barang_read2['nama_barang']; ?>" class="form-control" readonly required="true">
              <p class="text-danger" id="err_nama_barang"></p>
              </div>
              <div class="form-group">
              <label>Id Kategori Barang</label>
              <input type="text" name="id_kategori_barang" id="id_kategori_barang" value="<?php echo $barang_read2['id_kategori_barang']; ?>" readonly class="form-control" required="true">
              <p class="text-danger" id="err_id_kategori_barang"></p>
              </div>
              <div class="form-group">
              <label>Berat Barang</label>
              <input type="text" name="berat_barang" id="berat_barang" value="<?php echo $barang_read2['berat_barang']; ?>" class="form-control" readonly required="true">
              <p class="text-danger" id="err_berat_barang"></p>
              </div>
              <div class="form-group">
              <label>Harga barang</label>
              <input type="text" name="harga_barang" id="harga_barang" value="<?php echo $barang_read2['harga_barang']; ?>" class="form-control" readonly required="true">
              <p class="text-danger" id="err_harga_barang"></p>
              </div>
              <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok_barang" id="stok_barang" value="<?php echo $barang_read2['stok_barang']; ?>" class="form-control" readonly required="true">
              <p class="text-danger" id="err_stok_barang"></p>
              </div>
              <div class="form-group">
              <label>Diskripsi</label>
              <textarea name="diskripsi_barang" id="diskripsi_barang" class="form-control" required="true" readonly><?php echo $barang_read2['diskripsi_barang']; ?></textarea>
              <p class="text-danger" id="err_diskripsi_barang"></p>
              </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
        </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Toko -->
<div class="modal fade" id="tambah_toko" tabindex="-1" aria-labelledby="tambah_tokoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Tambah Toko</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="toko_add.php" enctype="multipart/form-data">
              <div class="form-group">
              <label>Nama Toko</label>
              <input type="text" name="nama_toko" id="nama_toko" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>No. Telp</label>
              <input type="text" name="telp_toko" id="telp_toko" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Email</label>
              <input type="email" name="email_toko" id="email_toko" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Facebook</label>
              <input type="text" name="facebook_toko" id="facebook_toko" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Twitter</label>
              <input type="text" name="twitter_toko" id="twitter_toko" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Instagram</label>
              <input type="text" name="instagram_toko" id="instagram_toko" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Alamat Toko</label>
              <textarea name="alamat_toko" id="alamat_toko" class="form-control" required="true"></textarea>
              </div>
              <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="deskripsi_toko" id="deskripsi_toko" class="form-control" required="true"></textarea>
              </div>
              <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="deskripsi_toko" id="deskripsi_toko" class="form-control" required="true"></textarea>
              </div>
              <div class="form-group">
              <label>Foto</label>
              <input type="file" name="image_toko" id="image_toko" class="form-control">
              <small style="color:red;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</small>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add_toko" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Toko -->
<div class="modal fade" id="edit_toko<?php echo $qtoko2['id_toko']; ?>" tabindex="-1" aria-labelledby="edit_tokoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Edit Toko</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php
            $toko_edit = mysqli_query($config,"select * from tb_toko where id_toko='".$qtoko2['id_toko']."'");
            $toko_edit2 = mysqli_fetch_array($toko_edit);
            ?>
              <form method="post" action="toko_edit.php?id_toko=<?php echo $toko_edit2['id_toko']; ?>" enctype="multipart/form-data">
              <div class="form-group">
              <label>Id Toko</label>
              <input type="text" name="id_toko" id="id_toko" value="<?php echo $toko_edit2['id_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Nama Toko</label>
              <input type="text" name="nama_toko" id="nama_toko" value="<?php echo $toko_edit2['nama_toko']; ?>" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>No. Telp</label>
              <input type="text" name="telp_toko" id="telp_toko" value="<?php echo $toko_edit2['telp_toko']; ?>" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Email</label>
              <input type="email" name="email_toko" id="email_toko" value="<?php echo $toko_edit2['email_toko']; ?>" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Facebook</label>
              <input type="text" name="facebook_toko" id="facebook_toko" value="<?php echo $toko_edit2['facebook_toko']; ?>" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Twitter</label>
              <input type="text" name="twitter_toko" id="twitter_toko" value="<?php echo $toko_edit2['twitter_toko']; ?>" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Instagram</label>
              <input type="text" name="instagram_toko" id="instagram_toko" value="<?php echo $toko_edit2['instagram_toko']; ?>" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Alamat Toko</label>
              <textarea name="alamat_toko" id="alamat_toko" class="form-control" required="true"><?php echo $toko_edit2['alamat_toko']; ?></textarea>
              </div>
              <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="deskripsi_toko" id="deskripsi_toko" class="form-control" required="true"><?php echo $toko_edit2['deskripsi_toko']; ?></textarea>
              </div>
              <div class="form-group">
              <label>Foto</label>
              <img src="img_toko/<?php echo $toko_edit2['image_toko'] ?>" width="250" height="250">
              <input type="file" name="image_toko" id="image_toko" class="form-control"></br>
              <small>Abaikan foto jika tidak ingin dirubah.</small></br>
              <small style="color:red;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</small>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_toko" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Read Toko -->
<div class="modal fade" id="read_toko<?php echo $qtoko2['id_toko']; ?>" tabindex="-1" aria-labelledby="read_tokoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Read Toko</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php
            $toko_read = mysqli_query($config,"select * from tb_toko where id_toko='".$qtoko2['id_toko']."'");
            $toko_read2 = mysqli_fetch_array($toko_read);
            ?>
            <form method="post" action="toko_edit.php?id_toko=<?php echo $toko_edit2['id_toko']; ?>" enctype="multipart/form-data">
              <div class="form-group">
              <label>Id Toko</label>
              <input type="text" name="id_toko" id="id_toko" value="<?php echo $toko_read2['id_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Nama Toko</label>
              <input type="text" name="nama_toko" id="nama_toko" value="<?php echo $toko_read2['nama_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>No. Telp</label>
              <input type="text" name="telp_toko" id="telp_toko" value="<?php echo $toko_read2['telp_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Email</label>
              <input type="email" name="email_toko" id="email_toko" value="<?php echo $toko_read2['email_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Facebook</label>
              <input type="text" name="facebook_toko" id="facebook_toko" value="<?php echo $toko_read2['facebook_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Twitter</label>
              <input type="text" name="twitter_toko" id="twitter_toko" value="<?php echo $toko_read2['twitter_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Instagram</label>
              <input type="text" name="instagram_toko" id="instagram_toko" value="<?php echo $toko_read2['instagram_toko']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Alamat Toko</label>
              <textarea name="alamat_toko" id="alamat_toko" class="form-control" readonly required="true"><?php echo $toko_read2['alamat_toko']; ?></textarea>
              </div>
              <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="deskripsi_toko" id="deskripsi_toko" class="form-control" readonly required="true"><?php echo $toko_edit2['deskripsi_toko']; ?></textarea>
              </div>
              <div class="form-group">
              <label>Foto</label><br>
              <img src="img_toko/<?php echo $toko_read2['image_toko'] ?>" width="250" height="250">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Hapus Toko -->
<div class="modal fade" id="hapus_toko<?php echo $qtoko2['id_toko'];?>" tabindex="-1" aria-labelledby="hapus_tokoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Hapus Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
            $toko_hapus = mysqli_query($config,"select * from tb_toko where id_toko='".$qtoko2['id_toko']."'");
            $toko_hapus2 = mysqli_fetch_array($toko_hapus);
        ?>
                <div class="container-fluid">
					<h5><center>Anda yakin akan menghapus <strong><?php echo $toko_hapus2['nama_toko']; ?></strong> ?</center></h5> 
                </div> 
        </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="toko_hapus.php?id_toko=<?php echo $qtoko2['id_toko']; ?>" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>

<!-- Modal Read User -->
<div class="modal fade" id="read_user<?php echo $quser2['id_user']; ?>" tabindex="-1" aria-labelledby="read_userLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Read Toko</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php
            $user_read = mysqli_query($config,"select * from tb_user where id_user='".$quser2['id_user']."'");
            $user_read2 = mysqli_fetch_array($user_read);
            ?>
            <form method="post" enctype="multipart/form-data">
              <div class="form-group">
              <label>Id User</label>
              <input type="text" name="id_user" id="id_user" value="<?php echo $user_read2['id_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Nama User</label>
              <input type="text" name="nama_user" id="nama_user" value="<?php echo $user_read2['nama_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Username</label>
              <input type="text" name="username_user" id="username_user" value="<?php echo $user_read2['username_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Email</label>
              <input type="email" name="email_user" id="email_user" value="<?php echo $user_read2['email_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>No. Telp</label>
              <input type="text" name="tlp_user" id="tlp_user" value="<?php echo $user_read2['tlp_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>ID Alamat</label>
              <input type="text" name="id_alamat_user" id="id_alamat_user" value="<?php echo $user_read2['id_alamat_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>ID Rekening</label>
              <input type="text" name="id_rekening_user" id="id_rekening_user" value="<?php echo $user_read2['id_rekening_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Catatan User</label>
              <textarea name="catatan_user" id="catatan_user" class="form-control" readonly required="true"><?php echo $user_read2['catatan_user']; ?></textarea>
              </div>
              <div class="form-group">
              <label>Point User</label>
              <input type="text" name="point_user" id="point_user" value="<?php echo $user_read2['point_user']; ?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Status</label>
              <input type="text" name="status_user" id="status_user" value="<?php echo $user_read2['status_user']; ?>" readonly class="form-control" required="true">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>