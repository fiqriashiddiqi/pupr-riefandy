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
					<form action="<?php echo $form_url; ?>" method="post" target="_blank">
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
								<label for="kode_bayar">Kode Bayar PDL</label>
								<input type="number" class="form-control" id="txt_kd_bayar" name="txt_kd_bayar" placeholder="Kode Bayar" >
									<!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
							</div>
							<div class="form-group" id="inp_kd_bayar_bphtb">
								<label for="kode_bayar">Kode Bayar BPHTB</label>
								<input type="number" class="form-control" id="txt_kd_bayar_bphtb" name="txt_kd_bayar_bphtb" placeholder="Kode Bayar" >
								<!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
							</div>
							<div class="form-group" id="inp_nop">
								<label for="kode_bayar">NOP</label>
								<input type="number" class="form-control" id="txt_nop" name="txt_nop" placeholder="NOP" >	
								<!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-right">
								<button type="submit" id="btn_submit_inquiry" class="btn btn-success btnbig">Submit</button>
							</div>
							<!-- /.box-footer -->
						</div>
					</form>
	</section>
	<!-- /.content -->
</div>
<!-- end content-wrapper -->
<script type="text/javascript">
//NOTES VALUE 0 = BPHTB || VALUE 1 = PAJAK DAERAH
  window.onload=function(){
      document.getElementById("inp_nop").style.display='none';
      document.getElementById("inp_kd_bayar").style.display='none';
      document.getElementById("inp_kd_bayar_bphtb").style.display='none';
      document.getElementById("btn_submit_inquiry").disabled = true;
  }
  let valueJenisPajak = "";
  function getJenisPajak(jenisPajak) {
    valueJenisPajak = jenisPajak;
    if (valueJenisPajak == 0) {
      document.getElementById("inp_kd_bayar_bphtb").style.display='block';
	  document.getElementById("inp_nop").style.display='block';
	  document.getElementById("inp_kd_bayar").style.display='none';
      document.getElementById("btn_submit_inquiry").disabled = false;
    } else if (valueJenisPajak == 1){
      document.getElementById("inp_kd_bayar").style.display='block';
	  document.getElementById("inp_nop").style.display='none';
      document.getElementById("inp_kd_bayar_bphtb").style.display='none';
      document.getElementById("btn_submit_inquiry").disabled = false;
      
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
</script>