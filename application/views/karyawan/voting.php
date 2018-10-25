<div class="row">
	<?php 
		foreach($list_lelang as $row => $value):
			if($username !== $value->nama){ 
	?>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<center><img src="<?php echo base_url()."asset/images/lelang/$value->gambar" ?>" style=" height: 200px;width: 250px"></center>
			</div>
			<div class="card-footer" style="padding-left: 0; padding-right: 0">
				<?php  
					if ($hasil_lelang[$row] == 1) {
						echo '<a class="btn btn-success btn-block disabled" style="color: #fff"><span class="menu-icon mdi mdi-checkbox-marked-circle"></span> Voted</a>';
					} else { ?>
						<a class="btn btn-block btn-info" id="dtl-lelang" data-toggle="modal" data-target="#modal-default" 
						data-nama="<?php echo $value->nama ?>"
						data-divisi = "<?php echo $value->divisi ?>"
						data-harga="<?php echo $value->harga ?>"
						data-nmbrg="<?php echo $value->nama_brg ?>"
						data-gambar = "<?php echo $value->gambar ?>"
						style="color: #fff;">Vote</a>
			  <?php } ?>
			</div>
		</div>
	</div>
	<?php 
			}
		endforeach; 
	?>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
      	<h4 class="modal-title" style="font-family: 'Roboto';font-weight: 300 ">Detail Info Lelang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" id="modal-data">
      	<form id="send_voting" method="post">
      	<div class="form-group row">
          <label class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-9">
          	<input type="hidden" name="nama_pelelang" id="nm_pl">
          	<input type="hidden" name="div_pelelang" id="div_pl">
          	<input type="hidden" name="gambar" id="gambar">
          	<?php  
	          echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());
	        ?>

            <input type="text" class="form-control" name="nama" value="<?php echo $username ?>" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Divisi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="divisi" value="<?php echo $divisi ?>" readonly>
          </div>
        </div>
		<div class="form-group row">
          <label class="col-sm-3 col-form-label">Nama Barang</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nmbrg" name="nm_brg" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Harga Lelang</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="harga" name="hrg_lelang" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Harga penawaran</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="harga_pw" id="harga_pnw" required>
          </div>
        </div>
      <div class="modal-footer">
        <input type="submit" name="kirim" value="Kirim" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
 </div>
</div>

</div>
<script>
	$(document).on("click", "#dtl-lelang", function(){
		var nmbrg = $(this).data('nmbrg');
		var harga = $(this).data('harga');
		var nmpl = $(this).data('nama');
		var div = $(this).data('divisi');
		var gbr = $(this).data('gambar'); 

		$("#modal-data #nmbrg").val(nmbrg);
		$("#modal-data #harga").val(harga);
		$("#modal-data #nm_pl").val(nmpl);
		$("#modal-data #div_pl").val(div);
		$("#modal-data #gambar").val(gbr);
	});
</script>