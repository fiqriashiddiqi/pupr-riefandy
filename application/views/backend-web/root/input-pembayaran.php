<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!-- Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo $title; ?>
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<a href="
					<?php echo $brd_title_url; ?>">
					<i class="fa fa-dashboard"></i>
					<?php echo $brd_title_main; ?>
				</a>
			</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<?php if ($this->session->flashdata('alert_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
						<i class="icon fa fa-check"></i>
						<?php echo $this->session->flashdata('alert_success'); ?>
					</p>
				</div>
				<?php } ?>
				<?php if ($this->session->flashdata('alert_error')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
						<i class="icon fa fa-ban"></i>
						<?php echo $this->session->flashdata('alert_error'); ?>
					</p>
				</div>
				<?php } ?>
				<!-- <div class="box"><div class="box-header with-border"><div class="row"><div class="col-lg-6 col-xs-12"></div><div class="col-lg-6 col-xs-12 text-right"><a href="#" data-toggle="collapse" data-target="#filter_users" class="btn-warning btn-sm btn">Filters</a><a href="
				<?php echo $create_url; ?>" class="btn-primary btn-sm btnbig2 btn">Add Users</a></div></div></div></div> -->
				<div class="box">
					<div class="box-header with-border"></div>
					<!-- /.box-header -->
					<!-- form start -->
						<div class="box-body">
              <div class="form-group">
                <label>Jenis Pajak</label>
                <select class="form-control" name="id_backend_groups" style="width: 100%;" onChange="getJenisPajak(this.options[this.selectedIndex].value)">
                  <option disabled selected value>- Select jenis pajak -</option>
                  <?php 
                    foreach ($jenis_pajak as $key => $value) {
                  ?>
                  <option value="<?php echo $key; ?>"><?php echo $value ?></option>

                  <?php } ?>
                </select>
              </div>

							<div class="form-group" id="inp_kd_bayar">
								<label for="kode_bayar">Kode Bayar</label>
								<input type="number" class="form-control" id="txt_kd_bayar" name="txt_kd_bayar" placeholder="Kode Bayar" required="true">
									<!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
							</div>

              <div class="form-group" id="inp_nop">
								<label for="display_name">NOP</label>
								<input type="number" class="form-control" id="txt_nop" name="txt_nop" placeholder="NOP" required="true">
									<!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-right">
								<button type="submit" id="btn_submit_inquiry" class="btn btn-success btnbig" onclick = inquiryData(<?php echo $id_backend_users?>)>Submit</button>
							</div>
							<!-- /.box-footer -->
					</div>
					
          <div class="box-body" id="resultPdl" style="display: none;">
						<div class="row">
							<div class="col-xs-12 col-lg-12" >
								<div class="col-xs-12 col-lg-12" style="overflow-y: auto;"></div>
                <table style="width:100%">
                <tr>
                  <td>BANK BJB</td>
                <tr>
                  <td>KODE CABANG : 0031</td>
                  
                </tr>
                <tr>
                  <td><?php echo $id_kd_tempat?></td>
                  
                </tr>
                <tr>
                  <td><?php echo $id_nama_tempat?></td>
                  
                </tr>
                <tr>
                  <td>PEMERINTAH KABUPATEN CIREBON</td>
                  
                </tr>
              </table>
              <BR>

              <p class="mix"></p>
              <table style="width:100%" >
                <tr>
                  <td style="width:26%">NTB</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNTB"></td>
                </tr>
                <tr>
                  
                  <td style="width:26%">NOMOR BAYAR</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNoBayar"></td>
                </tr>
                
              </table>
              <table style="width:100%" >
                <tr>
                  <td style="width:26%">NPWPD/NOPD</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNpwp"></td>
                </tr>  
              </table>
              <table style="width:100%"  >
                  <tr>
                  <td style="width:26%">NAMA WP/OP</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNamaWp"></td>
                </tr>
                <tr>
                  <td style="width:26%">ALAMAT</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id=""><span id="inqAlamat1"></span>, <span id="inqAlamat2"></span></td>
                </tr>
                <tr>
                  <td style="width:26%">TAGIHAN POKOK</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqTagihanPokok"> </td>
                </tr>
                <tr>
                  <td style="width:26%">TAGIHAN DENDA</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%"id="inqTagihanDenda"> </td>
                </tr>
              </table>
              <table style="width:100%" >
                <tr>
                  <td></td>
                  <td><p class="mix"></p></td>
                </tr>
                
              </table>
              <table style="width:100%" >
                <tr>
                  <td style="width:26%">TOTAL TAGIHAN</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqTotalTagihan"></td>
                </tr>
                <tr>
                  <td style="width:26%">BIAYA ADMIN BANK</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqAdminBank"> </td>
                </tr>
              </table>
              <table style="width:100%" >
                <tr>
                  <td></td>
                  <td><p class="mix"></p></td>
                  
                </tr>
                
              </table>
              <BR>
              <table style="width:100%"  >
                <tr>
                  <td style="width:26%">JENIS DENDA</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqJenisDenda"></td>
                  
                  
                </tr>
                <tr>
                  <td style="width:26%">MASA AWAL/AKHIR PJK</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqMasa"></td>
                  
                </tr>
              </table>
              <table style="width:100%" >
                <tr>
                  <td><p class="mix"></p></td>
                </tr>
              </table>
              <button id="idButtonPayment" type="submit" class="btn btn-success btnbig" onclick = "pdlPaymentProcess()">Process</button>
							</div>
              <!-- /.box-body -->
							<!-- <div class="box-footer text-right">
								
							</div> -->
							<!-- /.box-footer -->
						</div>
					</div>

          <div class="box-body" id="resultBPHTB" style="display: none;">
						<div class="row">
							<div class="col-xs-12 col-lg-12" >
								<div class="col-xs-12 col-lg-12" style="overflow-y: auto;"></div>
                <table style="width:100%">
                <tr>
                  <td>BANK BJB</td>
                <tr>
                  <td>KODE CABANG : 0031</td>
                  
                </tr>
                <tr>
                  <td><?php echo $id_kd_tempat?></td>
                  
                </tr>
                <tr>
                  <td><?php echo $id_nama_tempat?></td>
                  
                </tr>
                <tr>
                  <td>PEMERINTAH KABUPATEN CIREBON </td>
                  
                </tr>
              </table>
              <BR>

              <p class="mix"></p>
              <table style="width:100%" >
                <tr>
                  <td style="width:26%">NOP</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNOP"></td>
                </tr>
                <tr>
                  
                  <td style="width:26%">NOMOR BAYAR</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNoBayarBPHTB"></td>
                </tr>
                
              </table>
              <table style="width:100%" >
                <tr>
                  <td style="width:26%">KELURAHAN</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqKel"></td>
                </tr>  
              </table>
              <table style="width:100%"  >
                  <tr>
                  <td style="width:26%">KECAMATAN</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqKec"></td>
                </tr>
                <tr>
                  <td style="width:26%">LUAS TANAH</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqLT"></td>
                </tr>
                <tr>
                  <td style="width:26%">LUAS BANGUNAN</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqLB"> </td>
                </tr>
                <tr>
                  <td style="width:26%">NPOP</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%"id="inqNPOP">RP.  </td>
                </tr>
              </table>
              
              <table style="width:100%" >
                <tr>
                  <td style="width:26%">DENDA</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqDenda">RP. </td>
                </tr>
                <tr>
                  <td style="width:26%">ADMIN</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqAdminBankBPHTB">RP. </td>
                </tr>
                <tr>
                  <td style="width:26%">BPHTB YANG DIBAYAR</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqBayar">RP. </td>
                </tr>
                <tr>
                  <td style="width:26%">TOTAL YANG DIBAYAR</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqTotal">RP. </td>
                </tr>
                <tr>
                  <td style="width:26%">TERBILANG</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqTerbilang"> </td>
                </tr>
              </table>
              <table style="width:100%" >
                <tr>
                  <td></td>
                  <td><p class="mix"></p></td>
                  
                </tr>
                
              </table>
              <BR>
              <table style="width:100%"  >
                <tr>
                  <td style="width:26%">NAMA WAJIB PAJAK</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNamaWP"></td>
                  
                  
                </tr>
                <tr>
                  <td style="width:26%">ALAMAT WAJIB PAJAK</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqAlamat"></td>
                  
                </tr>
                <tr>
                  <td style="width:26%">KTP/NIK</td>
                  <td style="width:1%">:</td>
                  <td style="width:63%" id="inqNIK"></td>
                  
                </tr>
              </table>
              <table style="width:100%" >
                <tr>
                  <td><p class="mix"></p></td>
                </tr>
              </table>
              <button id="idButtonPaymentBPHTB" type="submit" class="btn btn-success btnbig" onclick = "bphtbPaymentProcess()">Process</button>
							</div>
              <!-- /.box-body -->
							<!-- <div class="box-footer text-right">
								
							</div> -->
							<!-- /.box-footer -->
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- end content-wrapper -->

<script type="text/javascript">
//NOTES VALUE 0 = BPHTB || VALUE 1 = PAJAK DAERAH
  window.onload=function(){
      document.getElementById("idButtonPayment").style.display='none';
      document.getElementById("inp_kd_bayar").style.display='none';
      document.getElementById("inp_nop").style.display='none';
      document.getElementById("btn_submit_inquiry").disabled = true;
  }
  
  let valueJenisPajak = "";

  hasilInquiry = null;

  function inquiryData(id_backend_users){
    let kd_pembayaran = document.getElementById('txt_kd_bayar').value;
    let kd_nop = document.getElementById('txt_nop').value;
    let dataParam = {};
    console.log(valueJenisPajak)
    if (valueJenisPajak == 0) {
        dataParam = {
          id_backend_users : id_backend_users,
          kd_pembayaran : kd_pembayaran,
          kd_nop : kd_nop
        }
        $.ajax({
          type: 'POST',
          url: "<?php echo base_url(); ?>Petugas/B_pembayaran/inquiry_pembayaran_bphtb",
          data: dataParam,
          success: function(data) {
            console.log(data);
            if (data == "") {
              alert("Data tidak ditemukan");
            }else {
              let dataS = JSON.parse(data);
              hasilInquiry = dataS.body;
              d = dataS.body.additional_data;
              e = dataS.body.data_element;// ikut response
              if (dataS.code == "00") {
                 console.log(d);
                 console.log(e);
                 var admin_bank = 0;
                document.getElementById('inqNOP').innerHTML = e.invoice_id_bayar;
                 document.getElementById('inqNoBayarBPHTB').innerHTML = e.additional_data_62;
                 document.getElementById('inqKel').innerHTML = d.kelurahan_objek_pajak;
                 document.getElementById('inqKec').innerHTML = d.kecamatan_objek_pajak;
                 document.getElementById('inqLT').innerHTML = d.luas_tanah;
                 document.getElementById('inqLB').innerHTML = d.luas_bangunan;
                 document.getElementById('inqNPOP').innerHTML = 'RP. ' + d.npop.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                 document.getElementById('inqDenda').innerHTML = 'RP. ' + d.jumlah_denda.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                 document.getElementById('inqAdminBankBPHTB').innerHTML = 'RP. ' + admin_bank.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); 
                 document.getElementById('inqBayar').innerHTML = 'RP. ' + d.jumlah_bayar.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                 var bayar = parseInt(d.jumlah_bayar) + parseInt(d.jumlah_denda) + admin_bank;
                 document.getElementById('inqTotal').innerHTML = 'RP. ' + bayar.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");; 
                 document.getElementById('inqTerbilang').innerHTML = '';
                 document.getElementById('inqNamaWP').innerHTML = d.nama_wajib_pajak;
                 document.getElementById('inqAlamat').innerHTML = d.alamat_wajib_pajak;
                 document.getElementById('inqNIK').innerHTML = d.npwp;
              }else {
                alert(dataS.message);
                location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran";
              }
            }
          }
        });
    }else if (valueJenisPajak == 1) {
        dataParam = {
          id_backend_users : id_backend_users,
          kd_pembayaran : kd_pembayaran
        }
        $.ajax({
          type: 'POST',
          url: "<?php echo base_url(); ?>Petugas/B_pembayaran/inquiry_pembayaran",
          data: dataParam,
          success: function(data) {
            console.log(data);
            if (data == "") {
              alert("Data tidak ditemukan");
            }else {
              let dataS = JSON.parse(data);
              // var table = document.getElementById("myTable");
              // table.innerHTML = "";
              if (dataS.code == "00") {
                 hasilInquiry = dataS.body;
                 d = dataS.body.additional_data;
                 e = dataS.body.data_element;// ikut response
                 console.log(d);
                 console.log(e);
                 document.getElementById('inqNTB').innerHTML = e.nomor_squence_ntb;
                //  document.getElementById('inqNoseq').innerHTML = "NoSeq";
                 document.getElementById('inqNoBayar').innerHTML = e.invoice_id_bayar;
                 document.getElementById('inqNpwp').innerHTML = d.npwpd;
                 document.getElementById('inqNamaWp').innerHTML = d.nama;
                 document.getElementById('inqAlamat1').innerHTML = d.alamat_1;
                 document.getElementById('inqAlamat2').innerHTML = d.alamat_2;
                 document.getElementById('inqTagihanPokok').innerHTML = 'RP. ' + d.tagihan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                 document.getElementById('inqTagihanDenda').innerHTML = 'RP. ' +d.denda.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                 document.getElementById('inqTotalTagihan').innerHTML = 'RP. ' +d.total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                 document.getElementById('inqAdminBank').innerHTML = 'RP. '+ 0;
                 document.getElementById('inqJenisDenda').innerHTML = d.nama_rekening;
                 document.getElementById('inqMasa').innerHTML = d.masa_1 +'/'+ d.masa_2;
                 document.getElementById("idButtonPayment").style.display='block';
              }else {
                alert(dataS.message);
                location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran"
              }
            }
          }
        });
    } else {
        dataParam = {}
    }
    
    event.preventDefault();
  }

  function getJenisPajak(jenisPajak) {
    valueJenisPajak = jenisPajak;
    if (valueJenisPajak == 0) {
      document.getElementById("inp_kd_bayar").style.display='block';
      document.getElementById("inp_nop").style.display='block';
      document.getElementById("btn_submit_inquiry").disabled = false;
      document.getElementById("resultPdl").style.display='none';
      document.getElementById("resultBPHTB").style.display='block';
    } else if (valueJenisPajak == 1){
      document.getElementById("inp_kd_bayar").style.display='block';
      document.getElementById("inp_nop").style.display='none';
      document.getElementById("btn_submit_inquiry").disabled = false;
      document.getElementById("resultPdl").style.display='block';
      document.getElementById("resultBPHTB").style.display='none';
      
    } else {
      document.getElementById("btn_submit_inquiry").disabled = true;
    }
  }

  function hide (elements) {
      elements = elements.length ? elements : [elements];
      for (var index = 0; index < elements.length; index++) {
        elements[index].style.display = 'none';
      }
  }


  // dari batas ini ke bawah adalah kode tambahan oleh laurensius dede suhardiman

  function pdlPaymentProcess(){
    console.log("Request payment . . . ");
    dataParam = {
      "id_backend_users" : "<?php echo $id_backend_users?>",
      "kd_pembayaran" : hasilInquiry.data_element.invoice_id_bayar,
      "amount" : hasilInquiry.additional_data.total,
      "nomor_squence_ntb" : hasilInquiry.data_element.nomor_squence_ntb,
      "terminal_identification_number" : hasilInquiry.data_element.terminal_identification_number,
      "terminal_name_or_user_identification" : hasilInquiry.data_element.terminal_name_or_user_identification
    }

    console.log(dataParam);

    $.ajax({
      type: 'POST',
      url: "<?php echo base_url(); ?>Petugas/B_pembayaran/pdl_payment_process/",
      data : JSON.stringify(dataParam),
      success: function(response) {
        rsp = JSON.parse(response);
        console.log("Response hasil payment : " + response);
        if(rsp.code == "00"){
          alert("Pembayaran berhasil!");
          pdlPaymentSave();
        }else{
          alert(rsp.message);
          location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran"
        }
      },
      error : function(response){
          alert("Error, terjadi kendala saat terhubung ke server!");
          location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran"
      }
    });
  }

  function pdlPaymentSave(){
    console.log("Request save payment . . . ");
    
    var generatedID = '<?php echo rand(11,99).date("YmdHis"); ?>';
    console.log(generatedID);

    // generatedID = 1234;

    dataWajibPajak = {
      "idtb_backend_wajib_pajak" : generatedID,
      "npwpd" : hasilInquiry.additional_data.npwpd,
      "nama" : hasilInquiry.additional_data.nama,
      "alamat_1" : hasilInquiry.additional_data.alamat_1,
      "alamat_2" : hasilInquiry.additional_data.alamat_2,
      "kode_rekening" : hasilInquiry.additional_data.kode_rekening,
      "nama_rekening" : hasilInquiry.additional_data.nama_rekening,
      "masa_1" : hasilInquiry.additional_data.masa_1,
      "masa_2" : hasilInquiry.additional_data.masa_2
    }

    execDatetime = '<?php echo date("Y-m-d H:i:s"); ?>';

    dataTransaksi = {
      "id_backend_users" : "<?php echo $id_backend_users?>",
      "id_backend_wp" :  generatedID,
      "kd_bayar" : hasilInquiry.data_element.invoice_id_bayar,
      "ntb" : hasilInquiry.data_element.nomor_squence_ntb, //ntb
      "ntp" : "",
      "npwp" : hasilInquiry.additional_data.npwpd,
      "no_sequence" : execDatetime +''+ hasilInquiry.data_element.nomor_squence_ntb, //YmdHis + ntb
      "tagihan_pokok" : hasilInquiry.additional_data.tagihan,
      "tagihan_denda" : hasilInquiry.additional_data.denda,
      "admin_bank" : "0",
      "created_date" : execDatetime,
      "updated_date" : execDatetime,
      "status" : "true"
    }

    dataPost = {
      "wajib_pajak" : dataWajibPajak,
      "transaksi" : dataTransaksi
    }

    $.ajax({
      url: "<?php echo base_url(); ?>Petugas/B_pembayaran/pdl_payment_save/",
      type: 'POST',
      data : JSON.stringify(dataPost),
      success: function(response) {
        console.log("response hasil save " + response);
        alert(response.message);
        window.open("<?php echo base_url(); ?>Petugas/B_pembayaran/pdl_payment_print/" + generatedID + "/", '_blank');
        location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran";
      },
      error : function(response){
          alert("Error, terjadi kendala saat terhubung ke server!");
          location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran";
      }
    });
  }

  function bphtbPaymentProcess(){
    console.log("Request payment bphtb . . . ");
    dataParam = {
      "id_backend_users" : "<?php echo $id_backend_users?>",
      "kd_pembayaran" : hasilInquiry.data_element.additional_data_62,
      "nop" : hasilInquiry.data_element.invoice_id_bayar,
      "amount" : hasilInquiry.additional_data.jumlah_total,
      "ntb" : hasilInquiry.data_element.ntb,
      "terminal_identification_number" : hasilInquiry.data_element.terminal_identification_number,
      "terminal_name_or_user_identification" : hasilInquiry.data_element.terminal_name_or_user_identification
    }

    $.ajax({
      type: 'POST',
      url: "<?php echo base_url(); ?>Petugas/B_pembayaran/bphtb_payment_process/",
      data : JSON.stringify(dataParam),
      success: function(response) {
        console.log(response);
        rsp = JSON.parse(response);
        if(rsp.code == "00"){
          alert("Pembayaran berhasil!");
          bphtpPaymentSave(); 
        }else{
          alert(rsp.message);
          location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran"
        }
      },
      error : function(response){
          alert("Error, terjadi kendala saat terhubung ke server!");
          location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran"
      }
    });
  }

  function bphtpPaymentSave(){
    //utk proses save bphtb
    console.log("Request save payment bphtb . . . ");
    
    var generatedID = '<?php echo rand(11,99).date("YmdHis"); ?>';
    // console.log(generatedID);

    // generatedID = 1234;

    dataWajibPajak = {
      "idtb_backend_wajib_pajak_bphtb" : generatedID, //generare random id
      "npwp" : hasilInquiry.additional_data.npwp, //npwp
      "nama_wajib_pajak" : hasilInquiry.additional_data.nama_wajib_pajak, //nama wajib pajak
      "alamat_wajib_pajak" : hasilInquiry.additional_data.alamat_wajib_pajak,
      "rt_wajib_pajak" : hasilInquiry.additional_data.rt_wajib_pajak, 
      "rw_wajib_pajak" : hasilInquiry.additional_data.rw_wajib_pajak,
      "kel_wajib_pajak" : hasilInquiry.additional_data.kelurahan_wajib_pajak,
      "kec_wajib_pajak" : hasilInquiry.additional_data.kecamatan_wajib_pajak,
      "kode_pos_wajib_pajak" : hasilInquiry.additional_data.kode_pos_wajib_pajak,
      "alamat_objek_pajak" : hasilInquiry.additional_data.alamat_objek_pajak,
      "kel_objek_pajak" : hasilInquiry.additional_data.kelurahan_objek_pajak,
      "kec_objek_pajak" : hasilInquiry.additional_data.kecamatan_objek_pajak,
      "kota_objek_pajak" : hasilInquiry.additional_data.kota_objek_pajak, 
      "tahun_pajak" : hasilInquiry.additional_data.tahun_pajak, // tahun pajak
      "luas_tanah" : hasilInquiry.additional_data.luas_tanah, // luas tanah
      "luas_bangunan" : hasilInquiry.additional_data.luas_bangunan, // luas bangunan
      "nama_bank" : hasilInquiry.additional_data.nama_bank, // nama bank
      "nama_kcp_bank" : hasilInquiry.additional_data.nama_kcp_bank, // cabang bank
      "nama_operator_bank" : hasilInquiry.additional_data.nama_operator_bank, // operator bank
      "id_operator_bank" : hasilInquiry.additional_data.id_operator_bank, // id operator bank
    }

    execDatetime = '<?php echo date("Y-m-d H:i:s"); ?>';

    dataTransaksi = {
      "id_backend_users" : "<?php echo $id_backend_users?>", //id user
      "id_backend_wp" :  generatedID, //generare random id
      "kd_bayar" : hasilInquiry.data_element.additional_data_62, //kode_bayar
      "nop" : hasilInquiry.data_element.invoice_id_bayar, //nop 
      "ntb" : hasilInquiry.data_element.ntb, //ntb
      "npwp" : hasilInquiry.additional_data.npwp, //npwp
      "no_sequence" : execDatetime +''+ hasilInquiry.data_element.ntb, //ntb sequence
      "npop" : hasilInquiry.additional_data.npop, //npop
      "jenis_perolehan_hak" : hasilInquiry.additional_data.jenis_perolehan_hak, //jenis perolehan hak 01 || 02
      "tagihan_pokok" : hasilInquiry.additional_data.jumlah_bayar, //jumlah bayar tagihan
      "tagihan_denda" : hasilInquiry.additional_data.denda, //jumlah denda
      "admin_bank" : "0",
      "created_date" : execDatetime, // created date
      "updated_date" : execDatetime, // updated date
      "status" : "true", // status payment
    }

    dataPost = {
      "wajib_pajak" : dataWajibPajak,
      "transaksi" : dataTransaksi
    }

    $.ajax({
      url: "<?php echo base_url(); ?>Petugas/B_pembayaran/bphtb_payment_save/",
      type: 'POST',
      data : JSON.stringify(dataPost),
      success: function(response) {
        console.log(response);
        alert(response.message);
        window.open("<?php echo base_url(); ?>Petugas/B_pembayaran/bphtb_payment_print/" + generatedID + "/", '_blank');
        location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran";
      },
      error : function(response){
          console.log(response);
          alert("Error, terjadi kendala saat terhubung ke server!");
          location.href = "<?php echo base_url(); ?>Petugas/B_pembayaran";
      }
    });
  }

  </script>
  