<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
  <!-- My app Logo -->
</div>
<div class="navbar-menu-wrapper d-flex align-items-center">
  <ul class="navbar-nav navbar-nav-right">
    <li class="nav-item dropdown d-none d-xl-inline-block">
      <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        <?php foreach($user as $value): ?>
        <span class="profile-text">Hello, <?php echo $value->username ?> !</span>
        <?php endforeach; ?>
        <img class="img-xs rounded-circle" src="<?php echo base_url().'asset/images/faces/face1.jpg' ?>" alt="Profile image">
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
        <a class="dropdown-item mt-2">
          Manage Accounts
        </a>
        <a class="dropdown-item">
          Change Password
        </a>
        <a class="dropdown-item">
          Check Inbox
        </a>
        <a class="dropdown-item" href="<?php echo base_url().'dashboard/logout' ?>">
          Sign Out
        </a>
      </div>
    </li>
  </ul>
  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="icon-menu"></span>
  </button>
</div>