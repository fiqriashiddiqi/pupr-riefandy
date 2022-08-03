<!DOCTYPE html>
<html lang="en" style="background-image:url(<?php echo base_url() ?>uploads/base-img/bg.jpg);background-position: center;
  background-repeat: no-repeat;
  background-size: cover;height: 100%;">

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
  <meta name="description" content="Author: MFAshiddiqi - fiqriashiddiqi@gmail.com">
  <meta name="keywords" content="MFAshiddiqi">

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
<body class="" style="background-color:transparent!important">


  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <div id="" class="row">
    <div id="default-validation" class="col s6 z-depth-4 card-panel" style="opacity:80%;border: 2px solid blue; border-radius: 27px;margin:20px">    
      <form class="login-form" action="" method="post" enctype="multipart/form-data" style="width:100%">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url() ?>uploads/base-img/pic.png" alt="" style="width: 70%;">
            
          </div>
        </div>

        

      </form>
      
    </div>
    <div id="default-validation" class="col s4 z-depth-4 card-panel" style="opacity:80%;border: 2px solid blue; border-radius: 27px;margin:20px">    
      <form class="login-form" action="" method="post" enctype="multipart/form-data" style="width:100%">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url() ?>uploads/base-img/logo-pu.png" alt="" style="width: 47%;">
            <p class="center login-form-text" style="font-size: 12px;font-weight: bold;color: blue;">SELAMAT DATANG</p>
              <p class="center login-form-text" style="font-size: 12px;font-weight: bold;color: black;">SISTEM INFORMASI WILAYAH III</p>
          </div>
        </div>

        <div class="row" style="margin-bottom:0px">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="users_username" type="text" class="validate" minlength="4" required="true">
            <label for="username" data-error="Minimal 4 karakter">Nama Lengkap</label>
          </div>
        </div>
        <div class="row" style="margin-bottom:0px">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="username" name="users_username" type="email" class="validate" minlength="4" required="true">
            <label for="username" data-error="Format Email Salah">Email</label>
          </div>
        </div>
        <div class="row" style="margin-bottom:0px">
          <div class="input-field col s12">
            <i class="mdi-social-location-city prefix"></i>
            <input id="username" name="users_username" type="text" class="validate" minlength="4" required="true">
            <label for="username" data-error="Minimal 4 karakter">Asal Instansi</label>
          </div>
        </div>
        <div class="row" style="margin-bottom:0px">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="username" name="users_username" type="password" class="validate" minlength="4" required="true">
            <label for="username" data-error="Minimal 8 karakter">Kata Sandi</label>
          </div>
        </div>
        <div class="row" style="margin-bottom:0px">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="users_password" type="password" class="validate" minlength="8" required="true">
            <label for="password" data-error="Minimal 8 karakter">Kata Sandi</label>
          </div>
        </div>
        <div class="row" style="margin-left:33%">
          
          <div class="input-field col">
            <a href="<?php echo site_url('auth/') ?>" class="btn btn-primary" style="background-color: #0000ff;">Sign Up</a>
            <!-- <button type="submit" class="btn waves-effect waves-light col s12" style="background-color: blue;">Sign Up</button> -->
          </div>
        </div>
        <!-- <div class="row">
          <div class="input-field col s12 m12 l12">
          <p class="margin center medium-small"><a href="<?php echo site_url('auth/forgot_password') ?>" style="color: #482302;">Forgot Password ?</a></p>
          </div>    
        </div> -->

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
    <script type="text/javascript" src="<?php echo base_url();?>assets/LTE/plugins/bootbox.min.js"></script>

</body>

</html>