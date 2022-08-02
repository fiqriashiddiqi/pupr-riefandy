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
          <div class="box">
            <div class="box-header with-border">
              <div class="row">
                
                
              
              <div class="col-lg-6 col-xs-12">
              </div>
              <div class="col-lg-6 col-xs-12 text-right">
              <!-- <a href="#" data-toggle="collapse" data-target="#filter_users" class="btn-warning btn-sm btn">Filters</a> -->
              <a href="<?php echo $create_url; ?>" class="btn-primary btn-sm btnbig2 btn">Tambah Tempat</a>
              </div>
              </div>
            </div>
          </div>

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
                  <th>Kode Tempat</th>
                  <th>Nama Tempat</th>
                  <th width="180" style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                    $this->load->model("crud_model");
                    //$data_setting = $this->crud_model->get_setting();
                    $limit   = 10;
                    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

                    
                    if(empty($page)){
                        $position  = 0;
                        $page = 1;
                    } else {
                        $position = ($page-1) * $limit;
                    }

                    $this->load->model('Website/tempat_model');
                    $data_tempat = $this->tempat_model->get_tempat_list()->result();
                    $no = $position+1;
                       foreach ($data_tempat as $tempat_entry){
                   
                ?>
        
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $tempat_entry->kd_tempat; ?></td>
                  <td><?php echo $tempat_entry->nama_tempat; ?></td>
                  <!-- -->
                  
                  
                  <td class="text-center">
                    <?php                     
                    if ($tempat_entry->tempat_access_status == "Activated"){
                    ?>

                      <input type="checkbox" name="users_access_status" onchange="loaddata(<?php echo $tempat_entry->id_tempat_bayar; ?>)" checked data-toggle="toggle" value="">
                    
  
                    <?php
                    } else {
                    ?>

                      <input type="checkbox" name="users_access_status" onchange="loaddata(<?php echo $tempat_entry->id_tempat_bayar; ?>)" data-toggle="toggle" value="">

                    <?php
                    }
                    ?>
                    <a href="<?php echo $update_url; ?>/<?php echo $tempat_entry->id_tempat_bayar; ?>" id="edit" class="btn btn-info btn-sm btnwdt">Detail</a>

                     <a href="#" id="delete" onclick="delete_data(<?php echo $tempat_entry->id_tempat_bayar; ?>)" class="btn-danger btn-sm btn btnwdt" >Delete</a>
  

                   <!--  <a href="<?php echo $delete_url; ?>/<?php echo $users_entry->id_backend_users; ?>" id="delete" onclick="return confirm('Are you sure to delete this  ?')" class="btn-danger btn-sm btn btnwdt">Delete</a> -->
                  </td>
                </tr>
                <?php
                $no++;
                 } ?>
                </tbody>
              </table>
               <?php
                $data_rows = $this->tempat_model->get_tempat_list($limit,$position)->num_rows();
                $all_page  = ceil($data_rows/$limit);
                ?>
                <center>
                <ul class="pagination">
                    <li>
                        <?php
                            if($page > 1){
                                $prev = $page-1;
                                echo "<a href='".base_url()."Website/B_tempatbayar?page=$prev'>Previous</a>";
                            }
                        ?>
                    </li>
                    <li>
                        <?php
                            for($i=1;$i<=$all_page;$i++)
                                if ($i != $page){
                                    echo "<a href='".base_url()."Website/B_tempatbayar?page=$i'>$i</a>";
                                }
                        ?>
                        </li>
                        <li>
                        <?php
                            if($page < $all_page){
                                $next=$page+1;
                                echo "<a href='".base_url()."Website/B_tempatbayar?page=$next'>Next</a>";
                            }
                        ?>
                    </li>
                </ul>
                </center>
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


