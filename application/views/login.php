<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Log In</title>
  <link rel="stylesheet" href="<?= base_url().'asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css'?>" >
  <link rel="stylesheet" href="<?= base_url().'asset/vendors/css/vendor.bundle.base.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'asset/vendors/css/vendor.bundle.addons.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'asset/css/style.css' ?>">
  <link rel="shortcut icon" href="<?= base_url().'asset/images/favicon.png' ?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <?php 
                  echo form_open('login/LoginProcess'); 
                  if($this->session->flashdata('error')){ ?>
                  <center><label style="font-size: 12px;margin-bottom: 30px"><?php echo $this->session->flashdata('error'); ?></label></center>
              <?php } ?>
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary submit-btn btn-block" name="login">
                </div>
              <?php echo form_close(); ?>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url().'asset/vendors/js/vendor.bundle.base.js' ?>"></script>
  <script src="<?= base_url().'asset/vendors/js/vendor.bundle.addons.js' ?>"></script>
  <script src="<?= base_url().'asset/js/off-canvas.js' ?>"></script>
  <script src="<?= base_url().'asset/js/misc.js' ?>"></script>
</body>

</html>