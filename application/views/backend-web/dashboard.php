<?php date_default_timezone_set("Asia/Jakarta"); ?>
<div class="content-wrapper">
  <section class="content-header">
	<h1>
	  <?php echo $title; ?>
	  <small>
	  </small>
	</h1>
	<ol class="breadcrumb">
	  <li class="active">
		<a href="<?php echo $brd_title_url; ?>">
		  <i class="fa fa-dashboard">
		  </i> 
		  <?php echo $title; ?>
		</a>
	  </li>
	</ol>
  </section>
  <section class="content">
	<div class="panel-body" >
	  <?php if ($this->session->flashdata('alert_success')) { ?>
	  <div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
		</button>
		<p>
		  <i class="icon fa fa-check">
		  </i> Welcome : 
		  <?php echo $this->session->flashdata('alert_success'); ?>
		</p>
	  </div>
	  <?php } ?>
	  <?php if ($this->session->flashdata('alert_error')) { ?>
	  <div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
		</button>
		<p>
		  <i class="icon fa fa-ban">
		  </i> Warning ! :
		  <?php echo $this->session->flashdata('alert_error'); ?>
		</p>
	  </div>
	  <?php } ?>
	  <div class="box">
		  <form>
		  <div class="form-group" style="margin-left:15px;margin-top:10px;width:94%">
			<label for="exampleInputFile" style="color:blue">1. Surat Pengajuan Permohonan Rekomendasi Teknis Perpanjangan Waktu
			</label>
			<input type="file" name="file" id="file_A" style=""/>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px;width:94%">
			<label for="exampleInputFile" style="color:blue">2. Explanatory Note
			</label>
			<input type="file" name="file" id="file_As" style=""/>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px;width:94%">
			<label for="exampleInputFile" style="color:blue">3. Surat Perjanjian Kontrak
			</label>
			<input type="file" name="file" id="file_Aa" style=""/>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px;width:94%">
			<label for="exampleInputFile" style="color:blue">4. Berita Acara Panitia Peneliti Pelaksana Kontrak


			</label>
			<input type="file" name="file" id="file_Ad" style=""/>
		  </div>
		  
		  <div class="row" style="margin-left:15px;margin-top:10px">
		  <div class="input-field col clearfix" style="
    float: right;
    margin-right: 12%;
    margin-bottom: 10px;
">
            
          </div>
		  </div>
	      </form>
		  <button type="submit" class="btn waves-effect waves-light col s12 btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:81%;margin-bottom:10px;">Submit</button>
          
          <button type="" class="btn waves-effect waves-light col s12 btn-danger" style="margin-bottom:10px;">Cancel</button>
	  </div>
	</div>
  </section>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align:center">
        <h1 style="color:green">Berhasil di Proses!</h1>
		<i class="icon fa fa-check" style="font-size:90px;color:green"></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!--  -->
