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
  <!--  -->
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
     
      <?php if (@$data_loan[0]->loan_type == "Personal Loan") {
                # code...
        ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <?php
                  $date = $data_term[0]->term_date; 
                  $day = date('D', strtotime($date));
                  $dayList = array(
                    'Sun' => 'Minggu',
                    'Mon' => 'Senin',
                    'Tue' => 'Selasa',
                    'Wed' => 'Rabu',
                    'Thu' => 'Kamis',
                    'Fri' => 'Jumat',
                    'Sat' => 'Sabtu'
                  );
                  $idMax = $this->loan_model->loan_code();
                  $noUrut =(int) substr($idMax[0]->maxID,3,9);
                  $noUrut ++;
                  $newID="LN".sprintf("%09s",$noUrut);
                  $term_id = $newID."/SA/".date('m/Y');
                  $no_sk = $newID."/SK/".date('m/Y');
                ?>
                <p class="MsoNormal" align="center" style="margin-right:-16.95pt;text-align:center;
                mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">LAMPIRAN
                I<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:152.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">FORM PERJANJIAN PINJAMAN KARYAWAN<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:1.0pt;mso-line-height-rule:exactly"><!--[if gte vml 1]><v:shapetype
                 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
                 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
                 <v:stroke joinstyle="miter"/>
                 <v:formulas>
                  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
                  <v:f eqn="sum @0 1 0"/>
                  <v:f eqn="sum 0 0 @1"/>
                  <v:f eqn="prod @2 1 2"/>
                  <v:f eqn="prod @3 21600 pixelWidth"/>
                  <v:f eqn="prod @3 21600 pixelHeight"/>
                  <v:f eqn="sum @0 0 1"/>
                  <v:f eqn="prod @6 1 2"/>
                  <v:f eqn="prod @7 21600 pixelWidth"/>
                  <v:f eqn="sum @8 21600 0"/>
                  <v:f eqn="prod @7 21600 pixelHeight"/>
                  <v:f eqn="sum @10 21600 0"/>
                 </v:formulas>
                 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
                 <o:lock v:ext="edit" aspectratio="t"/>
                </v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" style='position:absolute;
                 margin-left:16pt;margin-top:11.65pt;width:529.25pt;height:3.5pt;z-index:-251661312'>
                 <v:imagedata src="file:///C:\Users\MFIQRI~1\AppData\Local\Temp\msohtmlclip1\01\clip_image001.jpg"
                  o:title=""/>
                </v:shape><![endif]--><!--[if !vml]--><span style="mso-ignore:vglayout;position:
                absolute;z-index:251655166;margin-left:21px;margin-top:15px;width:706px;
                height:5px"><img width="706" height="5" src="file:///C:/Users/MFIQRI~1/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" v:shapes="_x0000_s1026"></span><!--[endif]--><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="line-height:19.35pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" align="center" style="margin-right:-16.95pt;text-align:center;
                mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PERJANJIAN
                PINJAMAN<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:9.0pt;margin-bottom:0cm;
                margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><b style="mso-bidi-font-weight:
                normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:
                118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">PERJANJIAN PINJAMAN </span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">ini (selanjutnya disebut sebagai “<b style="mso-bidi-font-weight:normal">Perjanjian
                Pinjaman</b>”) dibuat dan<b style="mso-bidi-font-weight:normal"> </b>ditandatangani
                pada hari <?php echo $dayList[$day];?>, tanggal <?php echo date('d/m/Y', strtotime($date));?> oleh dan antara:<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;text-indent:
                -30.2pt;line-height:118%;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">PT SATUSTOP SOLUSI</span></b><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, sebuah
                perseroan terbatas yang didirikan berdasarkan hukum<b style="mso-bidi-font-weight:
                normal"> </b>Negara Republik Indonesia, beralamat di <?php echo $data_contact[0]->contact_us_headquarter; ?> yang dalam hal ini
                diwakili oleh <?php echo $data_direk[0]->management_menu_person;?> dalam kedudukannya selaku <?php echo $data_direk[0]->management_menu_position;?> yang dalam hal ini
                bertindak selaku penerima kuasa dari pemberi pinjaman berdasarkan:<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:63.0pt;text-indent:-16.0pt;mso-line-height-alt:
                0pt;mso-list:l0 level2 lfo1;tab-stops:63.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">surat
                kuasa No. <?php echo $data_term[0]->no_surat_kuasa;?> tanggal <?php echo date('d/m/Y', strtotime($date));?>;<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:64.0pt;text-indent:-17.0pt;mso-line-height-alt:
                0pt;mso-list:l0 level2 lfo1;tab-stops:64.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Surat
                kuasa No. <?php echo $data_term[0]->no_surat_kuasa;?> tanggal <?php echo date('d/m/Y', strtotime($date));?>;<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">(selanjutnya
                disebut sebagai “<b style="mso-bidi-font-weight:normal">Pemberi Pinjaman</b>”).<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;line-height:
                114%;mso-list:l1 level1 lfo2;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><?php echo $data_bio[0]->bio_fullname;?>, <?php if ($data_bio[0]->bio_cityzenship == "WNI") {
                  echo "warga negara Indonesia, pemegang Kartu Tanda Penduduk No. ".$data_bio[0]->bio_nik.", yang beralamat di ".$data_bio[0]->bio_address;
                } else {
                  echo "warga negara Asing, bertempat tinggal di ".$data_bio[0]->bio_address. ", pemegang Passport No. ".$data_bio[0]->bio_passport;
                } ?>,
                (untuk selanjutnya disebut sebagai “Penerima Pinjaman”)<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:2.0pt;margin-bottom:0cm;
                margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">(Pemberi Pinjaman, Penerima Pinjaman, masing-masing disebut sebagai ”<b style="mso-bidi-font-weight:normal">Pihak</b>” dan secara bersama-sama disebut
                sebagai ”<b style="mso-bidi-font-weight:normal">Para Pihak</b>”)<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:17.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">BAHWA</span></b><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">:<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-32.85pt;line-height:
                114%;mso-list:l2 level1 lfo3;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">A.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman memiliki
                keinginan untuk meminjam dana sejumlah maksimum Rp. <?php echo number_format($data_loan[0]->loan_amount,0,".",".");?> dari Pemberi
                Pinjaman.</span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;text-indent:
                -32.2pt;line-height:117%;mso-list:l2 level1 lfo3;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">B.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Pemberi Pinjaman telah setuju
                untuk meminjamkan Fasilitas Pinjaman (sebagaimana didefinisikan dibawah ini)
                kepada Penerima Pinjaman dan Para Pihak berniat untuk mencatat pinjaman
                tersebut di dalam suatu instrumen hukum yang akan menjadi dasar dari adanya
                pinjaman tersebut dari Pemberi Pinjaman kepada Penerima Pinjaman.<o:p></o:p></span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:4.0pt;margin-bottom:0cm;
                margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:
                118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">OLEH KARENA ITU</span></b><span style="font-size:
                12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, Para
                Pihak setuju untuk mengadakan Perjanjian Pinjaman ini berdasarkan<b> </b>syaratsyarat dan ketentuan-ketentuan
                berikut:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">DEFINISI
                DAN INTERPRETASI</span></b><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.45pt;line-height:
                114%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.1</span><span style="font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Seluruh istilah-istilah yang digunakan dalam Perjanjian Pinjaman ini
                memiliki arti sebagaimana sebagai berikut:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">“<b>Akun
                Penerima Pinjaman</b>” berarti suatu akun yang dibuat oleh Penerima Pinjaman
                pada Situs yang memuat informasi antara lain (i) informasi Penerima Pinjaman
                (ii) jumlah pinjaman yang akan diajukan (iii) jangka waktu pinjaman dan (iv)
                informasi lainnya;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">“<b>Angsuran</b>”
                adalah jumlah pembayaran cicilan tetap secara bulanan yang wajib dibayar oleh
                Penerima Pinjaman selama Jangka Waktu Fasilitas Pinjaman yang besarnya dan
                tanggal jatuh tempo angsuran diatur berdasarkan Perjanjian Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:7.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Biaya Layanan Platform SatuStop</b>”
                adalah biaya yang dikenakan sehubungan dengan penggunaan layanan Platform
                SatuStop;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:1.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Fasilitas Pinjaman</b>” adalah
                fasilitas pinjaman yang diberikan oleh Pemberi Pinjaman melalui SatuStop
                kepada Penerima Pinjaman sebesar Rp. <?php echo number_format($data_loan[0]->loan_amount,0,".",".");?>;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">“<b>Hari Kerja</b>”
                adalah hari, selain hari Sabtu, Minggu dan hari libur resmi nasional, dimana
                bank buka untuk melakukan kegiatan usahanya sesuai dengan ketentuan Bank
                Indonesia;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">“<b>Informasi
                Rahasia</b>” berarti informasi apapun mengenai Perjanjian Pinjaman serta
                informasi apapun yang saling dipertukarkan di antara para pihak dan
                perwakilannya masing-masing sehubungan dengan Perjanjian Pinjaman ini atau
                menurut Perjanjian Pinjaman ini. Informasi Rahasia tidak meliputi informasi
                yang dapat atau akan dapat diakses secara publik (selain karena penggunaan atau
                publikasi yang tidak sah) atau informasi apa pun yang diberikan ke salah satu
                Pihak oleh pihak ketiga yang diberikan wewenang untuk memberikan informasi
                tersebut kecuali informasi yang diberikan tersebut dinyatakan sebagai rahasia;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:7.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>SatuStop</b>” adalah PT
                SATU STOP SOLUSI sebuah perseroan terbatas yang didirikan berdasarkan
                hukum Negara Republik Indonesia, beralamat di <?php echo $data_contact[0]->contact_us_headquarter; ?>.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:2.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Jangka Waktu Fasilitas Pinjaman</b>”
                adalah jangka waktu dari suatu fasilitas pinjaman sejak ditandatanganinya
                Perjanjian Pinjaman sampai dengan Tanggal Jatuh Tempo;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Ketentuan-ketentuan Pinjaman</b>”
                adalah ketentuan-ketentuan yang disetujui dari Permohonan Pinjaman yang telah
                diajukan termasuk informasi sehubungan dengan, antara lain,<o:p></o:p></span></p><p class="MsoNormal" style="line-height:.5pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                .25pt;line-height:117%;mso-list:l1 level1 lfo2;tab-stops:93.95pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">(i)<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">pagu maksimum pinjaman (ii)
                Jangka Waktu Fasilitas Pinjaman (iii) Suku Bunga (iv) denda keterlambatan dan
                (v) kesediaan Penerima Pinjaman untuk menerima Fasilitas Pinjaman apabila dana
                yang terkumpul selama masa penawaran sedikitnya 80% dari nilai pinjaman yang
                diajukan oleh Penerima Pinjaman dan Lampiran III Perjanjian Pinjaman ini.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:117%;mso-list:l2 level1 lfo3;tab-stops:47.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">

                <span style="font-size: 12pt;">“<b>Pelunasan Dipercepat</b>” berarti
                sebagaimana yang didefinisikan pada Pasal 4.2.1;</span><br></span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Pemberi Pinjaman</b>” adalah
                pihak yang bertindak selaku pemberi pinjaman atas Fasilitas Pinjaman atau
                melalui kuasanya yang ditunjuk yang diatur dalam Perjanjian Pinjaman ini;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:2.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Penawaran Pinjaman</b>” berarti
                yang suatu penawaran Fasilitas Pinjaman yang diajukan oleh seorang Pemberi
                Pinjaman kepada Penerima Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Penerima Pinjaman</b>” adalah
                perseroangan yang menerima Fasilitas Pinjaman dari Pemberi Pinjaman melalui
                SatuStop;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:1.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Platform SatuStop</b>” adalah
                suatu laman yang tersedia pada Situs yang menyediakan berbagai informasi antara
                lain Permohonan Pinjaman, Akun Penerima Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">“<b>Rekening SatuStop</b>” adalah suatu
                rekening bank yang terdaftar atas nama SatuStop;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Rekening Pembayaran Fasilitas
                Pinjaman</b>” sebagaimana yang didefinisikan pada Pasal 4.1.2;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">“<b>Situs</b>” adalah situs www.sanders.co.id
                yang dikelola oleh PT SATU STOP SOLUSI;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">“<b>Suku Bunga</b>”
                adalah persentase bunga dalam jangka waktu tertentu yang bersifat tetap selama
                masa pinjaman dan dihitung dari besar Fasilitas Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">“<b>Syarat dan Ketentuan Umum</b>”
                adalah syarat dan ketentuan umum penggunaan perjanjian pinjaman yang terdapat
                pada Situs.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">“<b>Tanggal
                Jatuh Tempo</b>” adalah berarti tanggal yang ditetapkan di Lampiran I kecuali
                apabila hari tersebut jatuh pada bukan Hari Kerja, maka dalam hal ini Tanggal
                Jatuh Tempo adalah Hari Kerja sebelumnya, atau tanggal lain di mana pembayaran
                terakhir pokok Pinjaman jatuh tempo dan harus dibayar sebagaimana ditetapkan
                dalam Perjanjian ini dan berdasarkan Perjanjian Pinjaman ini.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                -31.45pt;line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.2</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp; &nbsp;</span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Judul-judul yang digunakan dalam Perjanjian Pinjaman ini hanya untuk
                kemudahan dan tidak mempunyai pengaruh apapun terhadap konstruksi Perjanjian
                Pinjaman serta tidak dapat digunakan untuk menafsirkan ketentuan pasal yang
                bersangkutan.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                -31.45pt;line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp; &nbsp;&nbsp;</span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Kecuali ditentukan lain, referensi pada ketentuan peraturan
                perundang-undangan adalah ketentuan peraturan perundang-undangan yang
                bersangkutan beserta perubahannya dari waktu ke waktu.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.4</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;</span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Kecuali disyaratkan lain, acuan terhadap suatu pasal, ayat atau lampiran
                Perjanjian Pinjaman ini adalah acuan terhadap pasal, ayat atau lampiran adalah
                acuan terhadap pasal, ayat atau lampiran Perjanjian Pinjaman ini, dan acuan
                terhadap Perjanjian Pinjaman ini adalah acuan terhadap Perjanjian Pinjaman ini
                beserta lampirannya.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;line-height:
                118%;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">PENYEDIAAN FASILITAS PINJAMAN DAN TUJUAN PENGGUNAAN FASILITAS PINJAMAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;text-indent:
                -32.2pt;line-height:117%;mso-list:l2 level1 lfo3;tab-stops:47.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">

                <span style="font-size: 12pt;">&nbsp; &nbsp; &nbsp; &nbsp;Dengan
                tunduk pada ketentuan-ketentuan dari Perjanjian Pinjaman ini dan yang terdapat
                dalam Situs termasuk Syarat dan Ketentuan Umum, Pemberi Pinjaman telah setuju
                untuk menyediakan suatu&nbsp;</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">Fasilitas
                Pinjaman dalam jumlah sebesar Rp. <?php echo number_format($data_loan[0]->loan_amount,0,".",".");?> (<span id="output"></span> Rupiah).</span><span style="font-size: 12pt;"><br></span></span></p>

                <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">JANGKA
                WAKTU FASILITAS PINJAMAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;line-height:116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Jangka waktu Fasilitas Pinjaman ditetapkan selama <span id="periode3"></span> bulan terhitung
                sejak tanggal pengiriman atas seluruh jumlah Fasilitas Pinjaman secara penuh
                dan dapat diperpanjang sesuai dengan kesepakatan dari Para Pihak (“<b>Jangka Waktu Fasilitas Pinjaman</b>”).<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:94.0pt;margin-bottom:
                0cm;margin-left:48.0pt;margin-bottom:.0001pt;text-indent:-31.2pt;line-height:
                205%;mso-list:l0 level1 lfo1;tab-stops:47.25pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">4.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">PEMBAYARAN FASILITAS PINJAMAN DAN PELUNASAN DIPERCEPAT </span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">4.1 <b>Pembayaran Fasilitas Pinjaman</b><o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:.6pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:112.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:116%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.1&nbsp; Fasilitas Pinjaman dan jumlah lain yang terutang berdasarkan
                Perjanjian Pinjaman harus dilunasi oleh Penerima Pinjaman dalam Jangka Waktu
                Fasilitas Pinjaman sesuai dengan jadwal pembayaran pinjaman yang dimuat pada
                Lampiran I<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-left:112.0pt;text-align:justify;text-indent:
                -31.45pt;line-height:116%;tab-stops:111.0pt"><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.2&nbsp; Pembayaran atas Angsuran dilakukan oleh
                Penerima Pinjaman kepada Pemberi Pinjaman pada Hari Kerja ke rekening bank yang
                ditentukan pada Lampiran II dari Perjanjian ini (“ <b>Rekening Pembayaran Fasilitas Pinjaman</b>”).<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:112.0pt;margin-bottom:.0001pt;text-indent:-31.45pt;line-height:
                114%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.3&nbsp; Setiap pembayaran dari Penerima Pinjaman, akan dipergunakan untuk
                pembayaran dengan urutan sebagai berikut:<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-left:142.0pt;text-indent:-30.0pt;mso-line-height-alt:
                0pt;mso-list:l1 level1 lfo2;tab-stops:142.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">biaya-biaya;<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-left:142.0pt;text-indent:-30.7pt;mso-line-height-alt:
                0pt;mso-list:l1 level1 lfo2;tab-stops:142.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">denda yang belum dibayarkan;<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-left:142.0pt;text-indent:-30.0pt;mso-line-height-alt:
                0pt;mso-list:l1 level1 lfo2;tab-stops:142.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">c.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Suku Bunga; dan<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-left:142.0pt;text-indent:-30.7pt;mso-line-height-alt:
                0pt;mso-list:l1 level1 lfo2;tab-stops:142.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">d.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">pokok pinjaman yang terutang.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:112.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:114%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.4&nbsp; Apabila pembayaran atas Angsuran jatuh pada hari libur nasional di
                Indonesia atau pada hari Sabtu atau Minggu, maka pembayaran harus dilakukan
                pada Hari Kerja sebelumnya.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">4.2</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Pelunasan Dipercepat<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:112.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:117%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.2.1&nbsp; Penerima Pinjaman diperkenankan untuk melakukan pembayaran seluruh
                Fasilitas Pinjaman lebih cepat dari waktu yang ditetapkan dengan melakukan
                permohonan untuk itu melalui Akun Penerima Pinjaman sedikitnya 5 (lima) Hari
                Kerja sebelum tanggal pelunasan dipercepat yang direncakan (“<b>Pelunasan Dipercepat</b>”).<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:112.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:116%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.2.2&nbsp; Penerima Pinjaman tidak diperkenankan untuk melakukan pelunasan
                dipercepat sebagian melainkan harus untuk seluruh Fasilitas Pinjaman yang
                diterimanya dari Pemberi Pinjaman yang memberikan.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:112.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:116%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.2.3&nbsp; Pelunasan Dipercepat dikenakan biaya sebesar dua bulan bunga tanpa
                memperhitungkan masa angsuran berjalan ditambah biaya administrasi sebesar Rp.
                200.000 (dua ratus ribu Rupiah);</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:112.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:116%;tab-stops:111.0pt"><font face="Times New Roman, serif">&nbsp;&nbsp;</font><span style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;">Ketentuan
                mengenai pembayaran di atas dapat berubah sewaktu-waktu sesuai dengan&nbsp;</span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;">kebijaksanaan SatuStop, dengan pemberitahuan terlebih
                dahulu kepada Penerima Pinjaman.</span></p><p class="MsoNormal" style="line-height:12.4pt;mso-line-height-rule:exactly"><p class="MsoNormal" style="margin-top:0cm;margin-right:140.0pt;margin-bottom:
                0cm;margin-left:48.0pt;margin-bottom:.0001pt;text-indent:-31.2pt;line-height:
                205%;mso-list:l0 level1 lfo1;tab-stops:47.25pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">SUKU BUNGA, BIAYA-BIAYA DAN DENDA KETERLAMBATAN </span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">5.1 <b style="mso-bidi-font-weight:normal">Suku Bunga</b><o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:.6pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:112.0pt;text-align:justify;text-indent:
                -31.45pt;line-height:116%;tab-stops:111.0pt"><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">5.1.1<span style="mso-tab-count:1">&nbsp; </span>Suku Bunga yang digunakan terhadap suatu
                Fasilitas Pinjaman adalah Suku Bunga berlaku pada hari terakhir Periode
                Penawaran pada pukul 17:00 Waktu Indonesian Barat yang tersedia pada laman
                Platform SatuStop.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">5.1.2<span style="mso-tab-count:1">&nbsp; </span>Suku Bunga
                atas Fasilitas Pinjaman akan diperhitungkan secara harian dengan ketentuan<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:2.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:112.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1 (satu)
                tahun sama dengan 360 (tiga ratus enam puluh) hari.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:14.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">5.2</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Biaya-biaya<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Atas Fasilitas Pinjaman yang diberikan oleh Pemberi
                Pinjaman, Penerima Pinjaman wajib membayar biaya dan pengeluaran sebagai
                berikut :<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                -29.25pt;line-height:116%;mso-list:l1 level1 lfo2;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman akan membayar
                kepada SatuStop Biaya Layanan Platform SatuStop sebesar 5% (lima persen) dari
                jumlah Fasilitas Pinjaman yang pembayarannya akan dilakukan dengan cara
                pengurangan langsung dari jumlah Fasilitas Pinjaman.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                -29.95pt;line-height:117%;mso-list:l1 level1 lfo2;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman setuju untuk
                membayar seluruh biaya-biaya (termasuk biaya hukum) sehubungan dengan
                penandatanganan, pelaksanaan termasuk eksekusi dari Perjanjian, atau perjanjian
                lainnya yang disebutkan di sini yang pembayarannya akan dilakukan dengan cara
                pengurangan langsung dari jumlah yang ditarik atau cara lain yang merupakan
                diskresi dari SatuStop.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:11.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">5.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Denda Keterlambatan<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:79.0pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Pemberi Pinjaman dapat mengenakan denda keterlambatan kepada Penerima
                Pinjaman sebagaimana diatur pada Ketentuan-ketentuan Pinjaman.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                0pt;mso-list:l2 level1 lfo3;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">6.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PEMULIHAN
                FASILITAS PINJAMAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;line-height:
                117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Untuk lebih menjamin ketertiban pembayaran kembali
                atas segala apa yang terutang oleh Penerima Pinjaman kepada Pemberi Pinjaman
                baik karena utang-utang pokok, bunga, biayabiaya lain sehubungan dengan
                Fasilitas Pinjaman yang telah lewat Tanggal Jatuh Tempo, Penerima Pinjaman
                dengan ini mengizinkan Pemberi Pinjaman atau melalui SatuStop selaku kuasanya
                untuk melakukan upaya yang diperlukan oleh Pemberi Pinjaman termasuk namun
                tidak terbatas pada (i) menghubungi Penerima Pinjaman (ii) menggunakan jasa
                pihak ketiga untuk melakukan penagihan atas segala yang terutang dan telah
                melewati Tanggal Jatuh Tempo.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.3pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                0pt;mso-list:l2 level1 lfo3;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">7.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">HAL YANG
                DILARANG</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;line-height:
                116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Kecuali ditentukan lain oleh Pemberi Pinjaman atau
                kuasanya, terhitung sejak tanggal Perjanjian Pinjaman sampai dengan dilunasinya
                seluruh kewajiban yang terutang oleh Penerima Pinjaman kepada Pemberi Pinjaman,
                Penerima Pinjaman dilarang mengalihkan setiap hak dan kewajiban di&nbsp;<o:p></o:p></span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">Perjanjian Pinjaman dan Syarat dan Ketentuan Umum (termasuk juga hak dan
                kewajiban dan setiap dokumen pelengkapnya) kepada pihak manapun;</span></p></p><p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">8.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PERNYATAAN
                DAN JAMINAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">Penerima Pinjaman dengan ini berjanji, menyatakan dan menjamin kepada
                Pemberi Pinjaman sebagai berikut:</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -29.5pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman memiliki hak
                yang sah, kekuasaan dan kewenangan penuh untuk menandatangani, pelaksanaan dan
                pemenuhan Perjanjian Pinjaman ini. Penandatanganan dan pemenuhan Perjanjian
                Pinjaman ini adalah sah dan mengikat untuk dilaksanakan dalam segala hal
                terhadap Penerima Pinjaman;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -30.2pt;line-height:116%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Perjanjian Pinjaman ini dan
                dokumen lain yang disebutkan dalam Perjanjian Pinjaman ini, merupakan kewajiban
                yang sah dan mengikat untuk dilaksanakan sesuai dengan ketentuannya
                masing-masing;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -29.5pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">c.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">tidak terdapat perkara di
                pengadilan atau tidak terdapat gugatan atau kemungkinan perkara terhadap
                Penerima Pinjaman termasuk juga perkara apapun yang berhubungan dengan badan
                pemerintahan atau badan administratif lainnya atau hal-hal lainnya yang
                mengancam Penerima Pinjaman yang apabila terjadi dan diputuskan tidak memihak
                kepada Penerima Pinjaman akan mempengaruhi kemampuan keuangan Penerima Pinjaman
                atau kemampuannya untuk membayar secara tepat waktu setiap jumlah terutang
                berdasarkan Perjanjian Pinjaman dan/atau dokumen lainnya atau setiap perubahan
                atau pelengkapnya;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -30.2pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">d.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp; &nbsp; &nbsp; &nbsp;</span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penandatanganan dan pelaksanaan
                Perjanjian Pinjaman ini oleh Penerima Pinjaman, dan transaksi-transaksi yang
                diatur dalam Perjanjian tersebut, tidak dan tidak akan bertentangan dengan: (i)
                undang-undang atau peraturan yang berlaku; atau (ii) setiap perjanjian atau
                instrumen yang mengikat atas Penerima Pinjaman atau salah satu aset miliknya
                atau merupakan suatu Wanprestasi atau peristiwa pengakhiran berdasarkan setiap
                perjanjian atau instrumen apapun yang memiliki atau secara wajar kemungkinan
                memiliki suatu dampak yang bersifat material terhadap Penerima Pinjaman;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -29.5pt;line-height:116%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">e.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman akan segera
                memberitahu kepada Pemberi Pinjaman setiap terjadinya Wanprestasi kejadian lain
                yang dengan diberitahukan atau lewatnya waktu atau keduanya akan merupakan
                Wanprestasi;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -28.2pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">f.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman tidak sedang
                dan tidak akan mengajukan permohonan penundaan pembayaran (surenseance van
                betaling) terhadap Fasiltas Pinjaman yang diberikan berdasarkan Perjanjian ini
                dan tidak menjadi insolvent atau dinyatakan pailit dan tidak kehilangan haknya
                untuk mengurus atau menguasai harta bendanya;<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -28.2pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">g.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif; text-indent: -28.2pt;">semua
                informasi baik tertulis maupun tidak tertulis yang diberikan kepada Pemberi
                Pinjaman melalui Situs oleh Penerima Pinjaman dan perwakilannya, sewaktu
                diberikan dan setiap saat setelahnya berdasarkan pengetahuan terbaiknya adalah
                benar, lengkap dan tepat serta tidak menyesatkan dalam hal apapun dan tidak ada
                fakta yang tidak diungkapakan yang memuat setiap informasi yang diberikan kepada
                Pemberi Pinjaman atau SatuStop oleh Penerima Pinjaman menjadi tidak tepat atau
                menyesatkan. Dalam hal terdapat perubahan atas dokumen&nbsp;</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">persyaratan-persyaratan Penerima Pinjaman diwajibkan untuk
                melakukan pembaharuan dan/atau pengkinian atas informasi yang tersedia pada
                Akun Penerima Pinjaman dan mengirimkan dokumen-dokumen tersebut kepada
                SatuStop.</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -28.2pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">9.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">WANPRESTASI</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;line-height:
                117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Dengan memperhatikan ketentuan dalam Perjanjian
                Pinjaman ini, dengan terjadinya salah satu dari kejadian-kejadian di bawah ini
                (selanjutnya disebut sebagai "Wanprestasi") maka seluruh jumlah yang
                terutang berdasarkan Perjanjian Pinjaman ini akan menjadi jatuh tempo dan harus
                dibayar oleh Penerima Pinjaman kepada Pemberi Pinjaman dan Pemberi Pinjaman
                dapat melakukan tindakan apapun juga yang dianggap perlu berdasarkan Perjanjian
                Pinjaman dan/atau Perjanjian Pemberian Fasilitas Pinjaman, perjanjian lainnya
                yang dilakukan oleh Penerima Pinjaman dan Pemberi Pinjaman, sesuai dengan peraturan
                perundang-undangan yang berlaku untuk menjamin pembayaran atas padanya:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.8pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -29.5pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman tidak
                melaksanakan kewajibannya berdasarkan Perjanjian ini dan/atau perjanjian
                lainnya yang dilakukan antara Pemberi Pinjaman dan Penerima Pinjaman yang
                mengakibatkan berakhirnya Perjanjian Pinjaman dan/atau Perjanjian Pemberian
                Fasilitas Pinjaman, ini dan perjanjian lainnya yang dilakukan antara Pemberi
                Pinjaman dan Penerima Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -30.2pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">apabila pernyataan, jaminan dan
                janji Penerima Pinjaman dalam Perjanjian Pinjaman ini dan perjanjian lainnya
                yang dilakukan antara Pemberi Pinjaman dan Penerima Pinjaman yang disebutkan di
                sini menjadi atau dapat dibuktikan menjadi tidak benar, tidak akurat atau
                menyesatkan;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -29.5pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">c.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman (i) mengajukan
                permohonan pernyataan kepailitan atas dirinya atau (ii) memiliki tindakan atas
                dirinya yang apabila tidak dihentikan dalam waktu 30 (tiga puluh) hari kalender
                dapat mengarah kepada pernyataan tidak mampu membayar utang atau pailit oleh
                Penerima Pinjaman;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -30.2pt;line-height:116%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">d.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">pengadilan atau badan pemerintahan
                lainnya menyatakan bahwa Perjanjian Pinjaman atau dokumen-dokumen atau bagian
                daripadanya adalah batal demi hukum atau menjadi tidak mengikat Para Pihak;
                atau<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -29.5pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">e.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">terjadinya gangguan di dalam
                pasar keuangan atau situasi ekonomi atau perubahan lainnya yang berdampak
                negatif termasuk dan tidak terbatas pada setiap tindakan dari pihak yang
                berwenang untuk melikuidasi atau menghentikan usaha bisnis atau pekerjaan
                Penerima Pinjaman yang menurut pendapat Pemberi Pinjaman dapat menghalangi,
                menunda atau membuat Penerima Pinjaman tidak mampu memenuhi
                kewajiban-kewajibannya dalam Perjanjian ini.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-36.2pt;mso-line-height-alt:
                0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">10.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">HUKUM
                YANG BERLAKU DAN PENYELESAIAN SENGKETA</span></b><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">10.1 Perjanjian ini dan pelaksanaanya ini diatur
                oleh dan ditafsirkan sesuai dengan hukum yang berlaku di Republik Indonesia.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                -28.2pt;line-height:117%;mso-list:l0 level2 lfo1;tab-stops:77.0pt">

                <span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial;
                mso-ansi-language:IN;mso-fareast-language:IN;mso-bidi-language:AR-SA">10.2&nbsp; Apabila&nbsp;
                terjadi&nbsp; perselisihan&nbsp; antara&nbsp;
                Para&nbsp; Pihak&nbsp; sehubungan&nbsp;
                dengan&nbsp; pelaksanaan&nbsp; Perjanjian Pinjaman ini, Para Pihak sepakat
                untuk menyelesaikannya secara musyawarah. Apabila cara musyawarah&nbsp; tidak&nbsp;
                tercapai,&nbsp; maka&nbsp; Para&nbsp;
                Pihak&nbsp; sepakat&nbsp; untuk&nbsp;
                menyerahkan&nbsp; penyelesaiannya</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">melalui Arbitrase yang akan dilaksanakan di
                Jakarta, pada Kantor Badan Arbitrase Nasional Indonesia (“BANI”), oleh 3 (tiga)
                Arbitrator yang ditunjuk sesuai dengan ketentuan peraturan dan prosedur yang
                diberlakukan BANI. Keputusan arbiter adalah keputusan yang final, mengikat dan
                terhadapnya tidak diperbolehkan upaya hukum perlawanan, banding atau kasasi.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:47.0pt;text-indent:-36.2pt;mso-line-height-alt:
                0pt;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;">11.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">KETENTUAN
                LAIN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p></o:p></span></p><p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">11.1 Setiap komunikasi yang akan dilakukan antara
                Para Pihak berdasarkan atau sehubungan dengan Perjanjian ini dapat dilakukan
                melalui surat elektronik atau media elektronik lainnya, apabila Para Pihak:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.25pt;line-height:
                114%;mso-list:l0 level2 lfo1;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">a.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">menyetujui bahwa, kecuali dan
                sampai diberikan pemberitahuan yang bertentangan, surat elektronik atau media
                elektronik tersebut akan menjadi bentuk komunikasi yang diterima;<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                -29.95pt;line-height:116%;mso-list:l0 level2 lfo1;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">b.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">memberitahukan secara tertulis
                kepada satu sama lain alamat surat elektronik mereka dan/atau informasi lain
                apa pun yang diperlukan untuk memungkinkan pengiriman dan penerimaan informasi
                melalui media tersebut; dan<o:p></o:p></span></p><p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.25pt;line-height:
                114%;mso-list:l0 level2 lfo1;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">c.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">memberitahukan kepada satu sama
                lain setiap perubahan pada alamat surat elektronik (email) mereka atau
                informasi lain apa pun yang diserahkan oleh mereka.<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Setiap Pihak akan memberitahukan kepada Pihak lain segera
                setelah mengetahui bahwa sistem surat elektronik miliknya tidak berfungsi
                karena adanya kerusakan teknis (dan kerusakan tersebut akan berlanjut atau
                mungkin akan berlanjut selama lebih dari 24 jam). Setelah disampaikannya
                pemberitahuan tersebut, sampai Pihak tersebut memberitahukan kepada Pihak
                lainnya bahwa kerusakan teknis itu telah diperbaiki, semua pemberitahuan antara
                Para Pihak tersebut akan dikirimkan melalui faks atau surat sesuai dengan Pasal
                11.1 ini. Pemberitahuan dan komunikasi sehubungan dengan Perjanjian ini akan
                disampaikan kepada Para Pihak dengan alamat sebagai berikut:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:13.65pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Pemberi Pinjaman:</span><span style="font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima
                Pinjaman:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">U.p: PT. SATUSTOP SOLUSI</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">U.p: <?php echo $data_bio[0]->bio_fullname;?><o:p></o:p></span></p><p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Alamat Surat Elektronik:</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Alamat
                Surat Elektronik:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:2.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><?php echo $data_contact[0]->contact_us_email; ?></span><span style="font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><?php echo $check_data[0]->register_email;?><o:p></o:p></span></p><p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">No. Telp:</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">No. Telp:<o:p></o:p></span></p><p class="MsoNormal" style="line-height:2.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">&nbsp;</span></p><p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><?php echo $data_contact[0]->contact_us_phone; ?></span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><?php echo $data_bio[0]->bio_phone;?><o:p></o:p></span></p><p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><br></p><p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;line-height:116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial"><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">11.2</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">Setiap
                syarat atau ketentuan dari Perjanjian Pinjaman ini dapat dikesampingkan setiap
                saat oleh Pihak yang berhak atas manfaat daripadanya, tetapi pengesampingan
                tersebut tidak akan efektif kecuali dituangkan dalam bentuk tertulis yang dilaksanakan
                sebagaimana mestinya oleh atau atas nama Pihak yang mengesampingkan syarat atau
                ketentuan tersebut. Tidak ada pengesampingan oleh Pihak manapun akan syarat
                atau ketentuan apapun dalam Perjanjian Pinjaman ini, dalam satu atau lebih hal,
                harus dianggap atau ditafsirkan sebagai pengesampingan akan syarat dan
                ketentuan yang sama ataupun lain dari Perjanjian Pinjaman ini&nbsp;</span>pada setiap kesempatan di masa depan. Semua upaya hukum, baik berdasarkan
                Perjanjian Pinjaman ini atau oleh Hukum atau lainnya yang dapat diberikan, akan
                berlaku secara kumulatif dan bukan alternatif.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">11.3<span style="mso-tab-count:
                1">&nbsp;&nbsp; </span>Tidak ada perubahan, amandemen atau pengesampingan Perjanjian
                Pinjaman ini yang akan berlaku atau mengikat kecuali dibuat secara tertulis
                dan, dalam hal perubahan atau amandemen, ditandatangani oleh Para Pihak dan
                dalam hal pengesampingan, oleh Pihak yang mengesampingkan terhadap siapa
                pengesampingan akan dilakukan. Setiap pengesampingan oleh salah satu Pihak akan
                hak apapun dalam Perjanjian Pinjaman ini atau setiap pelanggaran Perjanjian
                Pinjaman ini oleh Pihak lain tidak dapat diartikan sebagai diabaikannya hak
                lainnya atau bentuk pelanggaran lainnya oleh Pihak lain tersebut, baik dengan
                sifat yang sama atau sifat berbeda daripadanya.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.95pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">11.4<span style="mso-tab-count:1">&nbsp;&nbsp; </span>Jika ketentuan apapun dalam Perjanjian
                Pinjaman ini dianggap ilegal, tidak sah atau tidak dapat dilaksanakan
                berdasarkan Hukum yang berlaku sekarang atau di masa depan, dan apabila hak-hak
                atau kewajiban dari tiap-tiap Pihak dari Perjanjian berdasarkan Perjanjian
                Pinjaman ini tidak akan terpengaruh secara material dan dengan demikian, (a)
                ketentuan tersebut akan sepenuhnya terpisah, (b) Perjanjian Pinjaman ini akan
                ditafsirkan dan dilaksanakan seolah-olah ketentuan yang ilegal, tidak sah atau
                tidak dapat dilaksanakan tersebut tidak pernah menjadi bagian dari Perjanjian
                Pinjaman ini dan (c) sisa ketentuan berdasarkan Perjanjian Pinjaman ini akan
                tetap berlaku dan tidak akan terpengaruh oleh ketentuan yang ilegal, tidak sah
                atau tidak dapat dilaksanakan tersebut.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">11.5<span style="mso-tab-count:
                1">&nbsp;&nbsp; </span>Kegagalan oleh masing-masing Pihak untuk melaksanakan sebagian
                atau seluruh hak-hak dalam Perjanjian Pinjaman ini, atau pelaksanaan sebagian
                dari hal itu, tidak dapat dianggap sebagai tindakan pelepasan atau
                pengesampingan terhadap hak-hak yang dimiliki tersebut atau secara umum tanpa
                harus menunda terjadinya atau terjadinya kembali peristiwa yang serupa atau
                peristiwa lain yang memunculkan hak tersebut.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">11.6<span style="mso-tab-count:
                1">&nbsp;&nbsp; </span>Perjanjian Pinjaman ini akan mengikat dan berlaku untuk keuntungan
                masing-masing Pihak dan berlaku untuk pewaris, penerus dan mereka yang
                ditunjuk. Perjanjian Pinjaman ini tidak memberi hak kepada orang atau badan
                hukum manapun yang bukan merupakan pihak berdasarkan Perjanjian Pinjaman ini,
                kecuali dinyatakan secara jelas dalam Perjanjian Pinjaman ini.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">11.7<span style="mso-tab-count:
                1">&nbsp;&nbsp; </span>Mengenai Perjanjian Pinjaman ini Penerima Pinjaman dan Pemberi
                Pinjaman sepakat untuk melepaskan ketentuan Pasal 1266 dari Kitab Undang-undang
                Hukum Perdata Indonesia.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">11.8<span style="mso-tab-count:
                1">&nbsp;&nbsp; </span>Masing-masing Pihak harus menanggung Pajak sehubungan dengan
                pelaksanaan Perjanjian sesuai dengan ketentuan hukum yang berlaku.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">11.9<span style="mso-tab-count:
                1">&nbsp;&nbsp; </span>Seluruh lampiran-lampiran, perubahan, penambahan dan/atau addendum
                dari Perjanjian Pinjaman ini merupakan satu kesatuan dan tidak dapat
                dipisahkan.&nbsp;<o:p></o:p></span></p>
                <br><p class="MsoNormal" style="margin-left:17.0pt;line-height:118%"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">DEMIKIAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                Arial">, Perjanjian Pinjaman ini ditandatangani dengan menggunakan tanda tangan
                elektronik<b style="mso-bidi-font-weight:normal"> </b>sebagaimana diatur dalam
                Undang-undang Republik Indonesia No.11 Tahun 2008 tentang Informasi dan Transaksi
                Elektronik oleh Para Pihak atau perwakilannya yang sah pada tanggal sebagaimana
                disebutkan di bagian awal Perjanjian Pinjaman ini dan akan mempunyai kekuatan
                hukum yang sama dengan Perjanjian yang dibuat dan ditandatangani secara basah.<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:14.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:94.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Untuk dan atas nama<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="line-height:13.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:88.0pt;mso-line-height-alt:0pt;
                tab-stops:345.0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PEMBERI
                PINJAMAN</span></b><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:normal"><span style="font-size:11.5pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">PENERIMA PINJAMAN<o:p></o:p></span></b></p>

                <p class="MsoNormal" style="line-height:17.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">PT SATU STOP SOLUSI<o:p></o:p></span></b></p>

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

                <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="line-height:17.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:35.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">______________________________________<o:p></o:p><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">______________________________________<o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:1.0pt;mso-line-height-rule:exactly"><!--[if gte vml 1]><v:line
                 id="_x0000_s1026" style='position:absolute;z-index:-251660288' from="298.05pt,-.45pt"
                 to="526.05pt,-.45pt" o:userdrawn="t" strokeweight="1pt"/><![endif]--><!--[if !vml]--><span style="mso-ignore:vglayout;position:relative;z-index:251656190"><span style="position:absolute;left:396px;top:-2px;width:307px;height:3px"><img width="307" height="3" src="file:///C:/Users/MFIQRI~1/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif" v:shapes="_x0000_s1026"></span></span><!--[endif]--><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                <p class="MsoNormal" style="line-height:16.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                <p class="MsoNormal" style="margin-left:58.0pt;mso-line-height-alt:0pt;
                tab-stops:394.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-bidi-font-family:Arial">Nama : <?php echo $data_direk[0]->management_menu_person;?></span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Nama : <?php echo $data_bio[0]->bio_fullname;?><o:p></o:p></span></p>
        </div>
      </div>
      <?php } else { ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <?php
                  $date = $data_term[0]->term_date; 
                  $day = date('D', strtotime($date));
                  $dayList = array(
                    'Sun' => 'Minggu',
                    'Mon' => 'Senin',
                    'Tue' => 'Selasa',
                    'Wed' => 'Rabu',
                    'Thu' => 'Kamis',
                    'Fri' => 'Jumat',
                    'Sat' => 'Sabtu'
                  );
                $idMax = $this->loan_model->loan_code();
                $noUrut =(int) substr($idMax[0]->maxID,3,9);
                $noUrut ++;
                $newID="LN".sprintf("%09s",$noUrut);
                $term_id = $newID."/SA/".date('m/Y');
                $no_sk = $newID."/SK/".date('m/Y');
                ?>
                <div class="WordSection1">

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">LAMPIRAN
                  II<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" align="right" style="text-align: center;
                  mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">FORM PERJANJIAN PINJAMAN BISNIS<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:1.0pt;mso-line-height-rule:exactly"><!--[if gte vml 1]><v:shapetype
                   id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
                   path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
                   <v:stroke joinstyle="miter"/>
                   <v:formulas>
                    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
                    <v:f eqn="sum @0 1 0"/>
                    <v:f eqn="sum 0 0 @1"/>
                    <v:f eqn="prod @2 1 2"/>
                    <v:f eqn="prod @3 21600 pixelWidth"/>
                    <v:f eqn="prod @3 21600 pixelHeight"/>
                    <v:f eqn="sum @0 0 1"/>
                    <v:f eqn="prod @6 1 2"/>
                    <v:f eqn="prod @7 21600 pixelWidth"/>
                    <v:f eqn="sum @8 21600 0"/>
                    <v:f eqn="prod @7 21600 pixelHeight"/>
                    <v:f eqn="sum @10 21600 0"/>
                   </v:formulas>
                   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
                   <o:lock v:ext="edit" aspectratio="t"/>
                  </v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" style='position:absolute;
                   margin-left:16pt;margin-top:11.65pt;width:529.25pt;height:3.5pt;z-index:-251659264'>
                   <v:imagedata src="file:///C:\Users\MFIQRI~1\AppData\Local\Temp\msohtmlclip1\01\clip_image001.jpg"
                    o:title=""/>
                  </v:shape><![endif]--><!--[if !vml]--><span style="mso-ignore:vglayout;position:
                  absolute;z-index:251657211;margin-left:21px;margin-top:15px;width:706px;
                  height:5px"><img width="706" height="5" src="file:///C:/Users/MFIQRI~1/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" v:shapes="_x0000_s1026"></span><!--[endif]--><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:17.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">PERJANJIAN PINJAMAN<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">No: <?php echo $data_term[0]->term_id ;?><o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Tertanggal
                  <?php echo date('d/m/Y', strtotime($date));?><o:p></o:p></span></p>

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

                  <p class="MsoNormal" style="line-height:19.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">antara<o:p></o:p></span></p>

                  
                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>


                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><?php echo $data_commercial[0]->borrower_business_name;?><o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">sebagai
                  Peminjam<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>


                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:19.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">dan<o:p></o:p></span></p>

                  

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:19.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="text-align: center;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">PT SATUSTOP SOLUSI<o:p></o:p></span></b></p>

                  </div>

                  <br><div class="WordSection2">

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span><b><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PERJANJIAN PINJAMAN </span></b><span style="font-size: 12pt; line-height: 118%; font-family: &quot;Times New Roman&quot;, serif;">ini (selanjutnya disebut sebagai “<b>Perjanjian
                  Pinjaman</b>”) dibuat dan<b> </b>ditandatangani
                  tanggal <?php echo date('d-m-Y');?> oleh dan antara:</span></p></div><div class="WordSection3">

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-30.2pt;
                  line-height:118%;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><?php echo $data_commercial[0]->borrower_business_name;?></span></b><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, suatu perusahaan yang didirikan
                  berdasarkan hukum Negara Republik Indonesia,<b style="mso-bidi-font-weight:
                  normal"> </b>beralamat di <?php echo $data_commercial[0]->borrower_address_company.",".@$data_province_commercial[0]->nama;?> yang dalam hal ini diwakili oleh
                  <?php echo $data_bio[0]->bio_fullname;?> dalam kedudukannya selaku Direktur, sebagai peminjam (“<b style="mso-bidi-font-weight:
                  normal">Penerima Pinjaman</b>”);<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-30.2pt;
                  line-height:118%;mso-list:l0 level1 lfo1;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">PT SATUSTOP SOLUSI</span></b><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, suatu
                  perusahaan yang didirikan berdasarkan hukum Negara<b style="mso-bidi-font-weight:
                  normal"> </b>Republik Indonesia, beralamat di <?php echo $data_contact[0]->contact_us_headquarter;?>, Indonesia, yang dalam hal ini
                  diwakili oleh <?php echo $data_direk[0]->management_menu_person;?> dalam kedudukannya selaku <?php echo $data_direk[0]->management_menu_position;?> yang dalam hal ini
                  bertindak selaku penerima kuasa dari pemberi pinjaman berdasarkan:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:63.0pt;text-indent:-16.0pt;mso-line-height-alt:
                  0pt;mso-list:l0 level2 lfo1;tab-stops:63.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(a)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">surat
                  kuasa No. <?php echo $data_term[0]->no_surat_kuasa;?> tanggal <?php echo date('d/m/Y', strtotime($date));?>;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:64.0pt;text-indent:-17.0pt;mso-line-height-alt:
                  0pt;mso-list:l0 level2 lfo1;tab-stops:64.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Surat
                  kuasa No. <?php echo $data_term[0]->no_surat_kuasa;?> tanggal <?php echo date('d/m/Y', strtotime($date));?>;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:63.0pt;text-indent:-16.0pt;mso-line-height-alt:
                  0pt;mso-list:l0 level2 lfo1;tab-stops:63.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">(c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Surat
                  kuasa No. <?php echo $data_term[0]->no_surat_kuasa;?> tanggal <?php echo date('d/m/Y', strtotime($date));?>;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">(selanjutnya
                  disebut sebagai “<b style="mso-bidi-font-weight:normal">Pemberi Pinjaman</b>”).<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:16.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:0cm;
                  margin-left:17.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">(Pemberi Pinjaman, Penerima Pinjaman, masing-masing disebut sebagai ”<b style="mso-bidi-font-weight:normal">Pihak</b>” dan secara bersama-sama disebut
                  sebagai ”<b style="mso-bidi-font-weight:normal">Para Pihak</b>”)<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:17.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">BAHWA</span></b><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-32.85pt;
                  line-height:118%;mso-list:l1 level1 lfo2;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">A.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman bersama dengan
                  PT SatuStop Solusi (“<b style="mso-bidi-font-weight:normal">SatuStop</b>”)
                  telah menandatangani Perjanjian Pemberian Fasilitas Pinjaman (“<b style="mso-bidi-font-weight:normal">Perjanjian Pemberian Fasilitas Pinjaman</b>”)
                  yang mana SatuStop bertindak selaku pengatur transaksi pemberian fasilitas
                  pinjaman melalui Situs (sebagaimana didefinisikan di bawah ini) yang dikelola
                  SatuStop sehingga Penerima Pinjaman bisa memperoleh pinjaman dari satu atau
                  lebih investor;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-32.2pt;
                  line-height:117%;mso-list:l1 level1 lfo2;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">B.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Para Pihak dengan ini sepakat
                  untuk menuangkan kesepakatan Pinjaman yang diberikan oleh Pemberi Pinjaman
                  kepada Penerima Pinjaman melalui sistem dalam Situs yang dikelola oleh
                  SatuStop dalam suatu instrumen hukum yang akan menjadi dasar dari adanya
                  Pinjaman tersebut dari Pemberi Pinjaman kepada Penerima Pinjaman.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:17.0pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">OLEH KARENA ITU, Para Pihak setuju untuk mengadakan Perjanjian Pinjaman
                  ini berdasarkan syarat-syarat dan ketentuan-ketentuan sebagai berikut:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:337.0pt;margin-bottom:
                  0cm;margin-left:48.0pt;margin-bottom:.0001pt;text-indent:-31.2pt;line-height:
                  205%;mso-list:l2 level1 lfo3;tab-stops:47.25pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">DEFINISI DAN PENAFSIRAN </span></b><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:205%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"> </span></p></div><div class="WordSection5">

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.1</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Definisi<o:p></o:p></span></p>

                    

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Seluruh istilah-istilah yang digunakan dalam
                  Perjanjian Pinjaman ini memiliki arti sebagaimana sebagai berikut:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:1.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b style="mso-bidi-font-weight:normal">Jangka Waktu Pinjaman</b>”
                  adalah sebagaimana dimaksud dalam Pasal 3 Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">“<b style="mso-bidi-font-weight:normal">Jaminan
                  Pribadi</b>” adalah akta jaminan pribadi dan ganti kerugian yang apabila
                  diminta oleh SatuStop untuk ditandatangani dan akan dibuat di hadapan notaris
                  di Jakarta, oleh dan antara pemberi jaminan pribadi dan pihak yang bertindak
                  mewakili Pemberi Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">“<b style="mso-bidi-font-weight:normal">Klien</b>” adalah klien yang tercatat dalam
                  Lampiran I Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:1.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b style="mso-bidi-font-weight:normal">Pelunasan Dipercepat</b>” adalah
                  sebagaimana dimaksud dalam Pasal 4.2.1 Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:8.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b style="mso-bidi-font-weight:normal">Pinjaman</b>” adalah pinjaman
                  yang diberikan oleh Pemberi Pinjaman kepada Penerima Pinjaman melalui Situs
                  yang didasarkan pada Piutang yang Memenuhi Syarat;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b style="mso-bidi-font-weight:normal">Piutang</b>” adalah yang
                  berkenaan dengan setiap kontrak pekerjaan, piutang yang harus dibayarkan oleh
                  Klien kepada Penerima Pinjaman dalam jumlah yang setara dengan nilai tagihan
                  dari suatu kontrak pekerjaan, termasuk Pajak berdasarkan kontrak pekerjaan
                  tersebut.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">“<b style="mso-bidi-font-weight:normal">Piutang Yang Memenuhi Syarat</b>” adalah
                  setiap piutang yang memenuhi kriteria berikut:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.25pt;mso-line-height-alt:
                  0pt;mso-list:l3 level1 lfo4;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">dinyatakan dalam mata uang rupiah;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.95pt;mso-line-height-alt:
                  0pt;mso-list:l3 level1 lfo4;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">terkait dengan Penerima Pinjaman yang tidak
                  melanggar jaminan atau janji apa pun; dan<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.25pt;mso-line-height-alt:
                  0pt;mso-list:l3 level1 lfo4;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">terkait dengan suatu kontrak pekerjaan;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.95pt;line-height:
                  114%;mso-list:l3 level1 lfo4;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">d.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">yang disetujui oleh koordinator
                  fasilitas sebagaimana diatur dalam Perjanjian Pemberian Fasilitas Pinjaman. ;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.25pt;line-height:
                  114%;mso-list:l3 level1 lfo4;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">e.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">yang nilai tagihannya, pada saat
                  dijumlahkan dengan jumlah keseluruhan yang masih terutang berdasarkan pinjaman
                  tidak melebihi jumlah maksimum pinjaman yang tersedia;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:9.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b style="mso-bidi-font-weight:normal">Rekening Pembayaran Pinjaman</b>”
                  adalah sebagaimana dimaksud dalam Pasal 4.1.2 Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">“<b style="mso-bidi-font-weight:normal">Situs</b>” adalah situs </span><a href="https://www.sanders.co.id/"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial;color:#0000CC">www.sanders.co.id</span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial;
                  color:windowtext"> </span></a><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">yang dikelola oleh SatuStop;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">“<b style="mso-bidi-font-weight:normal">Tagihan</b>”
                  adalah tagihan Penerima Pinjaman kepada Klien berdasarkan kontrak pekerjaan
                  antara Penerima Pinjaman dan Klien yang merupakan dokumen yang mendasari
                  Pinjaman yang akan diterima oleh Penerima Pinjaman sebagaimana tersebut dalam
                  Lampiran I Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;line-height:118%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">“<b style="mso-bidi-font-weight:normal">Tanggal Jatuh Tempo</b>” adalah
                  tanggal yang tercantum dalam Tagihan yang mana tanggal pembayaran Klien kepada
                  Penerima Pinjaman;<o:p></o:p></span></p>

                  </div>

                  <div class="WordSection6"><p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><br></p></div><div class="WordSection7">

                  <p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">“<b style="mso-bidi-font-weight:normal">Wanprestasi</b>” adalah sebagaimana
                  dimaksud dalam Pasal 10 Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                  line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.2</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Judul-judul yang digunakan dalam Perjanjian Pinjaman ini hanya untuk
                  kemudahan dan tidak mempunyai pengaruh apapun terhadap konstruksi Perjanjian
                  Pinjaman serta tidak dapat digunakan untuk menafsirkan ketentuan pasal yang
                  bersangkutan.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                  line-height:116%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.3</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Kecuali ditentukan lain, referensi pada ketentuan peraturan
                  perundang-undangan adalah ketentuan peraturan perundang-undangan yang
                  bersangkutan beserta perubahannya dari waktu ke waktu.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                  line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">1.4</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Kecuali disyaratkan lain, acuan terhadap suatu pasal, ayat atau lampiran
                  Perjanjian Pinjaman ini adalah acuan terhadap pasal, ayat atau lampiran adalah
                  acuan terhadap pasal, ayat atau lampiran Perjanjian Pinjaman ini, dan acuan
                  terhadap Perjanjian Pinjaman ini adalah acuan terhadap Perjanjian Pinjaman ini
                  beserta lampirannya.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l4 level1 lfo5;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PENYEDIAAN
                  PINJAMAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;line-height:116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Dengan tunduk pada ketentuan-ketentuan dari Perjanjian Pinjaman ini dan
                  yang terdapat dalam Situs dan Perjanjian Pemberian Fasilitas Pinjaman, Pemberi
                  Pinjaman telah setuju untuk menyediakan suatu Pinjaman sebagaimana dirinci
                  dalam Lampiran I.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l4 level1 lfo5;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">JANGKA
                  WAKTU PINJAMAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:47.0pt;margin-bottom:.0001pt;text-align:justify;line-height:116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Jangka waktu Pinjaman ditetapkan terhitung sejak tanggal pengiriman atas
                  seluruh jumlah Pinjaman secara penuh sampai dengan Tanggal Jatuh Tempo yaitu
                  tanggal :loan due date dan dapat diperpanjang sesuai dengan kesepakatan dari
                  Para Pihak (“<b style="mso-bidi-font-weight:normal">Jangka Waktu Pinjaman</b>”).<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:160.0pt;margin-bottom:
                  0cm;margin-left:48.0pt;margin-bottom:.0001pt;text-indent:-31.2pt;line-height:
                  205%;mso-list:l4 level1 lfo5;tab-stops:47.25pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:205%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">PEMBAYARAN PINJAMAN DAN PELUNASAN DIPERCEPAT </span></b></p>

                  <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                  tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">4.1</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                  normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Pembayaran Pinjaman<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:1.0pt;mso-line-height-rule:exactly"><!--[if gte vml 1]><v:line
                   id="_x0000_s1027" style='position:absolute;z-index:-251658240' from="434.4pt,-87.9pt"
                   to="440.4pt,-87.9pt" o:userdrawn="t" strokeweight="1pt"/><![endif]--><!--[if !vml]--><span style="mso-ignore:vglayout;position:relative;z-index:251658235"><span style="position:absolute;left:578px;top:-118px;width:10px;height:2px"><img width="10" height="2" src="file:///C:/Users/MFIQRI~1/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" v:shapes="_x0000_s1027"></span></span><!--[endif]--><!--[if gte vml 1]><v:line
                   id="_x0000_s1028" style='position:absolute;z-index:-251657216' from="457.7pt,-87.9pt"
                   to="463.7pt,-87.9pt" o:userdrawn="t" strokeweight="1pt"/><![endif]--><!--[if !vml]--><span style="mso-ignore:vglayout;position:relative;z-index:251659259"><span style="position:absolute;left:609px;top:-118px;width:10px;height:2px"><img width="10" height="2" src="file:///C:/Users/MFIQRI~1/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" v:shapes="_x0000_s1028"></span></span><!--[endif]--><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:17.95pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:112.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                  line-height:116%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.1<span style="mso-tab-count:
                  1">&nbsp; </span>Pinjaman dan jumlah lain yang terutang berdasarkan Perjanjian
                  Pinjaman harus dilunasi oleh Penerima Pinjaman dalam Jangka Waktu Pinjaman
                  sebagaimana diatur dalam Pasal 3 Perjanjian Pinjaman ini.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:112.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:116%;tab-stops:111.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.2<span style="mso-tab-count:1">&nbsp; </span>Pembayaran atas Angsuran dilakukan oleh
                  Penerima Pinjaman kepada Pemberi Pinjaman pada Hari Kerja ke rekening bank yang
                  ditentukan pada Lampiran II dari Perjanjian ini (“ <b style="mso-bidi-font-weight:
                  normal">Rekening Pembayaran Pinjaman</b>”).<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:112.0pt;margin-bottom:.0001pt;text-indent:-31.45pt;line-height:
                  114%;tab-stops:111.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.3<span style="mso-tab-count:
                  1">&nbsp; </span>Setiap pembayaran dari Penerima Pinjaman, akan dipergunakan untuk
                  pembayaran dengan urutan sebagai berikut:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:142.0pt;text-indent:-30.0pt;mso-line-height-alt:
                  0pt;mso-list:l5 level1 lfo6;tab-stops:142.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">biaya-biaya;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:142.0pt;text-indent:-30.7pt;mso-line-height-alt:
                  0pt;mso-list:l5 level1 lfo6;tab-stops:142.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">denda yang belum dibayarkan;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.5pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:142.0pt;text-indent:-30.0pt;mso-line-height-alt:
                  0pt;mso-list:l5 level1 lfo6;tab-stops:142.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Suku Bunga; dan<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:111.0pt;text-indent:0cm;mso-line-height-alt:
                  0pt;mso-list:l5 level1 lfo6"><!--[if !supportLists]--><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;"><span style="mso-list:Ignore">d.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">pokok pinjaman yang terutang<o:p></o:p></span></p>

                  </div>

                  <div class="WordSection8"><p class="MsoNormal" style="line-height:16.5pt;mso-line-height-rule:exactly"><br></p></div><div class="WordSection9">

                  <p class="MsoNormal" style="margin-left:112.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:114%;tab-stops:111.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.4<span style="mso-tab-count:1">&nbsp; </span>Apabila pembayaran atas Angsuran jatuh pada
                  hari libur nasional di Indonesia atau pada hari Sabtu atau Minggu, maka
                  pembayaran harus dilakukan pada Hari Kerja sebelumnya.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:112.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:111.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.1.5<span style="mso-tab-count:1">&nbsp; </span>Pelunasan Pinjaman apa pun dan jumlah lain apa
                  pun yang harus dibayarkan harus dilakukan dengan jumlah hasil piutang yang
                  terkait dengan Pinjaman tersebut. Apabila dengan alasan apa pun, Pemberi
                  Pinjaman tidak menerima jumlah tersebut dalam Rekening Pembayaran Pinjaman
                  sampai dengan Tanggal Jatuh Tempo, Pemberi Pinjaman berwenang untuk melakukan
                  tindakan yang diperlukan berdasarkan Perjanjian Pinjaman ini dan/atau
                  Perjanjian Pemberian Fasilitas Pinjaman.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:11.75pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                  tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">4.2</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                  normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Pelunasan Dipercepat<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:112.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:111.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.2.1<span style="mso-tab-count:1">&nbsp; </span>Penerima Pinjaman diperkenankan untuk
                  melakukan pembayaran seluruh Pinjaman lebih cepat dari waktu yang ditetapkan
                  dengan melakukan pemberitahuan tertulis sedikitnya 5 (lima) hari kerja sebelum
                  tanggal pelunasan dipercepat yang direncakan (“<b style="mso-bidi-font-weight:
                  normal">Pelunasan</b> <b style="mso-bidi-font-weight:normal">Dipercepat</b>”)
                  kepada Pemberi Pinjaman.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:112.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:111.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">4.2.2<span style="mso-tab-count:1">&nbsp; </span>Penerima Pinjaman tidak dikenakan denda
                  terhadap Pelunasan Dipercepat, namun Penerima Pinjaman diwajibkan melunasi
                  bunga kepada Pemberi Pinjaman senilai nominal yang akan terhutang apabila
                  seolah-olah Penerima Pinjaman tidak melakukan pembayaran dipercepat secara
                  sukarela.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:11.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                  tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">4.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                  normal"><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Pembayaran Sebagian<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:15.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Apabila Pemberi Pinjaman menerima pembayaran yang
                  tidak mencukupi untuk melunasi semua jumlah yang pada saat itu telah jatuh
                  tempo dan harus dibayarkan oleh Penerima Pinjaman, Pemberi Pinjaman akan
                  memotong pembayaran tersebut dari kewajiban-kewajiban Penerima Pinjaman
                  tersebut dengan urutan sebagai berikut:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                  -29.25pt;line-height:118%;mso-list:l6 level1 lfo7;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">pertama</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, pada saat atau menjelang
                  pembayaran secara pro rata atas setiap biaya, ongkos<b style="mso-bidi-font-weight:
                  normal"> </b>dan pengeluaran yang belum dibayarkan kepada Pemberi Pinjaman dan
                  agen lain yang ditunjuk oleh Pemberi Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                  -29.95pt;line-height:118%;mso-list:l6 level1 lfo7;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">kedua</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, pada saat atau menjelang
                  pembayaran secara pro rata atas setiap bunga yang<b style="mso-bidi-font-weight:
                  normal"> </b>terakumulasi, biaya, komisi, ongkos, ganti rugi dan pengeluaran
                  (selain yang ditentukan dalam poin (a) Pasal 4.3 di atas) yang telah jatuh
                  tempo tetapi belum dibayarkan berdasarkan Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:1.0pt;margin-bottom:0cm;
                  margin-left:109.0pt;margin-bottom:.0001pt;text-indent:-29.25pt;line-height:
                  118%;mso-list:l6 level1 lfo7;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">ketiga</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, pada saat atau menjelang
                  pembayaran secara pro rata atas setiap jumlah pokok<b style="mso-bidi-font-weight:
                  normal"> </b>yang telah jatuh tempo tetapi belum dibayarkan berdasarkan
                  Perjanjian Pinjaman ini; dan<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.95pt;line-height:
                  118%;mso-list:l6 level1 lfo7;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">d.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">keempat</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">, pada saat atau menjelang
                  pembayaran secara pro rata atas jumlah lain apa pun<b style="mso-bidi-font-weight:
                  normal"> </b>yang telah jatuh tempo tetapi belum dibayarkan.</span></p></div><div class="WordSection11">

                  <p class="MsoNormal" style="line-height:14.3pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l7 level1 lfo8;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">SUKU
                  BUNGA, BIAYA-BIAYA DAN DENDA KETERLAMBATAN</span></b><span style="font-size:
                  12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                  tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">5.1</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                  normal"><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Suku Bunga<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:15.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Suku bunga yang digunakan terhadap Pinjaman adalah sebagaimana
                  disebutkan dalam term sheet dan Lampiran I Perjanjian Pinjaman ini.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                  tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">5.2</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                  normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Biaya-biaya<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Atas Pinjaman yang diberikan oleh Pemberi Pinjaman, Penerima Pinjaman
                  wajib membayar biaya dan pengeluaran sebagai berikut :<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                  -29.25pt;line-height:117%;mso-list:l8 level1 lfo9;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman setuju untuk
                  membayar seluruh biaya-biaya (termasuk biaya hukum) sehubungan dengan
                  penandatanganan, pelaksanaan termasuk eksekusi dari Perjanjian, atau perjanjian
                  lainnya yang disebutkan di sini yang pembayarannya akan dilakukan dengan cara
                  pengurangan langsung dari jumlah yang ditarik atau cara lain yang merupakan
                  diskresi dari Pemberi Pinjaman.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                  -29.95pt;line-height:117%;mso-list:l8 level1 lfo9;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Apabila Penerima Pinjaman meminta
                  perubahan, pelepasan hak atau izin, Penerima Pinjaman harus, dalam jangka waktu
                  5 (lima) Hari Kerja setelah diminta, memberikan penggantian biaya kepada
                  Pemberi Pinjaman atas jumlah dari semua biaya dan pengeluaran (termasuk biaya
                  hukum) yang ditanggung secara wajar oleh pihak tersebut dalam menanggapi,
                  mengevaluasi, merundingkan atau memenuhi permintaan atau persyaratan tersebut.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:11.75pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt;
                  tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">5.3</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:
                  normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Denda Keterlambatan<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Pemberi Pinjaman dapat mengenakan denda keterlambatan kepada Penerima
                  Pinjaman sebagaimana diatur pada ketentuan-ketentuan pinjaman Lampiran I
                  Perjanjian Pinjaman ini.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l9 level1 lfo10;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">6.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">JAMINAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">6.1Apabila disyaratkan oleh SatuStop, Penerima
                  Pinjaman akan memberikan Jaminan Pribadi kepada Penerima Pinjaman guna menjamin
                  pelaksanaan pembayaran Pinjaman yang diterima oleh Penerima Pinjaman
                  berdasarkan Perjanjian Pinjaman ini;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">6.2&nbsp; &nbsp; &nbsp;Selain Jaminan Pribadi, selama masih terdapat
                  jumlah yang belum dibayarkan oleh Penerima Pinjaman berdasarkan Perjanjian
                  Pinjaman ini, apabila disyaratkan, Penerima Pinjaman wajib memberikan jaminan
                  sebagai agunan kepada Pemberi Pinjaman dalam bentuk, jumlah, nilai serta dengan
                  cara dan persyaratan yang ditentukan oleh Pemberi Pinjaman, termasuk namun
                  tidak terbatas pada jaminan tambahan atau jaminan pengganti segera setelah
                  diminta oleh Pemberi Pinjaman.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:48.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">6.3&nbsp; &nbsp;&nbsp;</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; text-align: justify;">Apabila ada jaminan tambahan atau jaminan pengganti
                  yang diminta oleh Pemberi Pinjaman, maka&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Para Pihak, sehubungan dengan pemberian
                  jaminan tersebut, dengan adanya persetujuan tertulis&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;terlebih dahulu dari
                  pihak-pihak yang berwenang, akan membuat dan menandatangani suatu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;perjanjian
                  jaminan bersama dan/atau dokumen jaminan lainnya.</span></p></div><div class="WordSection13">

                  <p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l10 level1 lfo11;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">7.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PEMULIHAN
                  PINJAMAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Untuk lebih menjamin ketertiban pembayaran kembali
                  atas segala apa yang terutang oleh Penerima Pinjaman kepada Pemberi Pinjaman
                  baik karena utang-utang pokok, bunga, biaya-biaya lain sehubungan dengan
                  Pinjaman yang telah lewat tanggal jatuh tempo, Penerima Pinjaman dengan ini
                  mengizinkan Pemberi Pinjaman atau kuasanya untuk melakukan upaya yang
                  diperlukan oleh Pemberi Pinjaman termasuk namun tidak terbatas pada (i)
                  menghubungi Penerima Pinjaman (ii) menggunakan jasa pihak ketiga untuk
                  melakukan penagihan atas segala yang terutang dan telah melewati tanggal jatuh
                  tempo.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.3pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l10 level1 lfo11;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">8.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">HAL YANG
                  DILARANG</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">8.1&nbsp; &nbsp; &nbsp;Kecuali ditentukan lain oleh Pemberi Pinjaman
                  atau kuasanya, terhitung sejak tanggal Perjanjian Pinjaman sampai dengan
                  dilunasinya seluruh kewajiban yang terutang oleh Penerima Pinjaman kepada Pemberi
                  Pinjaman, Penerima Pinjaman dilarang mengalihkan setiap hak dan kewajiban di
                  Perjanjian Pinjaman dan Perjanjian Pemberian Fasilitas Pinjaman (termasuk juga
                  hak dan kewajiban dan setiap dokumen pelengkapnya) kepada pihak manapun.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">8.2&nbsp; &nbsp; &nbsp; Penerima Pinjaman menyatakan dan menjamin kepada
                  Pemberi Pinjaman bahwa Penerima Pinjaman tidak akan mengalihkan, menjual,
                  menganjakpiutangkan, menjaminkan atau menggunakan Tagihan sebagai dasar untuk
                  memperoleh pinjaman dari pihak ketiga manapun atas Tagihan.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.2pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-30.2pt;mso-line-height-alt:
                  0pt;mso-list:l10 level1 lfo11;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">9.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PERNYATAAN
                  DAN JAMINAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;line-height:114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Penerima Pinjaman dengan ini berjanji, menyatakan dan menjamin kepada
                  Pemberi Pinjaman sebagai berikut:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -29.5pt;line-height:117%;mso-list:l10 level2 lfo11;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman memiliki hak
                  yang sah, kekuasaan dan kewenangan penuh untuk menandatangani, pelaksanaan dan
                  pemenuhan Perjanjian Pinjaman ini. Penandatanganan dan pemenuhan Perjanjian
                  Pinjaman ini adalah sah dan mengikat untuk dilaksanakan dalam segala hal
                  terhadap Penerima Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -30.2pt;line-height:116%;mso-list:l10 level2 lfo11;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Perjanjian Pinjaman ini dan
                  dokumen lain yang disebutkan dalam Perjanjian Pinjaman ini, merupakan kewajiban
                  yang sah dan mengikat untuk dilaksanakan sesuai dengan ketentuannya
                  masing-masing;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -29.5pt;line-height:117%;mso-list:l10 level2 lfo11;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">tidak terdapat perkara di
                  pengadilan atau tidak terdapat gugatan atau kemungkinan perkara terhadap
                  Penerima Pinjaman termasuk juga perkara apapun yang berhubungan dengan badan
                  pemerintahan atau badan administratif lainnya atau hal-hal lainnya yang
                  mengancam Penerima Pinjaman yang apabila terjadi dan diputuskan tidak memihak
                  kepada Penerima Pinjaman akan mempengaruhi kemampuan keuangan Penerima Pinjaman
                  atau kemampuannya untuk membayar secara tepat waktu setiap jumlah terutang
                  berdasarkan Perjanjian Pinjaman dan/atau&nbsp;</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">dokumen
                  lainnya atau setiap perubahan atau pelengkapnya;</span></p></div><div class="WordSection15">

                  <p class="MsoNormal" style="line-height:13.35pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -30.2pt;line-height:117%;mso-list:l11 level2 lfo12;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">d.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penandatanganan dan pelaksanaan Perjanjian
                  Pinjaman ini oleh Penerima Pinjaman, dan transaksi-transaksi yang diatur dalam
                  Perjanjian tersebut, tidak dan tidak akan bertentangan dengan: (i)
                  undang-undang atau peraturan yang berlaku; atau (ii) setiap perjanjian atau
                  instrumen yang mengikat atas Penerima Pinjaman atau salah satu aset miliknya
                  atau merupakan suatu Wanprestasi atau peristiwa pengakhiran berdasarkan setiap
                  perjanjian atau instrumen apapun yang memiliki atau secara wajar kemungkinan
                  memiliki suatu dampak yang bersifat material terhadap Penerima Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.8pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -29.5pt;line-height:117%;mso-list:l11 level2 lfo12;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">e.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman menyatakan dan
                  menjamin kepada Pemberi Pinjaman bahwa Penerima Pinjaman tidak akan
                  mengalihkan, menjual, menganjakpiutangkan, menjaminkan atau menggunakan Tagihan
                  sebagai dasar untuk memperoleh pinjaman dari pihak ketiga manapun atas Tagihan;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -28.2pt;line-height:116%;mso-list:l11 level2 lfo12;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">f.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman akan segera
                  memberitahu kepada Pemberi Pinjaman setiap terjadinya Wanprestasi kejadian lain
                  yang dengan diberitahukan atau lewatnya waktu atau keduanya akan merupakan
                  Wanprestasi;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -30.2pt;line-height:117%;mso-list:l11 level2 lfo12;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">g.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman tidak sedang
                  dan tidak akan mengajukan permohonan penundaan pembayaran (surenseance van
                  betaling) terhadap Fasiltas Pinjaman yang diberikan berdasarkan Perjanjian ini
                  dan tidak menjadi insolvent atau dinyatakan pailit dan tidak kehilangan haknya
                  untuk mengurus atau menguasai harta bendanya;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -30.2pt;line-height:117%;mso-list:l11 level2 lfo12;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">h.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">semua informasi baik tertulis
                  maupun tidak tertulis yang diberikan kepada Pemberi Pinjaman melalui Situs oleh
                  Penerima Pinjaman dan perwakilannya, sewaktu diberikan dan setiap saat
                  setelahnya berdasarkan pengetahuan terbaiknya adalah benar, lengkap dan tepat
                  serta tidak menyesatkan dalam hal apapun dan tidak ada fakta yang tidak
                  diungkapakan yang memuat setiap informasi yang diberikan kepada Pemberi
                  Pinjaman atau kuasanya oleh Penerima Pinjaman menjadi tidak tepat atau menyesatkan.
                  Dalam hal terdapat perubahan atas dokumen persyaratan-persyaratan Penerima
                  Pinjaman diwajibkan untuk melakukan pembaharuan dan/atau pengkinian atas
                  informasi yang tersedia pada akun Penerima Pinjaman dan mengirimkan
                  dokumen-dokumen tersebut kepada Pemberi Pinjaman.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.05pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-36.2pt;mso-line-height-alt:
                  0pt;mso-list:l12 level1 lfo13;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">10.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">WANPRESTASI</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-align:justify;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Dengan memperhatikan ketentuan dalam Perjanjian
                  Pinjaman ini, dengan terjadinya salah satu dari kejadian-kejadian di bawah ini
                  (selanjutnya disebut sebagai "Wanprestasi") maka seluruh jumlah yang
                  terutang berdasarkan Perjanjian Pinjaman ini akan menjadi jatuh tempo dan harus
                  dibayar oleh Penerima Pinjaman kepada Pemberi Pinjaman dan Pemberi Pinjaman
                  dapat melakukan tindakan apapun juga yang dianggap perlu berdasarkan Perjanjian
                  Pinjaman dan/atau Perjanjian Pemberian Fasilitas Pinjaman, perjanjian lainnya
                  yang dilakukan oleh Penerima Pinjaman dan Pemberi Pinjaman, sesuai dengan
                  peraturan perundang-undangan yang berlaku untuk menjamin pembayaran atas
                  padanya:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.8pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -29.5pt;line-height:114%;mso-list:l12 level2 lfo13;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman tidak
                  melaksanakan kewajibannya berdasarkan Perjanjian ini dan/atau perjanjian
                  lainnya yang dilakukan antara Pemberi Pinjaman dan Penerima Pinjaman yang&nbsp;</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">mengakibatkan berakhirnya Perjanjian Pinjaman
                  dan/atau Perjanjian Pemberian Fasilitas Pinjaman, ini dan perjanjian lainnya
                  yang dilakukan antara Pemberi Pinjaman dan Penerima Pinjaman;</span></p></div><div class="WordSection17">

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -30.2pt;line-height:117%;mso-list:l13 level2 lfo14;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; &nbsp; &nbsp; &nbsp; </span></span></span><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">apabila pernyataan, jaminan dan
                  janji Penerima Pinjaman dalam Perjanjian Pinjaman ini dan perjanjian lainnya
                  yang dilakukan antara Pemberi Pinjaman dan Penerima Pinjaman yang disebutkan di
                  sini menjadi atau dapat dibuktikan menjadi tidak benar, tidak akurat atau
                  menyesatkan;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -29.5pt;line-height:117%;mso-list:l13 level2 lfo14;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima Pinjaman (i) mengajukan
                  permohonan pernyataan kepailitan atas dirinya atau (ii) memiliki tindakan atas
                  dirinya yang apabila tidak dihentikan dalam waktu 30 (tiga puluh) hari kalender
                  dapat mengarah kepada pernyataan tidak mampu membayar utang atau pailit oleh
                  Penerima Pinjaman;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.7pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -30.2pt;line-height:116%;mso-list:l13 level2 lfo14;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">d.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:116%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">pengadilan atau badan
                  pemerintahan lainnya menyatakan bahwa Perjanjian Pinjaman atau dokumen-dokumen
                  atau bagian daripadanya adalah batal demi hukum atau menjadi tidak mengikat
                  Para Pihak; atau<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:77.0pt;text-align:justify;text-indent:
                  -29.5pt;line-height:117%;mso-list:l13 level2 lfo14;tab-stops:77.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">e.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">terjadinya gangguan di dalam
                  pasar keuangan atau situasi ekonomi atau perubahan lainnya yang berdampak
                  negatif termasuk dan tidak terbatas pada setiap tindakan dari pihak yang
                  berwenang untuk melikuidasi atau menghentikan usaha bisnis atau pekerjaan
                  Penerima Pinjaman yang menurut pendapat Pemberi Pinjaman dapat menghalangi,
                  menunda atau membuat Penerima Pinjaman tidak mampu memenuhi
                  kewajiban-kewajibannya dalam Perjanjian ini.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.35pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-36.2pt;mso-line-height-alt:
                  0pt;mso-list:l14 level1 lfo15;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">11.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">HUKUM
                  YANG BERLAKU DAN PENYELESAIAN SENGKETA<span style="mso-spacerun:yes">&nbsp; </span></span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">11.1 Perjanjian ini dan pelaksanaanya ini diatur
                  oleh dan ditafsirkan sesuai dengan hukum yang berlaku di Republik Indonesia.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">11.2 Apabila terjadi perselisihan antara Para Pihak
                  sehubungan dengan pelaksanaan Perjanjian Pinjaman ini, Para Pihak sepakat untuk
                  menyelesaikannya secara musyawarah. Apabila cara musyawarah tidak tercapai,
                  maka Para Pihak sepakat untuk menyerahkan penyelesaiannya melalui Arbitrase
                  yang akan dilaksanakan di Jakarta, pada Kantor Badan Arbitrase Nasional
                  Indonesia (“BANI”), oleh 3 (tiga) Arbitrator yang ditunjuk sesuai dengan
                  ketentuan peraturan dan prosedur yang diberlakukan BANI. Keputusan arbiter
                  adalah keputusan yang final, mengikat dan terhadapnya tidak diperbolehkan upaya
                  hukum perlawanan, banding atau kasasi.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.3pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:47.0pt;text-indent:-36.2pt;mso-line-height-alt:
                  0pt;mso-list:l14 level1 lfo15;tab-stops:47.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">12.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">KETENTUAN
                  LAIN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:15.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-indent:-31.5pt;line-height:
                  116%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:116%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">12.1 Setiap komunikasi yang akan dilakukan antara
                  Para Pihak berdasarkan atau sehubungan dengan Perjanjian ini dapat dilakukan
                  melalui surat elektronik atau media elektronik lainnya, apabila Para Pihak:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-indent:-29.25pt;line-height:
                  114%;mso-list:l14 level3 lfo15;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">menyetujui bahwa, kecuali dan
                  sampai diberikan pemberitahuan yang bertentangan, surat elektronik atau media
                  elektronik tersebut akan menjadi bentuk komunikasi yang diterima;<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.0pt;mso-line-height-rule:exactly"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:109.0pt;text-align:justify;text-indent:
                  -29.95pt;line-height:114%;mso-list:l14 level3 lfo15;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">memberitahukan secara tertulis
                  kepada satu sama lain alamat surat elektronik mereka dan/atau informasi lain
                  apa pun yang diperlukan untuk memungkinkan pengiriman dan&nbsp;</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;">penerimaan
                  informasi melalui media tersebut; dan</span></p></div><div class="WordSection19">

                  <p class="MsoNormal" style="line-height:15.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:109.0pt;margin-bottom:.0001pt;text-indent:-29.25pt;line-height:
                  114%;mso-list:l15 level1 lfo16;tab-stops:109.0pt"><!--[if !supportLists]--><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </span></span></span><!--[endif]--><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">memberitahukan kepada satu sama
                  lain setiap perubahan pada alamat surat elektronik (email) mereka atau
                  informasi lain apa pun yang diserahkan oleh mereka.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;line-height:117%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:117%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">Setiap Pihak akan memberitahukan kepada Pihak lain segera setelah
                  mengetahui bahwa sistem surat elektronik miliknya tidak berfungsi karena adanya
                  kerusakan teknis (dan kerusakan tersebut akan berlanjut atau mungkin akan
                  berlanjut selama lebih dari 24 jam). Setelah disampaikannya pemberitahuan
                  tersebut, sampai Pihak tersebut memberitahukan kepada Pihak lainnya bahwa
                  kerusakan teknis itu telah diperbaiki, semua pemberitahuan antara Para Pihak
                  tersebut akan dikirimkan melalui faks atau surat sesuai dengan Pasal 12.1 ini.
                  Pemberitahuan dan komunikasi sehubungan dengan Perjanjian ini akan disampaikan
                  kepada Para Pihak dengan alamat sebagai berikut:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.65pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                  tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Pemberi Pinjaman:</span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Penerima
                  Pinjaman:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                  tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">U.p: PT. SATUSTOP SOLUSI</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">U.p: <?php echo $data_bio[0]->bio_fullname;?><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                  tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Alamat Surat Elektronik:</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Alamat
                  Surat Elektronik:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:2.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                  tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><?php echo $data_contact[0]->contact_us_email;?></span><span style="font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><?php echo $check_data[0]->register_email;?><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:19.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                  tab-stops:345.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">No. Telp:</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span><span style="font-size:11.5pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">No. Telp:<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:2.7pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:80.0pt;mso-line-height-alt:0pt;
                  tab-stops:336.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><?php echo $data_contact[0]->contact_us_phone;?></span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><?php echo $data_commercial[0]->borrower_office_number;?><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                  line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">12.2<span style="mso-tab-count:
                  1">&nbsp;&nbsp; </span>Setiap syarat atau ketentuan dari Perjanjian Pinjaman ini dapat
                  dikesampingkan setiap saat oleh Pihak yang berhak atas manfaat daripadanya,
                  tetapi pengesampingan tersebut tidak akan efektif kecuali dituangkan dalam
                  bentuk tertulis yang dilaksanakan sebagaimana mestinya oleh atau atas nama
                  Pihak yang mengesampingkan syarat atau ketentuan tersebut. Tidak ada
                  pengesampingan oleh Pihak manapun akan syarat atau ketentuan apapun dalam
                  Perjanjian Pinjaman ini, dalam satu atau lebih hal, harus dianggap atau
                  ditafsirkan sebagai pengesampingan akan syarat dan ketentuan yang sama ataupun
                  lain dari Perjanjian Pinjaman ini pada setiap kesempatan di masa depan. Semua
                  upaya hukum, baik berdasarkan Perjanjian Pinjaman ini atau oleh Hukum atau
                  lainnya yang dapat diberikan, akan berlaku secara kumulatif dan bukan
                  alternatif.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.65pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.0pt;margin-bottom:0cm;
                  margin-left:79.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-31.45pt;
                  line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">12.3<span style="mso-tab-count:
                  1">&nbsp;&nbsp; </span>Tidak ada perubahan, amandemen atau pengesampingan Perjanjian
                  Pinjaman ini yang akan berlaku atau mengikat kecuali dibuat secara tertulis
                  dan, dalam hal perubahan atau amandemen, ditandatangani oleh Para Pihak dan
                  dalam hal pengesampingan, oleh Pihak yang mengesampingkan terhadap siapa
                  pengesampingan akan dilakukan. Setiap pengesampingan oleh salah satu Pihak akan
                  hak apapun dalam Perjanjian Pinjaman ini atau setiap pelanggaran Perjanjian
                  Pinjaman ini oleh Pihak lain tidak dapat diartikan sebagai diabaikannya hak
                  lainnya atau bentuk pelanggaran lainnya oleh Pihak lain tersebut, baik dengan
                  sifat yang sama atau sifat berbeda daripadanya.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.95pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:78.0pt;text-indent:-1.0cm;line-height:
                  114%"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:114%;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">12.4<span style="mso-spacerun:yes">&nbsp; </span>Jika
                  ketentuan apapun dalam Perjanjian Pinjaman ini dianggap ilegal, tidak sah atau
                  tidak dapat dilaksanakan berdasarkan Hukum yang berlaku sekarang atau di masa
                  depan, dan apabila hak-</span><span style="font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; text-align: justify;">hak atau kewajiban dari tiap-tiap Pihak dari
                  Perjanjian berdasarkan Perjanjian Pinjaman ini tidak akan terpengaruh secara
                  material dan dengan demikian, (a) ketentuan tersebut akan sepenuhnya terpisah,
                  (b) Perjanjian Pinjaman ini akan ditafsirkan dan dilaksanakan seolah-olah
                  ketentuan yang ilegal, tidak sah atau tidak dapat dilaksanakan tersebut tidak
                  pernah menjadi bagian dari Perjanjian Pinjaman ini dan (c) sisa ketentuan
                  berdasarkan Perjanjian Pinjaman ini akan tetap berlaku dan tidak akan
                  terpengaruh oleh ketentuan yang ilegal, tidak sah atau tidak dapat dilaksanakan
                  tersebut.</span></p></div><div class="WordSection21">

                  <p class="MsoNormal" style="line-height:12.85pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">12.5<span style="mso-tab-count:1">&nbsp;&nbsp; </span>Kegagalan oleh masing-masing Pihak untuk
                  melaksanakan sebagian atau seluruh hak-hak dalam Perjanjian Pinjaman ini, atau
                  pelaksanaan sebagian dari hal itu, tidak dapat dianggap sebagai tindakan
                  pelepasan atau pengesampingan terhadap hak-hak yang dimiliki tersebut atau
                  secara umum tanpa harus menunda terjadinya atau terjadinya kembali peristiwa
                  yang serupa atau peristiwa lain yang memunculkan hak tersebut.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:117%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:117%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">12.6<span style="mso-tab-count:1">&nbsp;&nbsp; </span>Perjanjian Pinjaman ini akan mengikat dan
                  berlaku untuk keuntungan masing-masing Pihak dan berlaku untuk pewaris, penerus
                  dan mereka yang ditunjuk. Perjanjian Pinjaman ini tidak memberi hak kepada
                  orang atau badan hukum manapun yang bukan merupakan pihak berdasarkan
                  Perjanjian Pinjaman ini, kecuali dinyatakan secara jelas dalam Perjanjian
                  Pinjaman ini.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">12.7<span style="mso-tab-count:1">&nbsp;&nbsp; </span>Mengenai Perjanjian Pinjaman ini Penerima
                  Pinjaman dan Pemberi Pinjaman sepakat untuk melepaskan ketentuan Pasal 1266
                  dari Kitab Undang-undang Hukum Perdata Indonesia.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">12.8<span style="mso-tab-count:1">&nbsp;&nbsp; </span>Masing-masing Pihak harus menanggung Pajak
                  sehubungan dengan pelaksanaan Perjanjian sesuai dengan ketentuan hukum yang
                  berlaku.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.05pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;text-align:justify;text-indent:
                  -31.45pt;line-height:114%;tab-stops:78.0pt"><span style="font-size:12.0pt;
                  mso-bidi-font-size:10.0pt;line-height:114%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">12.9<span style="mso-tab-count:1">&nbsp;&nbsp; </span>Seluruh lampiran-lampiran, perubahan,
                  penambahan dan/atau addendum dari Perjanjian Pinjaman ini merupakan satu
                  kesatuan dan tidak dapat dipisahkan.</span><span style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span></p></div>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:12.3pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:17.0pt;line-height:118%"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;line-height:118%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
                  &quot;Times New Roman&quot;;mso-bidi-font-family:Arial">DEMIKIAN</span></b><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;line-height:118%;font-family:
                  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
                  Arial">, Perjanjian Pinjaman ini ditandatangani dengan menggunakan tanda tangan
                  elektronik<b style="mso-bidi-font-weight:normal"> </b>sebagaimana diatur dalam
                  Undang-undang Republik Indonesia No.11 Tahun 2008 tentang Informasi dan
                  Transaksi Elektronik oleh Para Pihak atau perwakilannya yang sah pada tanggal sebagaimana
                  disebutkan di bagian awal Perjanjian Pinjaman ini dan akan mempunyai kekuatan
                  hukum yang sama dengan Perjanjian yang dibuat dan ditandatangani secara basah.<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:14.4pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:94.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Untuk dan atas nama<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:13.9pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:88.0pt;mso-line-height-alt:0pt;
                  tab-stops:345.0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">PEMBERI
                  PINJAMAN</span></b><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b style="mso-bidi-font-weight:normal"><span style="font-size:11.5pt;mso-bidi-font-size:
                  10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">PENERIMA PINJAMAN<o:p></o:p></span></b></p>

                  <p class="MsoNormal" style="line-height:17.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:79.0pt;mso-line-height-alt:0pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:12.0pt;mso-bidi-font-size:
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

                  <p class="MsoNormal" style="line-height:10.0pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="line-height:17.2pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <!-- <p class="MsoNormal" style="margin-left:35.0pt;mso-line-height-alt:0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">______________________________________<o:p></o:p></span></p> -->
                  <p class="MsoNormal" style="margin-left:35.0pt;mso-line-height-alt:0pt;tab-stops:297.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">______________________________________</span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">______________________________________<o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:1.0pt;mso-line-height-rule:exactly"><!--[if gte vml 1]><v:line
                   id="_x0000_s1029" style='position:absolute;z-index:-251656192' from="298.05pt,-.45pt"
                   to="526.05pt,-.45pt" o:userdrawn="t" strokeweight="1pt"/><![endif]--><!--[if !vml]--><span style="mso-ignore:vglayout;position:relative;z-index:251660283"><span style="position:absolute;left:396px;top:-2px;width:307px;height:3px"></span></span><!--[endif]--><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><o:p></o:p></span></p>

                  <p class="MsoNormal" style="line-height:16.55pt;mso-line-height-rule:exactly"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial"><o:p>&nbsp;</o:p></span></p>

                  <p class="MsoNormal" style="margin-left:33.0pt;mso-line-height-alt:0pt;
                  tab-stops:394.0pt"><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;
                  font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
                  mso-bidi-font-family:Arial">Nama : <?php echo $data_direk[0]->management_menu_person;?></span><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial"><span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
                  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Arial">Nama : <?php echo $data_bio[0]->bio_fullname;?><o:p></o:p></span></p>
        </div>

      </div>
      <?php } ?>
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
