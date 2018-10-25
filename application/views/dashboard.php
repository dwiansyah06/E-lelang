<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 grid-margin stretch-card">
  <div class="card card-statistics">
    <div class="card-body">
      <div class="clearfix">
        <div class="float-left">
          <i class="mdi mdi-account-circle text-danger icon-lg"></i>
        </div>
        <div class="float-right">
          <p class="mb-0 text-right">Total User</p>
          <div class="fluid-container">
            <h3 class="font-weight-medium text-right mb-0"><?php echo $total_user ?></h3>
          </div>
        </div>
      </div>
      <p class="text-muted mt-3 mb-0">
        <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
      </p>
    </div>
  </div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 grid-margin stretch-card">
  <div class="card card-statistics">
    <div class="card-body">
      <div class="clearfix">
        <div class="float-left">
          <i class="mdi mdi-cube text-warning icon-lg"></i>
        </div>
        <div class="float-right">
          <p class="mb-0 text-right">Total Barang Lelang</p>
          <div class="fluid-container">
            <h3 class="font-weight-medium text-right mb-0"><?php echo $total_brgL ?></h3>
          </div>
        </div>
      </div>
      <p class="text-muted mt-3 mb-0">
        <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
      </p>
    </div>
  </div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 grid-margin stretch-card">
  <div class="card card-statistics">
    <div class="card-body">
      <div class="clearfix">
        <div class="float-left">
          <i class="mdi mdi-poll-box text-success icon-lg"></i>
        </div>
        <div class="float-right">
          <p class="mb-0 text-right">Lelang Masuk</p>
          <div class="fluid-container">
            <h3 class="font-weight-medium text-right mb-0"><?php echo $tot_hslLelang ?></h3>
          </div>
        </div>
      </div>
      <p class="text-muted mt-3 mb-0">
        <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
      </p>
    </div>
  </div>
</div>

<?php if($username == 'pengadaan'){ ?>
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title mb-4"><span class="mdi mdi-account-check text-success"></span> Penawar Tertinggi </h5>
      <div class="fluid-container">
		<?php foreach($tertinggi as $value): ?>
        <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
          <div class="ticket-details col-md-10">
            <div class="d-flex">
              <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap"><?php echo $value->nama_penawar ?> :</p>
              <p class="text-primary mr-1 mb-0">[<?php echo $value->nama_brg ?>]</p>
              <p class="mb-0 ellipsis">Menjadi yang tertinggi dengan penawaran sebesar Rp <?php echo number_format($value->terbesar, 0, ",", ".") ?></p>
            </div>
            <p class="text-gray ellipsis mb-2">
            	Barang di lelang oleh <?php echo $value->nama_pelelang ?> 
            	dari divisi <?php echo $value->divisi_pelelang ?> 
            	dengan harga Rp <?php echo number_format($value->harga_lelang, 0, ",", ".") ?>
            </p>
          </div>
          <div class="ticket-actions col-md-2">
              <a href="#" class="btn btn-success btn-sm"><span class="mdi mdi-printer"></span> Print</a>
          </div>
        </div>
		<?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>