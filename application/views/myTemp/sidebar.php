<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="<?php echo base_url().'asset/images/faces/face1.jpg' ?>" alt="profile image">
          </div>
          <div class="text-wrapper">
            <?php foreach($user as $value): ?>
            <p class="profile-name"><?php echo $value->username ?></p>
            <div>
              <small class="designation text-muted"><?php echo $value->divisi ?></small>
            <?php endforeach; ?>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'dashboard' ?>">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <!-- Karyawan -->
    <?php if($this->session->userdata('level') == 'karyawan'){ ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'karyawan/permintaan_lelang' ?>">
        <i class="menu-icon mdi mdi-file"></i>
        <span class="menu-title">Permintaan Lelang</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'karyawan/voting' ?>">
        <i class="menu-icon mdi mdi-voice"></i>
        <span class="menu-title">Voting Lelang <span class="badge badge-primary ml-1">New</span></span>
      </a>
    </li>
    <!-- Manager -->
    <?php } elseif($this->session->userdata('level') == 'manager'){ ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'manager/listLelang' ?>">
        <i class="menu-icon mdi mdi-file-document-box"></i>
        <span class="menu-title">List Permintaan Lelang</span>
      </a>
    </li>
    <!-- Pengadaan -->
    <?php } else { ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'pengadaan/permintaanLelang' ?>">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Permintaan Lelang</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'pengadaan/hasil_lelang' ?>">
        <i class="menu-icon mdi mdi-file-document-box"></i>
        <span class="menu-title">Hasil Lelang</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>