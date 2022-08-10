<?php date_default_timezone_set("Asia/Jakarta"); ?>
<div class="content-wrapper">
  <section class="content-header">
  <h1>
      Proses Input JICA
        <small></small>
      </h1>
      <p>Proyek Test 1<br>04/08/2022</p>
	</h1>
	<ol class="breadcrumb">
	  <li class="active">
		<a href="<?php echo $brd_title_url; ?>">
		  <i class="fa fa-dashboard">
		  </i> 
		  <!-- <?php echo $title; ?> -->
		</a>
	  </li>
	</ol>
  </section>
  <section class="content">
	<div class="panel-body" >
	  
	  <div class="box">
		  <form>
		  <div class="form-group" style="margin-left:15px;margin-top:10px">
			<label for="exampleInputFile" style="color:blue">Surat JICA
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
           
          </div>
		  </div>
	      </form>
		  <button class="btn waves-effect waves-light col s12 btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:85%">Submit</button>
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
        <h1>Berhasil di Proses!</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
