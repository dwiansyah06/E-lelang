<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
	    <div class="card-body">
	    	<div class="table-responsive">
		    	<table class="table table-hover">
		    		<thead>
		    			<tr>
		    				<th>No.</th>
			    			<th>Nama Pelelang</th>
			    			<th>Divisi Pelelang</th>
			    			<th>Nama Penawar</th>
			    			<th>Divisi Penawar</th>
			    			<th>Nama Barang</th>
			    			<th class="text-center">Harga Lelang</th>
			    			<th class="text-center">Harga Tawaran</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php
		    				$i = 1; 
		    				foreach($content as $value): 
		    			?>
		    				<tr>
		    					<td><?php echo $i++ ?></td>
		    					<td><?php echo $value->nama_pelelang ?></td>
		    					<td><?php echo $value->divisi_pelelang ?></td>
		    					<td><?php echo $value->nama_penawar ?></td>
		    					<td><?php echo $value->divisi_penawar ?></td>
		    					<td><?php echo $value->nama_brg ?></td>
		    					<td class="text-center">Rp <?php echo number_format($value->harga_lelang, 0, ",", ".") ?></td>
		    					<td class="text-center">Rp <?php echo number_format($value->harga_tawaran, 0, ",", ".") ?></td>
		    				</tr>
		    			<?php endforeach; ?>
		    		</tbody>
		    	</table>
		    </div>
	    </div>
	</div>
</div>