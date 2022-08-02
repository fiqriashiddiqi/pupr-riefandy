<?php 
    $this->load->model("crud_model");
    $this->load->model("Front_Fintech/manually_model");
    $this->load->model("Front_Fintech/loan_model");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Personal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/bootstrap/css/bootstrap.min.css">
  <link defer href="<?php echo base_url() ?>assets/Sanders/styles/main.css" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>
<body style="background-color:whitesmoke;">
<header class="main-nav">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-header navbar-top-1">
                    <div class="logo" style="position: relative;">
                            <div class="logobcaheader">
                                <img class="img-responsive img-logo" src="<?php echo base_url() ?>uploads/base-img/img_home/logoSanders.png" style="height:50px;width:160px;margin-top:-5px">
                            </div>
                    </div>
              </nav>
          </div>
      </div>
</header>
    <div class="content" style="margin: 0 14px">
     
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <br>
                <?php
                  // $get_code = $check_data[0]->register_code;
                  $term_id =  $data_term[0]->term_id;
                  // $where = array('register_code'=>$get_code);
                  $data_bio = $this->personal_info_model->get_personal_info_lender($get_code);
                ?>
                  <p class="MsoNormal" align="center" style="margin-right:-13.95pt;text-align:center;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PERJANJIAN UNTUK MEMBERIKAN PINJAMAN<o:p></o:p></span></b></p>
                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>
                  <p class="MsoNormal" align="center" style="margin-right:-13.95pt;text-align:center;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Nomor: <?php echo $term_id;?><o:p></o:p></span></b></p>
                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>
                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>
                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>
                  <p class="MsoNormal" style="line-height:13.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;margin-left:17.0pt;margin-bottom:.0001pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Perjanjian Untuk Memberikan Pinjaman ini dibuat dan ditandatangani pada tanggal <?php echo date('d-m-Y', strtotime($data_term[0]->term_date)) ;?> (“<b style="mso-bidi-font-weight:normal">Perjanjian Keanggotaan</b>”) oleh dan antara:<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-30.2pt;line-height:118%;mso-list:l0 level1 lfo1;tab-stops:47.0pt">
                  <!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span>
                      </span>
                      <!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">PT SATUSTOP SOLUSI</span></b><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, suatu
                  perseroan terbatas yang didirikan berdasarkan hukum<b style="mso-bidi-font-weight:
                  normal"> </b>Negara Republik Indonesia, yang memiliki domisili di <?php echo $data_contacts[0]->contact_us_headquarter; ?>, Indonesia, dalam
                  hal ini diwakili oleh <?php echo $data_direk[0]->management_menu_person;?> selaku <?php echo $data_direk[0]->management_menu_position;?> PT Satu Stop Solusi
                  (“<b style="mso-bidi-font-weight:normal">SatuStop</b>”); dan<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-indent:-30.2pt;line-height:118%;
                  mso-list:l0 level1 lfo1;tab-stops:47.0pt">
                      <!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span>
                      </span>
                      <!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><?php echo $data_bio[0]->bio_fullname;?></span></b><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, <?php if ($data_bio[0]->bio_cityzenship == "WNI") {
                    echo "warga negara Indonesia, bertempat tinggal di ".$data_bio[0]->bio_address. ", pemegang Kartu Tanda Penduduk No. ".$data_bio[0]->bio_nik;
                  } else {
                    echo "warga negara Indonesia, bertempat tinggal di ".$data_bio[0]->bio_address. ", dengan No. Passport ".$data_bio[0]->bio_passport;
                  } ?> (“<b style="mso-bidi-font-weight:
                  normal">Pemberi Pinjaman</b>”).<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:4.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Selanjutnya apabila sendiri-sendiri disebut sebagai “<b style="mso-bidi-font-weight:normal">Pihak</b>” dan apabila bersama-sama disebut
                  sebagai “ <b style="mso-bidi-font-weight:normal">Para Pihak</b>”.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:17.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">BAHWA</span></b><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-32.85pt;
                  line-height:116%;mso-list:l1 level1 lfo2;tab-stops:47.0pt">
                      <!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">A.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span>
                      </span>
                      <!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">SatuStop memiliki bidang usaha
                  yang bergerak di bidang portal web melalui media internet dan akan bertindak
                  sebagai pihak perantara dalam mempertemukan Pemberi Pinjaman dan Penerima
                  Pinjaman (sebagaimana didefinisikan di bawah ini);<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-indent:-32.2pt;line-height:114%;
                  mso-list:l1 level1 lfo2;tab-stops:47.0pt">
                      <!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">B.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span>
                      </span>
                      <!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman merupakan pihak
                  yang bermaksud menempatkan dananya untuk dapat dipinjamkan secara langsung
                  kepada Penerima Pinjaman melalui Situs (sebagaimana didefinisikan di bawah
                  ini);<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;text-indent:
                  -32.2pt;line-height:117%;mso-list:l1 level1 lfo2;tab-stops:47.0pt">
                      <!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">C.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span>
                      </span>
                      <!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman telah sepakat
                  untuk menempatkan dananya dengan menggunakan sistem Situs SatuStop yang mana
                  bertindak selaku pengatur transaksi pemberian Fasilitas Pinjaman (sebagaimana
                  didefinisikan di bawah ini) oleh Pemberi Pinjaman kepada Penerima Pinjaman
                  dengan ketentuan-ketentuan dan persyaratan-persyaratan yang diatur dalam
                  Perjanjian Keanggotaan ini.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.2pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><b style="mso-bidi-font-weight:
                  normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:
                  118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">OLEH KARENA ITU</span></b><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, Para
                  Pihak setuju untuk mengadakan Perjanjian Keanggotaan ini berdasarkan<b style="mso-bidi-font-weight:normal"> </b>syarat-syarat dan ketentuan-ketentuan
                  berikut:<o:p></o:p></span></p>
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><br></span></p>
                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt">
                      <!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span>
                      <!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">DEFINISI
                  DAN INTERPRETASI</span></b><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.45pt;line-height:
                  114%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.1</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Kecuali secara tegas dinyatakan lain, semua istilah yang didefinisikan
                  dalam Perjanjian Keanggotaan ini mempunyai pengertian sebagai berikut:<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Perjanjian Program Utang</b>”
                  atau “<b>DPA”</b> berarti perjanjian antara
                  SatuStop selaku koordinator program dan agen jaminan dan Penerima Pinjaman
                  sehubungan dengan pembiayaan piutang Penerima Pinjaman melalui Situs;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Fasilitas Pinjaman</b>"
                  berarti fasilitas keuangan yang disediakan oleh Pemberi Pinjaman kepada
                  Penerima Pinjaman berdasarkan syarat serta ketentuan yang termuat dalam
                  Perjanjian Pinjaman yang bentuk dan isinya sesuai dengan format dalam lampiran
                  I untuk pinjaman perorangan dan lampiran II untuk pinjaman berdasarkan DPA
                  Perjanjian Keanggotaan ini;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Hari Kerja</b>” adalah hari,
                  selain hari Sabtu, Minggu dan hari libur resmi nasional, dimana bank buka untuk
                  melakukan kegiatan usahanya sesuai dengan ketentuan Bank Indonesia;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Ketentuan-ketentuan Pinjaman</b>”
                  adalah ketentuan-ketentuan yang disetujui dari permohonan pinjaman yang telah
                  diajukan termasuk informasi sehubungan dengan, antara lain,<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:.5pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:119%;mso-list:l1 level1 lfo2;tab-stops:94.55pt">
                      <!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:119%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(i)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span>
                      <!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:119%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">pagu maksimum pinjaman (ii)
                  jangka waktu Fasilitas Pinjaman (iii) suku bunga (iv) denda keterlambatan dan
                  (v) kesediaan Penerima Pinjaman untuk menerima Fasilitas Pinjaman apabila dana
                  yang terkumpul selama masa penawaran sedikitnya 60% dari nilai Fasilitas
                  Pinjaman.<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="line-height:17.5pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Penerima Pinjaman</b>” berarti
                  pihak yang melakukan registrasi di Situs guna memperoleh pinjaman dari Pemberi
                  Pinjaman atau pemberi pinjaman lainnya melalui Situs;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Perjanjian Pinjaman</b>”
                  perjanjian pinjaman yang dibuat dan ditandatangani oleh Pemberi Pinjaman atau
                  SatuStop selaku kuasanya dengan Penerima Pinjaman yang telah setuju untuk
                  menerima Fasilitas Pinjaman melalui SatuStop, sebagaimana dapat diubah dari
                  waktu ke waktu termasuk lampiran-lampiran dan tambahannya;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Rekening Pemberi Pinjaman</b>”
                  berarti rekening bank yang dibuka oleh SatuStop untuk kepentingan Pemberi
                  Pinjaman dalam penyediaan Fasilitas Pinjaman;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">“<b>Situs</b>” berarti situs [www.sanders.co.id]
                  yang dikelola oleh SatuStop;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:1.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b>Tingkat Pengembalian Modal</b>”
                  berarti nilai yang diperoleh oleh Pemberi Pinjaman atas dana yang digunakan
                  sebagai Fasilitas Pinjaman kepada Penerima Pinjaman.<o:p></o:p></span></p>
                  <p class="MsoNormal" style="line-height:12.5pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p>
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">
                  <span style="font-size: 12pt;">1.2</span><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12pt;">Judul-judul yang digunakan dalam Perjanjian Keanggotaan ini hanya untuk kemudahan dan tidak
                  mempunyai pengaruh apapun terhadap konstruksi Perjanjian Keanggotaan serta tidak dapat digunakan untuk menafsirkan ketentuan pasal yang bersangkutan.</span><br></span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="font-size: 12pt;"><br></span></span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Kecuali ditentukan lain, referensi pada ketentuan peraturan
                  perundang-undangan adalah ketentuan peraturan perundang-undangan yang
                  bersangkutan beserta perubahannya dari waktu ke waktu.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.4</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Kecuali disyaratkan lain, acuan terhadap suatu pasal, ayat atau lampiran
                  adalah acuan terhadap pasal, ayat atau lampiran dalam Perjanjian Keanggotaan
                  ini, dan acuan terhadap Perjanjian Keanggotaan ini adalah acuan terhadap
                  Perjanjian Keanggotaan ini beserta lampirannya.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">RUANG
                  LINGKUP DAN JANGKA WAKTU PERJANJIAN KEANGGOTAAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">2.1SatuStop menyediakan Situs untuk mempertemukan
                  Pemberi Pinjaman dan Penerima Pinjaman, yang mana SatuStop akan bertindak
                  sebagai pengatur transaksi pemberian Fasilitas Pinjaman oleh Pemberi Pinjaman
                  kepada Penerima Pinjaman berdasarkan Perjanjian Pinjaman.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">2.2Pemberi Pinjaman wajib melakukan registrasi di
                  Situs untuk dapat menggunakan jasa yang disediakan oleh SatuStop. Pemberi
                  Pinjaman dalam melakukan registrasi wajib memenuhi persyaratan dan melengkapi
                  dokumen yang diatur dalam Situs. Pada saat Pemberi Pinjaman telah terdaftar
                  sebagai pengguna Situs, SatuStop akan menyediakan Rekening Pemberi Pinjaman
                  untuk digunakan sebagai fasilitas dalam bertransaksi di Situs.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">2.3Pemberi Pinjaman akan menempatkan sejumlah dana
                  ke Rekening Pemberi Pinjaman di Situs SatuStop dalam rangka pemberian
                  Fasilitas Pinjaman bagi Penerima Pinjaman. Dalam hal Pemberi Pinjaman sedang
                  melakukan partisipasi pemberian pinjaman di Situs dalam rangka pemberian
                  Fasilitas Pinjaman kepada Penerima Pinjaman, Pemberi Pinjaman hanya dapat
                  menarik kembali dana yang tersedia di Rekening Pemberi Pinjaman dikurangi
                  dengan seluruh nilai partisipasi pemberian pinjaman yang sedang diikuti.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">2.4Pemberi Pinjaman akan melakukan pemilihan
                  sendiri atas partisipasi pemberian pinjaman, melalui Situs, terhadap Penerima
                  Pinjaman yang akan diberikan Fasilitas Pinjaman dari dana yang ditempatkan oleh
                  Pemberi Pinjaman dengan menggunakan sistem penawaran yang dibuat oleh
                  SatuStop.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">2.5Perjanjian Keanggotaan ini akan berlaku
                  sepanjang Pemberi Pinjaman menjadi anggota Situs, kecuali apabila hal-hal
                  berikut ini terjadi:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:116%;mso-list:l0 level2 lfo1;tab-stops:95.85pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(a)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">salah satu Pihak mengakhiri
                  Perjanjian Keanggotaan ini dengan memberikan pemberitahuan terlebih dahulu
                  kepada Pihak lainnya dalam waktu tiga puluh (30) hari kalender sebelum
                  efektifnya pengakhiran tersebut;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:96.4pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(b)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">salah satu Pihak melakukan
                  wanprestasi atas Perjanjian Keanggotaan ini dan/atau Perjanjian Pinjaman dimana
                  Para Pihak yang melakukan wanprestasi tidak dapat menghilangkan kejadian
                  wanprestasi tersebut dalam waktu 10 (sepuluh) hari setelah diketahuinya
                  kejadian wanprestasi tersebut; atau<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">
                  <span style="font-size: 12pt;">salah satu Pihak dinyatakan pailit oleh suatu keputusan pengadilan yang bersifat
                  final.</span><span style="font-size: 12pt;"><br></span></span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="font-size: 12pt;"><br></span></span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">2.6</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Pengakhiran Perjanjian Keanggotaan ini tidak menghilangkan hak dan
                  kewajiban Para Pihak yang timbul dari Perjanjian Keanggotaan ini sebelum
                  berlakunya pengakhiran secara efektif.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">2.7</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Para Pihak dengan ini sepakat untuk mengesampingkan keberlakuan dari
                  Pasal 1266 Kitab Undang-undang Hukum Perdata Indonesia sehingga persetujuan
                  dari Pengadilan Indonesia tidak diperlukan untuk mengakhiri Perjanjian Keanggotaan
                  ini.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PEMBERIAN
                  KUASA KEPADA SatuStop</span></b><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">3.1Pemberi Pinjaman dengan ini memberikan kuasa
                  yang tidak dapat ditarik kembali kepada SatuStop dengan hak substitusi untuk:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:100.5pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(a)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">menandatangani Perjanjian
                  Pinjaman, dokumen jaminan dan/atau perjanjian jaminan bersama dan setiap
                  perubahannya dari waktu ke waktu, untuk dan atas nama Pemberi Pinjaman dalam
                  rangka setiap pemberian Fasilitas Pinjaman kepada Penerima Pinjaman yang
                  dipilih oleh Pemberi Pinjaman melalui Situs; dan<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:116%;mso-list:l0 level2 lfo1;tab-stops:99.4pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(b)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">mengatur transaksi pemberian
                  Fasilitas Pinjaman, yang menggunakan dana yang telah ditempatkan oleh Pemberi
                  Pinjaman ke Rekening Pemberi Pinjaman, oleh Pemberi Pinjaman kepada Penerima
                  Pinjaman dalam setiap Perjanjian Pinjaman.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">3.2</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Jika Perjanjian Keanggotaan ini, Perjanjian Pinjaman, DPA, dokumen
                  jaminan dan/atau perjanjian jaminan bersama tidak mengatur atau tidak cukup
                  mengatur mengenai suatu tindakan, maka SatuStop hanya berwenang untuk
                  melakukan tindakan berdasarkan instruksi tertulis dari Pemberi Pinjaman.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">3.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Pembayaran lunas suatu Perjanjian Pinjaman yang dipilih oleh Pemberi
                  Pinjaman akan dibuktikan dari surat pernyataan yang diterbitkan oleh SatuStop
                  yang menyatakan bahwa semua jumlah uang yang terhutang dan wajib dibayar oleh
                  Penerima Pinjaman kepada Pemberi Pinjaman telah lunas dan dibayar dengan
                  semestinya.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l1 level1 lfo2;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;">4.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PERNYATAAN
                  DAN JAMINAN SERTA PENGGANTI KERUGIAN</span></b><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">4.1 Pernyataan dan jaminan serta pengganti kerugian
                  SatuStop berdasarkan Perjanjian Keanggotaan ini adalah sebagai berikut:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly">
                  <span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;
                  </span></span></span><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">
                  <span style="font-size: 12pt;">SatuStop
                  tidak mempunyai kewajiban lain kepada siapapun berdasarkan Perjanjian
                  Keanggotaan ini, Perjanjian Pinjaman, dokumen jaminan, perjanjian jaminan
                  bersama dan/atau DPA, kecuali kewajiban yang secara tegas ditetapkan dalam
                  Perjanjian Keanggotaan ini, Perjanjian Pinjaman, dokumen jaminan, perjanjian jaminan
                  bersama dan/atau DPA;</span><span style="font-size: 12pt;"><br></span></span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="font-size: 12pt;"><br></span></span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:6.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:117%;mso-list:l0 level1 lfo1;tab-stops:97.9pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">SatuStop menyatakan dan
                  menegaskan kepada Pemberi Pinjaman bahwa SatuStop hanya bertindak sebagai
                  perantara Pemberi Pinjaman dalam pemberian Fasilitas Pinjaman kepada Penerima
                  Pinjaman dan SatuStop tidak menjamin dana yang ditempatkan oleh Pemberi
                  Pinjaman akan tersalurkan kepada Penerima Pinjaman. Untuk menghindari
                  keragu-raguan dana tersebut baru akan dapat disalurkan kepada Penerima Pinjaman
                  apabila Penerima Pinjaman telah menandatangani Perjanjian Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:.25pt;line-height:
                  114%;mso-list:l0 level1 lfo1;tab-stops:100.3pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">SatuStop tidak berkewajiban
                  memeriksa atau menyelidiki terjadinya suatu peristiwa kelalaian sehubungan
                  dengan transaksi pemberian Fasilitas Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:117%;mso-list:l0 level1 lfo1;tab-stops:97.05pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">SatuStop tidak bertanggung jawab mengenai tindakan yang dilakukan atau
                  tidak dilakukan olehnya dalam mengatur pemberian pinjaman oleh Pemberi Pinjaman
                  kepada Penerima Pinjaman berdasarkan Perjanjian Pinjaman, kecuali jika terjadi
                  kesengajaan atau kelalaian dari SatuStop;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:117%;mso-list:l0 level1 lfo1;tab-stops:100.05pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">SatuStop tidak bertanggung jawab
                  mengenai kebenaran, ketepatan atau kelengkapan informasi yang diberikan oleh
                  Penerima Pinjaman kepada SatuStop pada waktu dan selama SatuStop mengatur
                  pemberian Fasilitas Pinjaman oleh Pemberi Pinjaman berdasarkan Perjanjian
                  Pinjaman, dokumen jaminan, perjanjian jaminan bersama dan/atau DPA;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:117%;mso-list:l0 level1 lfo1;tab-stops:96.35pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(f)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">SatuStop tidak bertanggung jawab
                  mengenai kebenaran atau ketepatan suatu pernyataan, jaminan atau ketentuan yang
                  termuat dalam Perjanjian Pinjaman, dokumen jaminan, perjanjian jaminan bersama
                  dan/atau DPA, atau mengenai segala sesuatu yang berhubungan dengan pembuatan,
                  berlakunya, keaslian, kekuatan mengikat atau pelaksanaan Perjanjian Pinjaman,
                  dokumen jaminan, perjanjian jaminan bersama dan/atau DPA, sepanjang telah
                  disepakati oleh Pemberi Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:117%;mso-list:l0 level1 lfo1;tab-stops:99.55pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(g)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Dalam membuat pengaturan mengenai
                  pemberian Fasilitas Pinjaman kepada Penerima Pinjaman, SatuStop berhak
                  mempercayai setiap informasi, pemberitahuan dan dokumen yang secara wajar
                  dianggapnya asli, benar atau ditandatangani, dibuat atau dikirim oleh pihak yang
                  berhak untuk itu serta berhak untuk bertindak sesuai dengan nasihat penasihat
                  hukum dan ahli lain yang dipilih oleh SatuStop mengenai segala sesuatu yang
                  berhubungan dengan negosiasi, persiapan, pembuatan dan penandatanganan
                  Perjanjian Pinjaman, DPA, Perjanjian Keanggotaan ini dan perjanjian untuk
                  memberikan pinjaman lain yang bertalian dengan Perjanjian Pinjaman dan
                  Perjanjian Keanggotaan ini dan SatuStop juga tidak bertanggung jawab kepada
                  setiap Pemberi Pinjaman atau Penerima Pinjaman mengenai setiap akibat yang
                  timbul dari atau karena kepercayaan tersebut di atas; dan<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.6pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:116%;mso-list:l0 level1 lfo1;tab-stops:98.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(h)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">SatuStop dapat menyediakan
                  kepada Pemberi Pinjaman segala pemberitahuan, surat atau laporan yang diterima
                  SatuStop dari Penerima Pinjaman atau pihak lain mengenai atau yang berhubungan
                  dengan Perjanjian Pinjaman melalui Situs.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.45pt;line-height:
                  114%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.2</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Pernyataan dan jaminan dan pengganti kerugian Pemberi Pinjaman
                  berdasarkan Perjanjian Keanggotaan ini adalah:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:116%;mso-list:l1 level1 lfo2;tab-stops:102.65pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman menyatakan dan
                  menegaskan kepada SatuStop bahwa dalam meminjamkan pinjaman dana kepada
                  Penerima Pinjaman berdasarkan Perjanjian Pinjaman, Pemberi Pinjaman telah
                  membuat pemeriksaan, penilaian/evaluasi, analisa sendiri mengenai Penerima Pinjaman dan memilih Penerima Pinjaman sendiri melalui
                  informasi yang disediakan oleh SatuStop melalui Situs dan Pemberi Pinjaman
                  telah melakukan pemeriksaan dan penilaian/evaluasi, analisa sendiri atas
                  Perjanjian Pinjaman yang akan ditandatangani oleh SatuStop atas nama Pemberi Pinjaman;<o:p></o:p></span></p>
                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:116%;mso-list:l1 level1 lfo2;tab-stops:102.65pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><br></span></p>
                  
                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:.25pt;
                  line-height:117%;mso-list:l0 level1 lfo1;tab-stops:100.55pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(b)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman menyatakan dan
                  menegaskan kepada SatuStop bahwa dana yang ditempatkan Pemberi Pinjaman di
                  Rekening Pemberi Pinjaman merupakan milik Pemberi Pinjaman sendiri dan
                  diperoleh dengan cara yang tidak bertentangan dengan hukum yang berlaku di
                  Indonesia, termasuk namun tidak terbatas pada Undang-undang No. 8 tentang
                  Tindak Pidana Pencucian Uang;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:.25pt;
                  line-height:116%;mso-list:l0 level1 lfo1;tab-stops:96.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(c)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman dengan ini
                  melepaskan, membebaskan dan mengganti kerugian SatuStop terhadap setiap dan
                  semua tuntutan atau pertanggungjawaban yang diajukan oleh pihak ketiga terkait
                  dengan dana yang ditempatkan Pemberi Pinjaman di Rekening Pemberi Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:.25pt;
                  line-height:117%;mso-list:l1 level2 lfo2;tab-stops:96.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(d)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi
                  Pinjaman dengan ini melepaskan, membebaskan dan mengganti kerugian SatuStop terhadap setiap dan semua tuntutan atau pertanggungjawaban yang diajukan
                  oleh Penerima Pinjaman, Pemberi Pinjaman ataupun pihak ketiga terkait dengan
                  penggunaan jasa SatuStop, Situs, Perjanjian Keanggotaan ini dan pelaksanaan Perjanjian Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:19.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:.25pt;
                  line-height:117%;mso-list:l1 level2 lfo2;tab-stops:96.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(e)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman dengan ini
                  melepaskan, membebaskan dan mengganti kerugian SatuStop dari semua kewajiban
                  dan tanggung jawab apapun terhadap dana yang ditempatkan Pemberi Pinjaman,
                  termasuk dana yang diperoleh kembali dari hasil Fasilitas Pinjaman yang belum
                  ditarik oleh Pemberi Pinjaman, di Rekening Pemberi Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:.25pt;
                  line-height:117%;mso-list:l1 level2 lfo2;tab-stops:96.3pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(f)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman akan membebaskan
                  SatuStop dari segala tanggung jawab sehubungan dengan pengembalian Fasilitas
                  Pinjaman oleh Penerima Pinjaman, dan SatuStop hanya akan melaksanakan tindakan
                  yang diatur dalam Perjanjian Pinjaman yang mengatur mengenai pengembalian
                  Fasilitas Pinjaman oleh Penerima Pinjaman; dan<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:.25pt;
                  line-height:116%;mso-list:l1 level2 lfo2;tab-stops:96.8pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(g)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                  </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Dalam hal Penerima Pinjaman gagal
                  melakukan pembayaran kembali, maka SatuStop akan melakukan upaya pemulihan
                  Fasilitas Pinjaman dengan cara sebagaimana diatur dalam Perjanjian Pinjaman.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-indent:-30.2pt;line-height:118%;
                  mso-list:l2 level1 lfo3;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">5.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">PENGEMBALIAN DANA YANG DITEMPATKAN DAN TINGKAT PENGEMBALIAN MODAL</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-indent:-31.5pt;line-height:117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">5.1Jika Penerima Pinjaman telah melakukan pembayaran atas Fasilitas
                  Pinjaman yang diterimanya dari Pemberi Pinjaman, maka SatuStop akan
                  memperhitungkan jumlah tersebut dalam Rekening Pemberi Pinjaman dan Pemberi
                  Pinjaman dapat melihatnya melalui Situs setelah 1 (satu) Hari Kerja sejak
                  tanggal pembayaran dilakukan.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  .25pt;line-height:116%;mso-list:l1 level1 lfo2;tab-stops:102.65pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">

                  </span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">5.2Dalam hal terdapat lebih dari satu Pemberi
                  Pinjaman untuk satu Fasilitas Pinjaman, maka pembayaran yang dilakukan akan
                  dibagi secara proporsional sesuai dengan persentase masing-masing para Pemberi
                  Pinjaman dalam Fasilitas Pinjaman yang bersangkutan.<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">5.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Selain menerima pembayaran kembali atas Fasilitas Pinjaman, Pemberi
                  Pinjaman akan memperoleh Tingkat Pengembalian Modal yaitu sebagaimana yang
                  tercantum dalam Ketentuan-Ketentuan Pinjaman milik Penerima Pinjaman yang
                  tersedia pada Situs.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;">6.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PAJAK DAN
                  BIAYA</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-indent:-31.5pt;line-height:117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">6.1Para Pihak setuju bahwa Pemberi Pinjaman akan membayar dan
                  membebaskan SatuStop dari seluruh pajak yang timbul (kecuali pajak penghasilan
                  SatuStop yang merupakan kewajiban SatuStop) dan pungutan-pungutan lainnya
                  berdasarkan atau berkaitan dengan Perjanjian Keanggotaan ini, Perjanjian
                  Pinjaman, dokumen jaminan, perjanjian jaminan bersama dan/atau DPA.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-indent:-31.5pt;line-height:117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">6.2Semua upah, biaya dan ongkos yang wajar yang telah dibayar oleh
                  SatuStop kepada pihak lain dalam rangka mengatur pemberian Fasilitas Pinjaman
                  oleh Pemberi Pinjaman kepada Penerima Pinjaman berdasarkan Perjanjian Pinjaman,
                  dokumen jaminan, perjanjian jaminan bersama dan/atau DPA, sepanjang upah, biaya
                  dan ongkos tersebut belum atau tidak dibayar kembali oleh Penerima Pinjaman
                  kepada SatuStop dalam waktu 14 (empat belas) hari kalender setelah ditagih oleh
                  SatuStop kepada Penerima Pinjaman, akan dibayar kembali oleh Pemberi Pinjaman
                  kepada SatuStop secara pro rata dengan jumlah tagihan masing-masing pemberi
                  pinjaman dalam hal Fasilitas Pinjaman juga diberikan oleh pemberi pinjaman
                  lainnya selain Pemberi Pinjaman melalui SatuStop terhadap Penerima Pinjaman
                  berdasarkan Perjanjian Pinjaman, dokumen jaminan, perjanjian jaminan bersama
                  dan/atau DPA dalam waktu 14 (empat belas) hari kalender setelah ditagih oleh
                  SatuStop kepada Pemberi Pinjaman.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.15pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;">7.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">HUKUM
                  YANG MENGATUR DAN PENYELESAIAN SENGKETA</span></b><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-indent:-31.5pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">7.1Perjanjian Keanggotaan ini dan pelaksanaan atasnya diatur berdasarkan
                  hukum Negara Republik Indonesia.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-indent:-31.5pt;line-height:117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">7.2Apabila terjadi perselisihan antara Para Pihak sehubungan dengan
                  pelaksanaan Perjanjian Keanggotaan ini, Para Pihak sepakat untuk
                  menyelesaikannya secara musyawarah. Apabila cara musyawarah tidak tercapai,
                  maka Para Pihak sepakat untuk menyerahkan penyelesaiannya melalui Arbitrase
                  yang akan dilaksanakan di Jakarta, pada Kantor Badan Arbitrase Nasional
                  Indonesia (“BANI”), oleh 3 (tiga) Arbitrator yang ditunjuk sesuai dengan
                  ketentuan peraturan dan prosedur yang diberlakukan BANI. Keputusan arbiter
                  adalah keputusan yang final, mengikat dan terhadapnya tidak diperbolehkan upaya
                  hukum perlawanan, banding atau kasasi<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.3pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;">8.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">KETENTUAN-KETENTUAN
                  LAIN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                  line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">8.1</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Setiap komunikasi yang akan dilakukan antara Para Pihak berdasarkan atau
                  sehubungan dengan Perjanjian Keanggotaan ini dapat dilakukan melalui surat
                  elektronik atau media elektronik lainnya, apabila Para Pihak:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">

                  <span style="font-size: 12pt;">(a)menyetujui
                  bahwa, kecuali dan sampai diberikan pemberitahuan yang bertentangan, surat
                  elektronik atau media elektronik tersebut akan menjadi bentuk komunikasi yang
                  diterima;</span><br></span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">(b)memberitahukan secara tertulis kepada satu sama
                  lain alamat surat elektronik mereka dan/atau informasi lain apa pun yang
                  diperlukan untuk memungkinkan pengiriman dan penerimaan informasi melalui media
                  tersebut; dan<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">(c)memberitahukan kepada satu sama lain setiap
                  perubahan pada alamat surat elektronik (email) mereka atau informasi lain apa
                  pun yang diserahkan oleh mereka.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Setiap Pihak akan memberitahukan kepada Pihak lain
                  segera setelah mengetahui bahwa sistem surat elektronik miliknya tidak
                  berfungsi karena adanya kerusakan teknis (dan kerusakan tersebut akan berlanjut
                  atau mungkin akan berlanjut selama lebih dari 24 jam). Setelah disampaikannya
                  pemberitahuan tersebut, sampai Pihak tersebut memberitahukan kepada Pihak
                  lainnya bahwa kerusakan teknis itu telah diperbaiki, semua pemberitahuan antara
                  Para Pihak tersebut akan dikirimkan melalui faks atau surat sesuai dengan Pasal
                  7.1 ini. Pemberitahuan dan komunikasi sehubungan dengan Perjanjian Keanggotaan
                  ini akan disampaikan kepada Para Pihak dengan alamat sebagai berikut:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.65pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:82.0pt;mso-line-height-alt:0pt;
                  tab-stops:279.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">SatuStop:</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi
                  Pinjaman:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:82.0pt;mso-line-height-alt:0pt;
                  tab-stops:279.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">U.p: SatuStop Customer Team</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">U.p:
                  <?php echo $data_bio[0]->bio_fullname;?><o:p></o:p></span></p><p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:82.0pt;mso-line-height-alt:0pt;
                  tab-stops:279.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Alamat Surat Elektronik:</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Alamat
                  Surat Elektronik:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:2.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:82.0pt;mso-line-height-alt:0pt;
                  tab-stops:279.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><?php echo $data_contacts[0]->contact_us_email; ?></span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><?php echo $check_data[0]->register_email;?><o:p></o:p></span></p><p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:82.0pt;mso-line-height-alt:0pt;
                  tab-stops:279.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">No. Telp:</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">No. Telp:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:2.65pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:82.0pt;mso-line-height-alt:0pt;
                  tab-stops:279.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><?php echo $data_contacts[0]->contact_us_phone; ?></span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><?php echo $data_bio[0]->bio_phone;?><o:p></o:p></span></p><p class="MsoNormal" style="line-height:18.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">8.2</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Apabila terdapat perubahan terhadap surat elektronik yang terdaftar pada
                  Situs dan/atau Perjanjian ini, Para Pihak wajib untuk memberikan pemberitahuan
                  dengan mengirimkan surat elektronik kepada Pihak lainnya.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">8.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Ketentuan-ketentuan Perjanjian Keanggotaan ini hanya dapat diubah,
                  dikesampingkan, dibebaskan atau diakhiri melalui instrumen tertulis yang
                  ditandatangani oleh Para Pihak.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">8.4</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Apabila satu atau lebih ketentuan dalam Perjanjian Keanggotaan ini tidak
                  berlaku, tidak sah atau tidak dapat dilaksanakan dalam cara apa pun berdasarkan
                  hukum atau keputusan yang berlaku, maka keabsahan, legalitas, dan dapat
                  dilaksanakannya ketentuan-ketentuan yang tercantum dalam Perjanjian Keanggotaan
                  ini tidak akan dipengaruhi atau dikurangi dalam cara apa pun juga.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">

                  <span style="font-size: 12pt;">8.5</span><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12pt;">Para
                  Pihak setuju bahwa, tanpa adanya persetujuan tertulis dari Pihak lainnya, tidak
                  akan secara langsung maupun tidak langsung membuka informasi mengenai dan/atau
                  yang ada hubungannya dengan Perjanjian Keanggotaan ini termasuk semua transaksi
                  dan dokumen yang terkait, selain kepada: (i) penasihat hukum, penasihat
                  keuangan, dan akuntan Pihak yang bersangkutan; dan/atau (ii) instansi atau
                  pihak yang berwenang berdasarkan peraturan perundang-undangan yang berlaku.</span><span style="font-size: 12pt;"><br></span></span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Tidak ada
                  satu pihakpun yang berhak untuk menuntut ganti rugi yang bersifat tidak
                  langsung atau yang merupakan suatu konsekuensi, termasuk namun tidak terbatas
                  pada kehilangan keuntungan, kehilangan penghasilan, kehilangan pendapatan, yang
                  diderita Pihak tersebut berkaitan dengan Perjanjian Keanggotaan ini terlepas
                  dari penyebabnya, termasuk wanprestasi dari Pihak lain.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:17.0pt;text-align:justify;line-height:
                  118%"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">DEMIKIAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">, Perjanjian Keanggotaan ini ditandatangani dengan menggunakan tanda
                  tangan elektronik<b style="mso-bidi-font-weight:normal"> </b>sebagaimana diatur
                  dalam Undang-undang Republik Indonesia No.11 Tahun 2008 tentang Informasi dan
                  Transaksi Elektronik oleh Para Pihak atau perwakilannya yang sah pada tanggal
                  sebagaimana disebutkan di bagian awal Perjanjian Keanggotaan ini dan akan
                  mempunyai kekuatan hukum yang sama dengan perjanjian yang dibuat dan
                  ditandatangani.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.3pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:362.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Untuk dan
                  atas nama<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:17.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:86.0pt;mso-line-height-alt:0pt;
                  tab-stops:319.0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PEMBERI
                  PINJAMAN</span></b><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">PT SATUSTOP SOLUSI<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.45pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:164.0pt;mso-line-height-alt:0pt"><span style="font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Lucida Console&quot;;
                  mso-fareast-font-family:&quot;Lucida Console&quot;"><?php echo $check_data[0]->register_email;?><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:2.75pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:35.0pt;mso-line-height-alt:0pt;
                  tab-stops:297.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">______________________________________</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">______________________________________<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:17.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:76.0pt;mso-line-height-alt:0pt;
                  tab-stops:356.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Nama : <?php echo $data_bio[0]->bio_fullname ;?></span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Nama :
                  <?php echo $data_direk[0]->management_menu_person;?><o:p></o:p></span></p><span style="font-size: 12pt;"></span></span></p>
        </div>

      </div>
      
      <!-- /.row -->
      <!-- END TYPOGRAPHY -->

    </div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="margin:0 30px;"> 
     <div class="pull-right hidden-xs"> 
       <b>Term</b> Sheet 
     </div> 
     <strong>Copyright &copy; Sanders</strong> All rights 
     reserved. 
   </footer> 
  

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

</body>
</html>
