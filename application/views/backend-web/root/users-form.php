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
                  <label for="display_name">Nama Petugas</label>
                  <input type="text" class="form-control" id="users_name" name="users_name" minlength="4" maxlength="100" placeholder="Nama Pengguna" required="true">
                 <!--  <span style="color: #dd4b39;">* isi nama pengguna.</span> -->
              </div>
              
              <div class="form-group">
                  <label for="users_username">Username</label>
                  <input type="text" class="form-control" id="users_username" minlength="4" maxlength="30" name="users_username" placeholder="Username" required="true">
               <!--    <span style="color: #dd4b39;">* isi username pengguna.</span> -->
              </div>
              <div class="form-group">
                  <label for="users_password">Password</label>
                  <input type="password" class="form-control" id="users_password" minlength="8" maxlength="30" name="users_password" placeholder="Password" required="true">
                <!--   <span style="color: #dd4b39;">* isi password pengguna.</span> -->
              </div>
              <div class="form-group">
                <label>Access Groups</label>
                <select class="form-control select2" name="id_backend_groups" style="width: 100%;" required="true">
                  <option value="">- Access Groups -</option>
                  <?php 
                    foreach ($data_groups as $groups_entry) {
                  ?>
                  <option value="<?php echo $groups_entry->id_backend_groups; ?>"><?php echo $groups_entry->groups_name; ?></option>

                  <?php } ?>
                </select>
               <!--  <span style="color: #dd4b39;">* pilih hak akses pengguna.</span> -->
              </div>
             <!--  <div class="form-group">
                <label>Access Status</label>
                <select class="form-control select2" name="users_access_status" style="width: 100%;" required="true"> -->
                  <!-- <option value="">-Choose Access Status -</option> -->
                  <!-- <option value="Activated">Active</option> -->
                  <!-- <option value="Deactivated">Deactive</option> -->
                <!-- </select> -->
             <!--    <span style="color: #dd4b39;">* pilih status akses pengguna, jika pilih tidak aktif maka pengguna tidak bisa masuk kedalam aplikasi.</span> -->
              <!-- </div> -->
              <div class="form-group">
                <label>Tempat Bayar</label>
                <select class="form-control select2" name="id_tempat_bayar" style="width: 100%;" required="true">
                  <option value="">- Pilih Tempat Bayar -</option>
                  <?php 
                    foreach ($data_tempat as $tempat_entry) {
                  ?>
                  <option value="<?php echo $tempat_entry->id_tempat_bayar; ?>"><?php echo $tempat_entry->nama_tempat; ?></option>

                  <?php } ?>
                </select>
               <!--  <span style="color: #dd4b39;">* pilih hak akses pengguna.</span> -->
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
    </section>
    <!-- /.content -->
  </div>
<!-- end content-wrapper -->

