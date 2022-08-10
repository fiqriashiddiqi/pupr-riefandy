<?php date_default_timezone_set("Asia/Jakarta"); ?>
<div class="content-wrapper">
  <section class="content-header">
	<h1>
    INPUT NOTA DINAS
	  <small>
	  </small>
	</h1>
	<p>The River Improvement and Sediment Control in Bangga River (JICA Loan IP-580)<br><?php echo date("d-m-Y");?></p>
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
			<label for="exampleInputFile" style="color:blue">1.  Nota Dinas Pertimbangan Teknis Perpanjangan Waktu
			</label>
			<input type="file" name="file" id="file_A" style=""/>
		  </div>
		  
		  
		  <div class="row" style="margin-left:15px;margin-top:10px">
		  <div class="input-field col clearfix" style="
    float: right;
    margin-right: 18%;
    margin-bottom: 10px;
">
            
          </div>
		  </div>
	      </form>
		  <button class="btn waves-effect waves-light col s12 btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:85%;margin-bottom:10px;">Submit</button>
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
