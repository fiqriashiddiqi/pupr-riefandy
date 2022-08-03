<?php date_default_timezone_set("Asia/Jakarta"); ?>
  <header class="main-header">
    <a href="#" class="logo" style="background-color:#adadc7">
      <!-- <span class="logo-mini">Test</span> -->
      <img src="<?php echo base_url();?>uploads/base-img/logo-pu.png" class="logo-mini" style="width:300%;" alt="User Image">
      <img src="<?php echo base_url();?>uploads/base-img/logopupr2.png" style="width: 100%; background-color:#adadc7" class="logo" alt="User Image">
      <!-- <span class="logo-lg">KEMENTERIAN </span> -->
    </a>
    <nav class="navbar navbar-static-top">
      <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> -->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" id="zoomapps"><i class="fa fa-expand"></i></a>
            
          </li>
          <li class="user">
          <p class="" style="margin-top:16px;color:white;">Hai, <?php echo $users_name; ?></p>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>uploads/base-img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url();?>uploads/base-img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $users_name; ?>
                  <small><?php echo $groups_name; ?></small>
                </p>
              </li>
              <li class="user-footer">
                <?php
                $this->load->model('auth_model');

                $users_username = $this->session->userdata('users_username');
                $users_password = $this->session->userdata('users_password');

                $check_access = $this->auth_model->get_access($users_username, $users_password);
                ?>
                <div class="row text-center">
                  <a href="<?php echo site_url('Admin/B_users/profile') ?>/<?php echo $check_access[0]->id_backend_users; ?>/profile" class="btn btn-default btn-flat"><i class="fa fa-book"></i> Profile</a>
                  <a href="<?php echo site_url('Auth/signout') ?>" class="btn btn-default btn-flat"><i class="fa fa-book"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>