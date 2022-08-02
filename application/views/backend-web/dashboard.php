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
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">1. Surat Pengajuan Permohonan Rekomendasi Teknis Perpanjangan Waktu
			</label>
			<div class="input-group" style="margin-bottom:-40px">
				<input class=" form-control" type="text"/>
				<div class="input-group-btn">
					<label for="files" class="btn btn-primary" style="border-radius:3px">browse</label>
					<input id="files" type="file" class="btn btn-default"  style="visibility:hidden;"/>
				</div>
			</div>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">2. Dokumen Kontrak Awal
			</label>
			<div class="input-group" style="margin-bottom:-40px">
				<input class=" form-control" type="text"/>
				<div class="input-group-btn">
					<label for="files" class="btn btn-primary" style="border-radius:3px">browse</label>
					<input id="files" type="file" class="btn btn-default"  style="visibility:hidden;"/>
				</div>
			</div>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">3. Kurva S
			</label>
			<div class="input-group" style="margin-bottom:-40px">
				<input class=" form-control" type="text"/>
				<div class="input-group-btn">
					<label for="files" class="btn btn-primary" style="border-radius:3px">browse</label>
					<input id="files" type="file" class="btn btn-default"  style="visibility:hidden;"/>
				</div>
			</div>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">4. Laporan Progres Mingguan dari Awal hingga Pengajuan Permohonan Perpanjangan Waktu


			</label>
			<div class="input-group" style="margin-bottom:-40px">
				<input class=" form-control" type="text"/>
				<div class="input-group-btn">
					<label for="files" class="btn btn-primary" style="border-radius:3px">browse</label>
					<input id="files" type="file" class="btn btn-default"  style="visibility:hidden;"/>
				</div>
			</div>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">5. Dokumentasi Progres Mingguan dari Awal Hingga Pengajuan Permohonan Perpanjangan Waktu 
			</label>
			<div class="input-group" style="margin-bottom:-40px">
				<input class=" form-control" type="text"/>
				<div class="input-group-btn">
					<label for="files" class="btn btn-primary" style="border-radius:3px">browse</label>
					<input id="files" type="file" class="btn btn-default"  style="visibility:hidden;"/>
				</div>
			</div>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">6. Surat Usulan Permohonan Perpanjangan Waktu dari Kontraktor
			</label>
			<div class="input-group" style="margin-bottom:-40px">
				<input class=" form-control" type="text"/>
				<div class="input-group-btn">
					<label for="files" class="btn btn-primary" style="border-radius:3px">browse</label>
					<input id="files" type="file" class="btn btn-default"  style="visibility:hidden;"/>
				</div>
			</div>
		  </div>
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">7. Justifikasi Teknis Konsultan
			</label>
			<div class="input-group" style="margin-bottom:-40px">
				<input class=" form-control" type="text"/>
				<div class="input-group-btn">
					<label for="files" class="btn btn-primary" style="border-radius:3px">browse</label>
					<input id="files" type="file" class="btn btn-default"  style="visibility:hidden;"/>
				</div>
			</div>
		  </div>
		  <div class="row" style="margin-left:15px;margin-top:10px">
		  <div class="input-field col clearfix" style="
    float: right;
    margin-right: 12%;
    margin-bottom: 10px;
">
            <button type="submit" class="btn waves-effect waves-light col s12 btn-success" >Submit</button>
          
            <button type="" class="btn waves-effect waves-light col s12 btn-danger" >Cancel</button>
          </div>
		  </div>
	      </form>
	  </div>
	</div>
  </section>
</div>