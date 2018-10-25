<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $judul ?></title>
  <link rel="stylesheet" href="<?= base_url().'asset/vendors/bootstrap/css/bootstrap.min.css'?>" >
  <link rel="stylesheet" href="<?= base_url().'asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css'?>" >
  <link rel="stylesheet" href="<?= base_url().'asset/vendors/css/vendor.bundle.base.css'?>" >
  <link rel="stylesheet" href="<?= base_url().'asset/vendors/css/vendor.bundle.addons.css'?>" >
  <link rel="stylesheet" href="<?= base_url().'asset/css/style.css'?>" >
  <link rel="shortcut icon" href="<?= base_url().'asset/images/favicon.png'?>" />
  <script src="<?= base_url().'asset/js/jquery-3.3.1.min.js'?>"></script>
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="border-bottom: none;">
      <?php echo $_header; ?>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <?php echo $_sidebar ?>

        <div class="main-panel">
          <div class="content-wrapper">
            <?php echo $_content ?>
          </div>
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center float-none float-sm-right d-block mt-1 mt-sm-0">Copyright © 2018 Bootstrapdash. All rights reserved.</span>
            </div>
          </footer>
        </div>  
    </div>
  </div>
  <script type="text/javascript">
    var BaseUrl = "<?php echo base_url(); ?>";
  </script>
  <script src="<?= base_url().'asset/js/jquery-ui.min.js'?>"></script>
  <script src="<?= base_url().'asset/vendors/bootstrap/js/bootstrap.min.js' ?>"></script>
  <script src="<?= base_url().'asset/js/misc.js' ?>"></script>
  <script src="<?= base_url().'asset/js/ajax.js' ?>"></script>
</body>
</html>