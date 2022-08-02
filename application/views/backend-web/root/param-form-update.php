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
        <li class="active"><a href="<?php echo $brd_title_url; ?>"><i class="fa fa-dashboard"></i> <?php echo $brd_title_main; ?></a></li>
        <li><a href="<?php echo $brd_title_url_sub; ?>"></i> <?php echo $brd_title_sub; ?></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                <?php if ($this->session->flashdata('alert_success')) { ?>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-check"></i>
                <?php echo $this->session->flashdata('alert_success'); ?></p>
                </div>
                <?php } ?>

                <?php if ($this->session->flashdata('alert_error')) { ?>
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i>
                <?php echo $this->session->flashdata('alert_error'); ?></p>
                </div>
                <?php } ?>
        <div class="box" id="">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo $form_url; ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    <label for="users_name">Port</label>
                    <input type="hidden" value="<?php echo $data_param[0]->id_backend_param_global; ?>" name="id_backend_param_global">
                    <input type="text" class="form-control" id="port" value="<?php echo $data_param[0]->port; ?>" name="port" maxlength="100" placeholder="" required="true">
                   <!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
                </div>
               
                <div class="form-group">
                    <label for="ip_address">IP Address</label>
                    <input type="text" class="form-control" id="ip_address" name="ip_address" value="<?php echo $data_param[0]->ip_address; ?>" placeholder="" required="true">
                </div>
                <div class="form-group">
                    <label for="request">Request</label>
                    <input type="text" class="form-control" id="request" name="request" value="<?php echo $data_param[0]->request; ?>" placeholder="" required="true">
                </div>
                <div class="form-group">
                    <label for="curl">URL</label>
                    <input type="text" class="form-control" id="curl" name="curl" value="<?php echo $data_param[0]->curl; ?>" placeholder="" required="true">
                </div>
                <div class="form-group">
                    <label for="merchant_type">Merchant Type</label>
                    <input type="text" class="form-control" id="merchant_type" name="merchant_type" value="<?php echo $data_param[0]->merchant_type; ?>" placeholder="" required="true">
                </div>
              
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right">
                <!-- <a href="<?php echo $back_url; ?>" id="info" class="btn btn-warning btn-sm btnwdt">Back</a> -->
                <button type="submit" class="btn btn-success btn-sm btnbig"><i class="fa fa-fa-save"></i> Save/Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>


        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- end content-wrapper -->

