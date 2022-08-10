<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!-- Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      JICA CONCURRENCE
        <small></small>
      </h1>
      <p>The River Improvement and Sediment Control in Bangga River (JICA Loan IP-580)<br><?php echo date("d-m-Y");?></p>
      
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
          

          <!-- <div class="box collapse" id="filter_users">
            <div class="box-header with-border">
              <h3 class="box-title">Data Filters</h3>
            </div>
            <form action="<?php echo $filter_url; ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                <label>Access</label>
                <select class="form-control select2" name="id_backend_groups" style="width: 100%;">
                  <option value="">- Select roles -</option>
                  <?php 
                    foreach ($data_groups as $groups_entry) {
                  ?>
                  <option value="<?php echo $groups_entry->id_backend_groups; ?>"><?php echo $groups_entry->groups_name; ?></option>

                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Access Status</label>
                <select class="form-control select2" name="users_access_status" style="width: 100%;">
                  <option value="">- Access Status -</option>
                  <option value="Activated">Active</option>
                  <option value="Deactivated">Deactive</option>
                </select>
              </div>
              </div>
              <div class="box-footer text-right">
                <button type="submit" class="btn btn-warning">Filters</button>
              </div>
            </form>
          </div> -->

          <div class="box">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              <div class="col-xs-12 col-lg-12" >
              <div class="col-xs-12 col-lg-12" style="overflow-y: auto;">
              <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th style="text-align: center;">Dokumen</th>
                  <th style="text-align: center;">Download</th>
                  <!-- <th style="text-align: center;">Status</th>
                  <th width="180" style="text-align: center;">Keterangan</th> -->
                </tr>
                </thead>
                <tbody>
        
                <tr>
                  <td>1.</td>
                  <td>Jica Concurrence</td>
                  <td>
                    <center>
                      <a href="<?php echo base_url();?>uploads/file/8. JICA Concurrence.pdf" download><i class="icon fa fa-download "></i></a>
                    </center>
                  </td>
                  <!-- <td>
                    <center>
                    <select class="form-control btn-primary" style="width:80%;border-radius:10px;text-align:center">
                      <option value=1>Lengkap</option>
                      <option value=0>Tdk Lengkap</option>
                    </select>
                    </center>

                  </td>
                  
                  <td class="text-center">
                    <center>
                    <select class="form-control btn-primary" style="width:55%;border-radius:10px;text-align:center">
                      <option value=1>Ok</option>
                      <option value=0>Tdk Ok</option>
                    </select>
                    </center>
                  </td> -->
                </tr>
                
                </tbody>
              </table>
               
              </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- end content-wrapper -->

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
<script type="text/javascript">
  function loaddata(id_tempat_bayar)
  {
    var id_tempat_bayar = id_tempat_bayar;

    $.ajax({
          type: 'POST',
          url: "<?php echo base_url(); ?>Admin/B_tempatbayar/access_status_exchange",
          data: {
            id_tempat_bayar : id_tempat_bayar
          },

          success: function() {
             //alert('DONE' + id_aboutmenu);
     
          }
    });

    event.preventDefault();

  }
  </script>

  <script type="text/javascript">
    function delete_data(id_tempat_bayar)
    {
        bootbox.confirm({
        title: "Deleting Data?",
        message: "Do you want to delete this data?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancel',
                className: 'btn-default'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Delete',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if (result == true){
                window.location = "<?php echo $delete_url; ?>/" + id_tempat_bayar;
            } else {
                event.preventDefault();
            }
        }
        });
    }
</script>


