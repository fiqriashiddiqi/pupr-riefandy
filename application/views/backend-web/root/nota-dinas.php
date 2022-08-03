<?php date_default_timezone_set("Asia/Jakarta"); ?>
<div class="content-wrapper">
  <section class="content-header">
	<h1>
    PERSETUJUAN REKOMENDASI TEKNIS PERPANJANGAN WAKTU
	  <small>
	  </small>
	</h1>
	<p>Proyek Test 1<br>04/08/2022</p>
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
			<label for="exampleInputFile" style="color:blue">1.  Nota Dinas Pertimbangan Teknis Perpanjangan Waktu
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
    margin-right: 18%;
    margin-bottom: 10px;
">
            <button type="submit" class="btn waves-effect waves-light col s12 btn-success" >Submit</button>
          </div>
		  </div>
	      </form>
	  </div>
	</div>
  </section>
</div>
