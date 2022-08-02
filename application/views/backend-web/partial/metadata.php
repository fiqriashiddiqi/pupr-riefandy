<!DOCTYPE html>
<html>

<!--================================================================================
   Ganesh Lab Solution
   MFAshiddiqi x MHNCahyo
   version 1.0.0
   @2020
================================================================================ -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Author: CV. Ganesh Lab Solution">
  <meta name="keywords" content="GaneshLab">
  <title><?php echo $this->config->item('site_title') ?></title>

  <!-- Favicons-->
  <link rel='shortcut icon' href='<?php echo base_url();?>uploads/base-img/favicon/favicon-32x32.png' type='image/x-icon'>
  <link rel="icon" href="<?php echo base_url();?>uploads/base-img/favicon/favicon-32x32.png" type='image/x-icon' sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>uploads/base-img/favicon/apple-touch-icon-152x152.png">
  <!-- Favicons -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo base_url();?>uploads/base-img/favicon/mstile-144x144.png">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/dist/css/skins/_all-skins.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/iCheck/all.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/select2/select2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/datatables/dataTables.bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/bootstrap-toggle/css/bootstrap-toggle.css" >

  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" >

  

  <style type="text/css">
  #zoomImage { cursor:zoom-in; }
  #zoomImage:-webkit-full-screen { cursor:zoom-out; }
  #zoomImage:-moz-full-screen { cursor:zoom-out; }
  #zoomImage:-ms-fullscreen { cursor:zoom-out; }
  #zoomImage:fullscreen { cursor:zoom-out; }
 
  .btnwdt {
    height: 30px;
    width: 50px;
    padding: 6px;
    margin: 1px;
  }

  .btnbig {
    height: 30px;
    width: 100px;
    padding: 6px;
    margin: 1px;
  }

  .btnbig2 {
    height: 30px;
    width: 130px;
    padding: 6px;
    margin: 1px;
  }

  /* The radio_custom */
  .radio_custom {
      position: relative;
      padding-left: 32px;
      margin-bottom: 12px;
      margin-right: 10px;
      cursor: pointer;
      font-size: 14px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  /* Hide the browser's default radio button */
  .radio_custom input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
  }

  /* Create a custom radio button */
  .mark_custom {
      position: absolute;
      top: 0;
      left: 0;
      height: 24px;
      width: 24px;
      background-color: #eee;
      border-radius: 30%;
  }

  /* On mouse-over, add a grey background color */
  .radio_custom:hover input ~ .mark_custom {
      background-color: #ccc;
  }

  /* When the radio button is checked, add a blue background */
  .radio_custom input:checked ~ .mark_custom {
      background-color: #ffd100;
  }

  /* Create the indicator (the dot/circle - hidden when not checked) */
  .mark_custom:after {
      content: "";
      position: absolute;
      display: none;
  }

  /* Show the indicator (dot/circle) when checked */
  .radio_custom input:checked ~ .mark_custom:after {
      display: block;
  }

  /* Style the indicator (dot/circle) */
  .radio_custom .mark_custom:after {
    top: 8px;
    left: 8px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
  }
  </style>

  <style>
  /* The check_custom */
  .check_custom {
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      margin-right: 10px;
      cursor: pointer;
      font-size: 15px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  /* Hide the browser's default checkbox */
  .check_custom input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
  }

  /* Create a custom checkbox */
  .check_mark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #eee;
  }

  /* On mouse-over, add a grey background color */
  .check_custom:hover input ~ .check_mark {
      background-color: #ccc;
  }

  /* When the checkbox is checked, add a blue background */
  .check_custom input:checked ~ .check_mark {
      background-color: #ffd100;
  }

  /* Create the check_mark/indicator (hidden when not checked) */
  .check_mark:after {
      content: "";
      position: absolute;
      display: none;
      border-radius: 10%;
  }

  /* Show the check_mark when checked */
  .check_custom input:checked ~ .check_mark:after {
      display: block;
  }

  /* Style the check_mark/indicator */
  .check_custom .check_mark:after {
      left: 10px;
      top: 7px;
      width: 7px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
  }

  #double-scroll{
    width: 100%;
  }

  </style>

</head>
<body class="hold-transition skin-yellow sidebar-mini fixed">
<div class="wrapper">