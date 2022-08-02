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
                 <div class="col-lg-12 col-xs-12 ">
                
              </div>
              <div class="col-lg-6 col-xs-12">
              </div>
              <div class="col-lg-6 col-xs-12 text-right">
              <a href="<?php echo $create_url; ?>" class="btn-primary btn-sm btn btnbig2">Add Groups</a>
              </div>
              </div>
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
                  <th>Groups Name</th>
                  <th width="150" style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                  $this->load->model("crud_model");
                  $data_setting = $this->crud_model->get_setting();
                  $limit   = $data_setting[0]->setting_pagination;
                  $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

                  
                  if(empty($page)){
                      $position  = 0;
                      $page = 1;
                  } else {
                      $position = ($page-1) * $limit;
                  }

                  $this->load->model('Website/groups_model');
                  $data_groups = $this->groups_model->get_group_list($limit,$position)->result();
                  $no = $position+1;
                     foreach ($data_groups as $groups_entry){
                   
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $groups_entry->groups_name; ?></td>
                  <td class="text-center">

                    <a href="<?php echo $info_url; ?>/<?php echo $groups_entry->id_backend_groups; ?>" id="info" class="btn btn-info btn-sm btnwdt">Detail</a>

                    <a href="#" id="delete" onclick="delete_data(<?php echo $groups_entry->id_backend_groups; ?>)" class="btn-danger btn-sm btn btnwdt" >Delete</a>

               <!--      <a href="<?php echo $delete_url; ?>/<?php echo $groups_entry->id_backend_groups; ?>" id="delete" onclick="return confirm('are you sure to delete this ?')" class="btn-danger btn-sm btn btnwdt">Delete</a> -->

                  </td>
                </tr>
                <?php
                 $no++; } ?>
                </tbody>
              </table>
               <?php
                $data_rows = $this->groups_model-> get_group_list()->num_rows();
                $all_page  = ceil($data_rows/$limit);
                ?>
                <center>
                <ul class="pagination">
                    <li>
                        <?php
                            if($page > 1){
                                $prev = $page-1;
                                echo "<a href='".base_url()."Website/B_groups?page=$prev'>Previous</a>";
                            }
                        ?>
                    </li>
                    <li>
                        <?php
                            for($i=1;$i<=$all_page;$i++)
                                if ($i != $page){
                                    echo "<a href='".base_url()."Website/B_groups?page=$i'>$i</a>";
                                }
                        ?>
                        </li>
                        <li>
                        <?php
                            if($page < $all_page){
                                $next=$page+1;
                                echo "<a href='".base_url()."Website/B_groups?page=$next'>Next</a>";
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
   <script type="text/javascript">
    function delete_data(id_backend_groups)
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
                window.location = "<?php echo $delete_url; ?>/" + id_backend_groups;
            } else {
                event.preventDefault();
            }
        }
        });
    }
</script>


