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
                  <label for="display_name">Group Name</label>
                  <input type="text" class="form-control" id="groups_name" name="groups_name" minlength="4" maxlength="100" placeholder="Groups name" required="true">
                 <!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right">
                  <a href="<?php echo $back_url; ?>" id="info" class="btn btn-warning btn-sm btnwdt">Back</a>
                <button type="submit" class="btn btn-success btnbig">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- end content-wrapper -->

