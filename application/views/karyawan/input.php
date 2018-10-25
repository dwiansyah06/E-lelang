<div class="col-12 stretch-card">
  <div class="card">
    <div class="card-body">
      <p class="card-description" style="text-transform: uppercase;text-align: center;font-size: 16px;">
        <span class="menu-icon mdi mdi-lead-pencil"></span> Input Permintaan Lelang
      </p>
      <form class="forms-sample" id="input_lelang" enctype="multipart/form-data">
        <?php  
          echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());
        ?>
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Pelelang</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Divisi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" value="<?php echo $divisi ?>" name="divisi" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nama Barang</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="nm_brg" placeholder="Nama Barang" autocomplete="off" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Gambar Barang</label>
          <div class="col-sm-9">
            <input type="file" class="form-control file-upload-info" name="gambar" required>
          </div>
        </div>
        <input type="submit" class="btn btn-success float-right" value="Kirim">
      </form>
    </div>
  </div>
</div>