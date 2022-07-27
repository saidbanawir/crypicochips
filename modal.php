<!-- Modal Tambah Keranjang -->
<div class="modal fade" id="tambah_keranjang<?php echo $shop_barang2['id_barang']; ?>" tabindex="-1" aria-labelledby="tambah_keranjangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Masukkan Keranjang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
            $tambah_keranjang = mysqli_query($config,"select * from tb_barang where id_barang='".$shop_barang2['id_barang']."'");
            $tambah_keranjang2 = mysqli_fetch_array($tambah_keranjang);
            $id_keranjang = rand(100,9999);
        ?>
            <form method="post" action="tambah_keranjang.php">
              <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" value="<?php echo $tambah_keranjang2['nama_barang'];?>" readonly id="nama_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Harga Satuan</label>
              <input type="text" name="harga_barang" id="harga_barang" value="<?php echo $tambah_keranjang2['harga_barang'];?>" readonly class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Qty</label>
              <input type="number" min="1" name="total_qty" id="total_qty" class="form-control" required="true">
              </div>
              <input type="hidden" name="stok_barang" id="stok_barang" value="<?php echo $tambah_keranjang2['stok_barang'];?>" readonly class="form-control" required="true">
              <input type="hidden" value="<?php echo $id_keranjang; ?>" name="id_keranjang" id="id_keranjang" class="form-control" required="true">
              <input type="hidden" value="<?php echo $_SESSION['id_user']; ?>" name="id_user" id="id_user" class="form-control" required="true">
              <input type="hidden" value="<?php echo $tambah_keranjang2['id_barang']; ?>" name="id_barang" id="id_barang" class="form-control" required="true">
              <input type="hidden" value="N" name="status" class="form-control" required="true">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add_barang" class="btn btn-primary">Tambah Keranjang</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Pembayaran -->
<div class="modal fade" id="pembayaran<?php echo $qkeranjang2['id_keranjang'];?>" tabindex="-1" aria-labelledby="pembayaranLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Form Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
            $qpembayaran = mysqli_query($config,"select * from tb_keranjang where id_keranjang='".$qkeranjang2['id_keranjang']."'");
            $qpembayaran2 = mysqli_fetch_array($qpembayaran);
            $id_pembayaran_acak = rand(100,9999);
        ?>
        <form method="post" action="pembayaran_action.php">
              <div class="form-group">
              <label>Id Pembayaran</label>
              <input type="text" name="id_pembayaran" value="<?php echo $id_pembayaran_acak ;?>" readonly id="id_keranjang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Id Keranjang</label>
              <input type="text" name="id_keranjang" value="<?php echo $qpembayaran2['id_keranjang'];?>" readonly id="id_keranjang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Id Barang</label>
              <input type="text" name="id_barang" value="<?php echo $qpembayaran2['id_barang'];?>" readonly id="id_barang" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Id User</label>
              <input type="text" name="id_user" value="<?php echo $qpembayaran2['id_user'];?>" readonly id="id_user" class="form-control" required="true">
              </div>
              <div class="form-group">
              <label>Nama Bank</label>
              <select name="nama_bank" class="form-control" id="nama_bank">
                <option value="BCA">1. BCA</option>
                <option value="BRI">2. BRI</option>
                <option value="Mandiri">3. Mandiri</option>
                <option value="BNI">4. BNI</option>
                <option value="Lainnya">5. Lainnya</option>
              </select>
              </div>
              <div class="form-group">
              <label>Nomor Rekening</label>
              <input type="number" name="no_rek" id="no_rek" class="form-control" required="true">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add_bayar" class="btn btn-primary">Bayar</button>
      </div>
      </form>
    </div>
  </div>
</div>