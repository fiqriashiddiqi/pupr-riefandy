<?php 
    $this->load->model("crud_model");
    $this->load->model("Front_Fintech/manually_model");
    $this->load->model("Front_Fintech/loan_model");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */

body {
    font-family: Source Sans Pro;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 15px;
    font-size: 0px;
    text-align:left;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 60%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 30%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 0px;
     margin-top: 20px;
     border-radius: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

dl {
  width: 100%;
  overflow: hidden;
  /*background: #ff0;*/
  padding: 10px;
  margin: 0
}
dt {
  float: left;
  width: 50%;
  /* adjust the width; make sure the total of both is 100% */
  /*background: #cc0;*/
  padding: 0;
  margin: 0
}
dd {
  float: left;
  width: 50%;
  /* adjust the width; make sure the total of both is 100% */
  /*background: #dd0*/
  padding: 0;
  margin: 0
}

@page { margin: 100px 50px; }
    #header { position: fixed; left: 0px; top: -80px; right: 0px; height: 10px;text-align: left; }
    #footer { position: fixed; left: 0px; bottom: -100px; right: 0px; height: 40px;}
    #footer .page:after { content: counter(page, upper-roman); }
</style>
</head>
<body>

<div class="header" id="header">
  <img class="img-responsive img-logo" src="<?php echo base_url() ?>uploads/base-img/img_home/logoSanders.png" style="height:50px;width:160px;margin-top:-5px">
</div>
<?php if (@$data_loan[0]->loan_type == "Personal Loan") {
               
        ?>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div class="fakeimg" style="background-color: #6495ed">Image</div>
        <p>
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
            <dd>43 tahun</dd>
          </dl>
        </p>
    </div>
    <div class="card">
      <div class="fakeimg" style="background-color: #6495ed">Image</div>
      <p style="padding: 10px;text-align: justify;">
        Berdasarkan hasil analisa slip gaji dan yang tertera pada rekening borrower, pendapatan bersih
        yang diterima sebesar Rp _____(1)_____,00. Berdasarkan hasil BI Checking, borrower saat ini
        memiliki fasilitas __________________ / (tidak memiliki fasilitas kredit)
        Berdasarkan hasil BI Checking borrower memiliki tanggungan angsuran sebesar Rp
        ___(3)___,00 (jika ada, jika tidak diisi borrower tidak memiliki fasilitas pinjaman).
        Angsuran baru yang timbul melalui aplikasi pengajuan ini sebesar Rp ___(4)___,00
        Sehingga perhitungan DSC = ((1) – (2) – (3)) / (4) = __ x sehingga borrower diasumsikan masih
        mampu membayar angsuran bulanan.
      </p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <div class="fakeimg" style="background-color: #b2f02a">Image</div>
        <p>
          <dl>
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
        </p>
    </div>
    <div class="card">
      <div class="fakeimg" style="background-color: #fffb00">Image</div>
      <p style="padding: 10px;text-align: justify;font-size: 10px">
        PT. SatuStop beserta seluruh jajaran karyawan mereka telah membuat upaya terbaik untuk memastikan bahwa informasi diberikan secara akurat. Namun, kami tidak memberikan jaminan apapun untuk akurasi, kehandalan atau kelengkapan informasi yang terkandung dalam lembar fakta ini. Informasi yang disediakan dalam lembar fakta ini bersifat umum dan bukanlah merupakan nasihat keuangan. Anda harus berkonsultasi dengan penasihat yang memenuhi syarat untuk memberikan konsltasi yang tepat pada keuangan, pajak, dan masalah hukum untuk memperhitungkan tujuan Anda khususnya untuk investasi, situasi keuangan dan kebutuhan individu. Pinjaman selalu merupakan aktifitas yang terkait dengan resiko, dan pinjaman melalui Sanders tunduk pada resiko tersebut. Silahkan membaca syarat dan ketentuan kami bagian untuk mendapatkan pemahaman yang lebih baik tentang resiko ini.
      </p>
    </div>
  </div>
</div>
<?php } else { ?>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div class="fakeimg">Image</div>
        <p>
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
            <dd>43 tahun</dd>
          </dl>
        </p>
    </div>
    <div class="card">
      <div class="fakeimg">Image</div>
      <p style="padding: 10px;text-align: justify;">
        Berdasarkan hasil analisa slip gaji dan yang tertera pada rekening borrower, pendapatan bersih
        yang diterima sebesar Rp _____(1)_____,00. Berdasarkan hasil BI Checking, borrower saat ini
        memiliki fasilitas __________________ / (tidak memiliki fasilitas kredit)
        Berdasarkan hasil BI Checking borrower memiliki tanggungan angsuran sebesar Rp
        ___(3)___,00 (jika ada, jika tidak diisi borrower tidak memiliki fasilitas pinjaman).
        Angsuran baru yang timbul melalui aplikasi pengajuan ini sebesar Rp ___(4)___,00
        Sehingga perhitungan DSC = ((1) – (2) – (3)) / (4) = __ x sehingga borrower diasumsikan masih
        mampu membayar angsuran bulanan.
      </p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <div class="fakeimg">Image</div>
        <p>
          <dl>
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
        </p>
    </div>
    <div class="card">
      <div class="fakeimg">Image</div>
      <p style="padding: 10px;text-align: justify;font-size: 10px">
        PT. SatuStop beserta seluruh jajaran karyawan mereka telah membuat upaya terbaik untuk memastikan bahwa informasi diberikan secara akurat. Namun, kami tidak memberikan jaminan apapun untuk akurasi, kehandalan atau kelengkapan informasi yang terkandung dalam lembar fakta ini. Informasi yang disediakan dalam lembar fakta ini bersifat umum dan bukanlah merupakan nasihat keuangan. Anda harus berkonsultasi dengan penasihat yang memenuhi syarat untuk memberikan konsltasi yang tepat pada keuangan, pajak, dan masalah hukum untuk memperhitungkan tujuan Anda khususnya untuk investasi, situasi keuangan dan kebutuhan individu. Pinjaman selalu merupakan aktifitas yang terkait dengan resiko, dan pinjaman melalui Sanders tunduk pada resiko tersebut. Silahkan membaca syarat dan ketentuan kami bagian untuk mendapatkan pemahaman yang lebih baik tentang resiko ini.
      </p>
    </div>
  </div>
</div>
<?php } ?>
<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
