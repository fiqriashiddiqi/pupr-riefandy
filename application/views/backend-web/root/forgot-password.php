<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: HC31 - CODEBASE
    Version: 1.0.0
    Author: Heatcliffs31 - achmad.azs.dz@gmail.com
    Author URL: https://www.heatcliffs31.net
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Author: Heatcliffs31 - achmad.azs.dz@gmail.com">
  <meta name="keywords" content="heatcliffs31">

  <title><?php echo $this->config->item('site_title') ?></title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo base_url() ?>uploads/base-img/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>uploads/base-img/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo base_url() ?>uploads/base-img/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->

  <!-- CORE CSS-->
  
  <link href="<?php echo base_url();?>assets/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo base_url();?>assets/materialize/css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets/materialize/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url();?>assets/materialize/js/plugins/sweetalert/dist/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets/materialize/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>
<body class="darkbrown">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <div id="login-page" class="row">
    <div id="default-validation" class="col s12 z-depth-4 card-panel">    
      <form class="login-form" action="<?php echo base_url(); ?>Auth/send" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url() ?>uploads/base-img/logosa.png" alt="" class="responsive-img">
            <!-- <p class="center login-form-text" style="font-size: 14px;font-weight: bold;font-family: serif;color: #482302;">Sanders</p> -->
          </div>
        </div>

        <?php if ($this->session->flashdata('alert_success')) { ?>
        <div id="card-alert" class="card green">
          <div class="card-content white-text">
            <p><?php echo $this->session->flashdata('alert_success'); ?></p>
          </div>
          <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <?php } ?>

        <?php if ($this->session->flashdata('alert_error')) { ?>
        <div id="card-alert" class="card red">
          <div class="card-content white-text">
            <p><?php echo $this->session->flashdata('alert_error'); ?></p>
          </div>
          <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <?php } ?>

        <div class="row">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="user_email" name="users_email" type="email" class="validate" required="true">
            <label for="user_email" data-error="Format E-mail Anda Salah">E-mail</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12" style="background-color: #ffd100;">Send E-mail</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
              <p class="margin center medium-small"><a href="<?php echo base_url() ?>/auth" style="color: #482302;">Back To Sign In.</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/materialize/js/custom-script.js"></script>

</body>

</html>