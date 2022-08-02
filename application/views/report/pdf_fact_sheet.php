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
  <title>Fact Sheet</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/dist/css/AdminLTE.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/LTE/bootstrap/css/bootstrap.min.css"> -->
  <link defer href="<?php echo base_url() ?>assets/Sanders/custom/custom.css" rel="stylesheet">
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
  </style>
  <style>
    @page { margin: 100px 50px; }
    #header { position: fixed; left: 0px; top: -80px; right: 0px; height: 10px;text-align: left; }
    #footer { position: fixed; left: 0px; bottom: -100px; right: 0px; height: 40px;}
    #footer .page:after { content: counter(page, upper-roman); }
  </style>
</head>
<body>
<div id="header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-header navbar-top-1">
                    <div class="logo" style="position: relative;">
                            <div class="box-header" style="background-color:white;"> 
                                <img class="img-responsive img-logo" src="<?php echo base_url() ?>uploads/base-img/img_home/logoSanders.png" style="height:50px;width:160px;margin-top:-5px">
                            </div>
                    </div>
              </nav>
          </div>
      </div>

</div>
    <div class="content" style="margin: 0 ">
      <!-- <h2>Fact Sheet</h2> -->
      <?php if (@$data_loan[0]->loan_type == "Personal Loan") {
                # code...
        ?>
      <div class="row">
        <div class="col-sm-8" style="position: relative;">
          <div class="box box-solid" style="border-top:3px solid #0000ff;">
            <div class="box-header with-border" style="border-bottom:1px solid #0000ff;background-color:#6495ed;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Informasi Peminjam :</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <dt>Peminjam bekerja sebagai :</dt>
                <dd><?php echo @$data_bio_borrower[0]->bio_occupation ;?></dd>
                        <dt>Peminjam bekerja di perusahaan/instansi :</dt>
                <dd><?php echo @$data_consumtive[0]->borrower_name_company ;?></dd>
                <dt>Alamat Tempat Kerja Peminjam :</dt>
                <dd><?php echo @$data_consumtive[0]->borrower_address_company ;?> <?php echo @$data_district_consumtive[0]->nama; ?> <?php echo @$data_city_consumtive[0]->nama; ?> Provinsi <?php echo @$data_province_consumtive[0]->nama; ?></dd>
                        <dt>Usia pensiun peminjam :</dt>
                <dd><?php echo @$data_consumtive[0]->borrower_age_retirement ;?> tahun</dd>
                        <dt>Usia Peminjam saat ini :</dt>
                  <?php
                    //date in mm/dd/yyyy format; or it can be in other formats as well
                    $birthDate = date('d/m/Y', strtotime(@$data_bio_borrower[0]->bio_birth_date));
                    //explode the date to get month, day and year
                    
                    $birthDate = explode("/", $birthDate);
                    //get age from date or birthdate
                    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                      ? ((date("Y") - $birthDate[2]) - 1)
                      : (date("Y") - $birthDate[2]));
                    
                  ?>
                <dd><?php echo $age;?> tahun</dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-solid" style="border-top:3px solid #0000ff;">
            <div class="box-header with-border" style="border-bottom:1px solid #0000ff;background-color:#6495ed;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Analisa Kemampuan Bayar :</h2>
            </div>
            <div class="box-body">
              <dl>
                <?php 
                  $tanggungan = @$data_consumtive[0]->borrower_dependents;
                  $tot_tanggungan = $tanggungan * 500000;
                  foreach ($data_loan as $loan_entry) {
                      $total_principal = $this->manually_model->get_principal_sum($loan_entry->register_code);
                      $total_interest = $this->manually_model->get_interest_sum($loan_entry->register_code);

                      $principal = @$total_principal[0]->total_principal;
                      $interest = @$total_interest[0]->total_interest;

                      $angsuran = $principal + $interest;
                      $dsc = @$data_consumtive[0]->borrower_montly_income - $angsuran;


                      // var_dump($dsc);
                      // die();
                  }

                ?>
                <p style="text-align: justify;">
                    Berdasarkan hasil analisa slip gaji dan yang tertera pada rekening borrower, pendapatan bersih
                    yang diterima sebesar Rp <?php echo number_format(@$data_consumtive[0]->borrower_montly_income,0,".",".");?>. Borrower memiliki tanggungan sebanyak <?php echo $tanggungan;?> orang, sehingga asumsi biaya hidup sebesar Rp <?php echo number_format($tot_tanggungan,0,".",".") ;?>,00 (asumsi 1 orang tanggungan biaya hidup 500rb).
                    Berdasarkan hasil BI Checking borrower memiliki tanggungan angsuran sebesar Rp
                    0 (jika ada, jika tidak diisi borrower tidak memiliki fasilitas pinjaman).
                    Angsuran baru yang timbul melalui aplikasi pengajuan ini sebesar Rp <?php echo number_format($angsuran,0,".",".");?>,00
                    Sehingga perhitungan DSC = Rp. <?php echo number_format($dsc,0,".","."); ;?> sehingga borrower diasumsikan masih
                    mampu membayar angsuran bulanan.</p>


                    <!-- <p><h2>Analisa Kelemahan dan ancaman borrower</h2> -->
                    <!-- Borrower merupakan seorang karyawan tetap di __________. Kelemahan borrower adalah -->
                    <!-- pendapatan yang terbatas sesuai dengan slip gaji yang diterima sehingga perkembangan -->
                    <!-- tambahan pinjaman dimasa yang akan datang menjadi lebih kecil kecuali pinjaman lama telah lunas. -->
                    
                    <!-- Ancaman yang timbul bagi borrower adalah jika borrower di PHK atau perusahaan tempat -->
                    <!-- bekerja pailit.</p> -->
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <!-- ./col -->
        <div class="col-sm-4" style="position: relative;">
          <div class="box box-solid" style="border-top:3px solid #cfc717;">
            <div class="box-header with-border" style="border-bottom:1px solid #d5db48;background-color:#b2f02a;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Rincian Pinjaman :</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <?php 
                   foreach ($data_loan as $loan_entry) {
                    
                    $id_borrower_loan = $loan_entry->id_borrower_loan;
                    
                    $this->load->model('Front_Fintech/manually_model');
                    $data_manually = $this->manually_model->get_manually_id($id_borrower_loan,$get_code);
                    
                    // var_dump($id_borrower_loan);
                    // die();
                ?>
                <dt>ID Loan :</dt>
                <dd><?php echo $loan_entry->id_borrower_loan;?></dd>
                <dt>Jumlah Pinjaman :</dt>
                <dd>Rp. <?php echo number_format($loan_entry->loan_amount,0,".",".") ;?></dd>
                
                <dt>Jangka Waktu :</dt>
                <dd><?php echo number_format($loan_entry->loan_tenor,0,".",".") ;?> Bulan.</dd>
                <dt>Suku Bunga Efektif :</dt>
                <dd><?php echo number_format($loan_entry->loan_rate,0,".",".") ;?>%</dd>
                        <dt>Cicilan Per Bulan :</dt>
                <dd>Rp. <?php echo number_format($loan_entry->loan_montly,0,".",".") ;?></dd>
                <?php } ?>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-solid" style="border-top:3px solid #e4ee27;">
            <div class="box-header with-border" style="border-bottom:1px solid #e1e90d;background-color:#fffb00;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Term :</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <p style="text-align:justify;font-size:10px">PT. SatuStop beserta seluruh jajaran karyawan mereka telah membuat upaya terbaik untuk memastikan bahwa informasi diberikan secara akurat. Namun, kami tidak memberikan jaminan apapun untuk akurasi, kehandalan atau kelengkapan informasi yang terkandung dalam lembar fakta ini. Informasi yang disediakan dalam lembar fakta ini bersifat umum dan bukanlah merupakan nasihat keuangan. Anda harus berkonsultasi dengan penasihat yang memenuhi syarat untuk memberikan konsltasi yang tepat pada keuangan, pajak, dan masalah hukum untuk memperhitungkan tujuan Anda khususnya untuk investasi, situasi keuangan dan kebutuhan individu. Pinjaman selalu merupakan aktifitas yang terkait dengan resiko, dan pinjaman melalui Sanders tunduk pada resiko tersebut. Silahkan membaca syarat dan ketentuan kami bagian untuk mendapatkan pemahaman yang lebih baik tentang resiko ini. </p>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <!-- ./col -->
      </div>
      <?php } else { ?>
      <div class="row">
        <div class="col-sm-8">
          <div class="box box-solid" style="border-top:3px solid #0000ff;">
            <div class="box-header with-border" style="border-bottom:1px solid #0000ff;background-color:#6495ed;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Informasi Peminjam Commercial:</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <?php 
                
                  // $id_borrower_loan = $loan_entry->id_borrower_loan;
                  
                  $this->load->model('Front_Fintech/manually_model');
                  
                  // $data_manually = $this->manually_model->get_manually_id($id_borrower_loan,$get_code);
                ?>
                <dt>Jenis usaha calon peminjam :</dt>
                <dd><?php echo @$data_industry_type[0]->industry_name; ?></dd>
                <dt>Calon peminjam merupakan pengusaha di bidang :</dt>
                <dd><?php echo @$data_business_field_name[0]->business_field_name; ?></dd>
                <dt>Calon peminjam merupakan pemilik :</dt>
                <dd><?php echo @$data_commercial[0]->borrower_business_name ;?></dd>
                <dt>Yang beralamatkan di :</dt>
                <dd><?php echo @$data_commercial[0]->borrower_address_company ;?> Kec. <?php echo @$data_district_commercial[0]->nama; ?> <?php echo @$data_city_commercial[0]->nama; ?> Provinsi <?php echo @$data_province_commercial[0]->nama; ?>.</dd>
                <dt>Calon peminjam telah bergelut usaha dibidang ini selama :</dt>
                <dd><?php echo @$data_commercial[0]->borrower_long_entrepreneurship ;?> tahun </dd>
                <!-- <dt>Usia peminjam saat ini :</dt>
                <dd>43 tahun</dd> -->
                
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
      <div class="box box-solid" style="border-top:3px solid #0000ff;">
            <div class="box-header with-border" style="border-bottom:1px solid #0000ff;background-color:#6495ed;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Analisa Kemampuan Bayar :</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <?php 
                  $operasional = @$data_commercial[0]->borrower_operating_costs;
                  $lain = @$data_commercial[0]->borrower_additional_costs;
                  $tot_tanggungan = $operasional + $lain ;
                  foreach ($data_loan as $loan_entry) {
                      $total_principal = $this->manually_model->get_principal_sum($loan_entry->register_code);
                      $total_interest = $this->manually_model->get_interest_sum($loan_entry->register_code);

                      $principal = @$total_principal[0]->total_principal;
                      $interest = @$total_interest[0]->total_interest;

                      $angsuran = $principal + $interest;
                      
                      $this->load->model('Parameter/Param_model');
                      $get_hpp = $this->param_model->get_industry();
                      $hpp = $get_hpp[0]->industry_hpp;

                      $persen_operasional = ($operasional/@$data_commercial[0]->borrower_montly_income)*100;
                      $hpp_r = ($hpp * @$data_commercial[0]->borrower_montly_income)/100;
                      $hpp_rp = @$data_commercial[0]->borrower_montly_income - $hpp_r;

                      $npm = $hpp_rp - $tot_tanggungan;

                      $dsc = @$data_commercial[0]->borrower_montly_income - $angsuran - $npm - 0;
                      // var_dump($dsc);
                      // die();
                  }

                ?>
                <p style="text-align: justify;">
                    Berdasarkan Hasil analisa rekening usaha calon debitur, omset usaha per bulan sebesar Rp. <?php echo number_format(@$data_commercial[0]->borrower_montly_income,0,".",".") ;?>. Dengan HPP sebesar <?php echo $hpp ;?> % dan biaya operasional sebesar <?php echo $persen_operasional ;?>% dari omset, maka NPM yang diterima calon debitur per bulan sebesar Rp. <?php echo number_format($npm,0,".",".") ;?>.  
                  Berdasarkan hasil BI Checking calon debitur memiliki tanggungan angsuran sebesar Rp. 0, (jika ada, jika tidak diisi borrower tidak memiliki fasilitas pinjaman). 
                  Angsuran baru yang timbul melalui aplikasi pengajuan ini sebesar Rp. <?php echo number_format($angsuran,0,".",".") ;?>
                  Sehingga perhitungan DSC = Rp. <?php echo number_format($dsc,0,".",".") ;?> sehingga borrower diasumsikan masih mampu membayar angsuran bulanan.
                  </p>

                    <!-- <p><h2>Analisa Kelemahan dan ancaman borrower</h2> -->
                    <!-- Borrower merupakan seorang karyawan tetap di __________. Kelemahan borrower adalah -->
                    <!-- pendapatan yang terbatas sesuai dengan slip gaji yang diterima sehingga perkembangan -->
                    <!-- tambahan pinjaman dimasa yang akan datang menjadi lebih kecil kecuali pinjaman lama telah lunas. -->
                    
                    <!-- Ancaman yang timbul bagi borrower adalah jika borrower di PHK atau perusahaan tempat -->
                    <!-- bekerja pailit.</p> -->
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    
        <!-- ./col -->
        <div class="col-sm-4">
          <div class="box box-solid" style="border-top:3px solid #cfc717;">
            <div class="box-header with-border" style="border-bottom:1px solid #d5db48;background-color:#b2f02a;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Rincian Pinjaman :</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <?php 
                   foreach ($data_loan as $loan_entry) {
                    
                    $id_borrower_loan = $loan_entry->id_borrower_loan;

                    $this->load->model('Front_Fintech/manually_model');
                    $data_manually = $this->manually_model->get_manually_id($id_borrower_loan,$get_code);
                    
                    // var_dump($id_borrower_loan);
                    // die();
                ?>
                <dt>ID Loan :</dt>
                <dd><?php echo $loan_entry->id_borrower_loan;?></dd>
                <dt>Jumlah Pinjaman :</dt>
                <dd>Rp. <?php echo number_format($loan_entry->loan_amount,0,".",".") ;?></dd>
                
                <dt>Jangka Waktu :</dt>
                <dd><?php echo number_format($loan_entry->loan_tenor,0,".",".") ;?> Bulan.</dd>
                <dt>Suku Bunga Efektif :</dt>
                <dd><?php echo number_format($loan_entry->loan_rate,0,".",".") ;?>%</dd>
                <dt>Cicilan Per Bulan :</dt>
                <dd>Rp. <?php echo number_format($loan_entry->loan_montly,0,".",".") ;?></dd>
                <?php } ?>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
      <div class="box box-solid" style="border-top:3px solid #e4ee27;">
            <div class="box-header with-border" style="border-bottom:1px solid #e1e90d;background-color:#fffb00;">
              <!-- <i class="fa fa-text-width"></i> -->

              <h2 class="box-title">Term :</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <p style="text-align:justify;font-size:10px">PT. SatuStop beserta seluruh jajaran karyawan mereka telah membuat upaya terbaik untuk memastikan bahwa informasi diberikan secara akurat. Namun, kami tidak memberikan jaminan apapun untuk akurasi, kehandalan atau kelengkapan informasi yang terkandung dalam lembar fakta ini. Informasi yang disediakan dalam lembar fakta ini bersifat umum dan bukanlah merupakan nasihat keuangan. Anda harus berkonsultasi dengan penasihat yang memenuhi syarat untuk memberikan konsltasi yang tepat pada keuangan, pajak, dan masalah hukum untuk memperhitungkan tujuan Anda khususnya untuk investasi, situasi keuangan dan kebutuhan individu. Pinjaman selalu merupakan aktifitas yang terkait dengan resiko, dan pinjaman melalui Sanders tunduk pada resiko tersebut. Silahkan membaca syarat dan ketentuan kami bagian untuk mendapatkan pemahaman yang lebih baik tentang resiko ini. </p>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    
        <!-- ./col -->
      </div>
      <?php } ?>
      <!-- /.row -->
      <!-- END TYPOGRAPHY -->

    </div>
    <!-- /.content -->
  
  <div id="footer">
  
     <div class="pull-right hidden-xs "> 
       <b>Fact</b> Sheet 
     </div> 
     <strong>Copyright &copy; Sanders</strong> All rights 
     reserved. 
  
  </div>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

</body>
</html>
