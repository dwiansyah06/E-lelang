<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
	    <div class="card-body">
	    	<div class="table-responsive">
		    	<table class="table table-hover">
		    		<thead>
		    			<tr>
		    				<th>No.</th>
			    			<th>Nama Pelelang</th>
			    			<th>Divisi</th>
			    			<th class="text-center">Action</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php
		    				$i = 1; 
		    				foreach($lelang as $value): 
		    			?>
		    			<tr>
		    				<td><?php echo $i++ ?></td>
		    				<td><?php echo $value->nama ?></td>
		    				<td><?php echo $value->divisi ?></td>
		    				<td align="center">
	    					<?php  
		    						if ($value->status == 0) { ?>
		    							<a class="btn btn-sm btn-primary" id="dtl-lelang" data-toggle="modal" data-target="#modal-default" 
		    							data-id="<?php echo $value->id_lelang ?>" 
		    							data-nama="<?php echo $value->nama ?>" 
		    							data-divisi="<?php echo $value->divisi ?>" 
		    							data-nmbrg="<?php echo $value->nama_brg ?>" 
		    							data-gambar="<?php echo $value->gambar ?>" 
		    							style="color: #fff; font-size: 10px;">Detail</a>
		    				<?php 	} else {
		    							echo "<span class='badge badge-success'>Accepted</span>";
		    						}
		    				?>
		    				</td>
		    			</tr>
		    			<?php endforeach; ?>
		    		</tbody>
		    	</table>
		    </div>
	    </div>
	</div>
</div>

<!-- OPEN MODAL -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Info Lelang</h4>
      </div>
      <form id="kirim_lelang">
      <?php  
	      echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());
	   ?>
      <div class="modal-body" id="modal-data">    
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama</label>
			<div class="col-sm-9">
				<input type="hidden" name="id_lelang" id="id_lelang">
				<input type="text" class="form-control" id="nama" name="nama" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Divisi</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="divisi" name="divisi" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama Barang</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="nmbrg" name="nm_brg" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Gambar Barang</label>
			<div class="col-sm-9">
				<img style="width: 100%;" id="pict">
				<input type="hidden" name="gambar" class="form-control" id="gmbr">
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
        	Accepting
        </button>
      </div>
	</form>
    </div>
  </div>
</div>
<!-- CLOSE MODAL -->

<!-- MY SCRIPT -->
<script>
	$(document).on("click", "#dtl-lelang", function(){
		var idlelang = $(this).data('id');
		var nama = $(this).data('nama');
		var divisi = $(this).data('divisi');
		var nmbrg = $(this).data('nmbrg');
		var gambar = $(this).data('gambar');

		$("#modal-data #id_lelang").val(idlelang);
		$("#modal-data #nama").val(nama);
		$("#modal-data #divisi").val(divisi);
		$("#modal-data #nmbrg").val(nmbrg);
		$("#modal-data #gmbr").val(gambar);
		$("#modal-data #pict").attr("src","<?php echo base_url().'asset/images/lelang/' ?>"+gambar);
	});
</script>