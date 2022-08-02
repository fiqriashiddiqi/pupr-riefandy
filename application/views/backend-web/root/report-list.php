<?php date_default_timezone_set("Asia/Jakarta"); ?>

<style type="text/css">
#overflow_1, #overflow_2{width: 300px; border: none 0px RED;
overflow-x: scroll; overflow-y:hidden;}
#overflow_1{height: 20px; }
#overflow_2{height: 100px; }
#div1 {width:1000px; height: 20px; }
#div2 {width:1000px; height: 100px; background-color: #88FF88;
overflow: auto;}
</style>
<!-- Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title;?>
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
                 <div class="col-lg-12 col-xs-12">
               <form method="get" action="#"> 
                  
                  <?php
                  $this->load->model('auth_model');
                  $users_username = $this->session->userdata('users_username');
                  $users_password = $this->session->userdata('users_password');

                  $check_access = $this->auth_model->get_access($users_username, $users_password);
                  $access_groups = $check_access[0]->id_backend_groups;
                  $access_user = $check_access[0]->id_backend_users;
                  // var_dump($access_groups);
                  // die();
                  if ($access_groups==1) {
                  ?>
                      <div class="col-lg-6 col-xs-12">
                    <?php 
                      $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : null;
                      $id_backend_users = isset($_REQUEST['id_backend_users']) ? $_REQUEST['id_backend_users'] : null;
                      $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
                      $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
                    ?>
                    <div class="form-group">
                    <label for="">Start Date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" name="start_date" class="form-control pull-right datepicker" value="<?php echo @$start_date;?>" placeholder="Start Date" id="start_date">
       
                    </div>
                  </div>
                     <div  class="form-group" ">
                    <label>Nama Petugas</label>
                      <select class="form-control select2" name="id_backend_users" style="width: 100%;" required="true">
                           <option value="">Pilih Petugas</option>

                      <?php
                       
                            $this->load->model('Website/users_model');
                            foreach ($data_dropdown_user as $laporan_entry) {
                                                                         
                      ?>
                            <option value="<?php echo $laporan_entry->id_backend_users;  ?>" <?php if($id_backend_users==$laporan_entry->id_backend_users){ echo"selected='selected'"; }?> ><?php echo $laporan_entry->users_name; ?></option>


                      <?php
                    
                            }
                      ?>

                      </select>
                  
                  </div>
                  <?php  
                  }elseif ($access_groups==2) {
                  ?>
                  <div class="col-lg-6 col-xs-12">
                    <?php 
                      $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : null;
                      $id_backend_users = isset($_REQUEST['id_backend_users']) ? $_REQUEST['id_backend_users'] : null;
                      $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
                      $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
                    ?>
                    <div class="form-group">
                    <label for="">Start Date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" name="start_date" class="form-control pull-right datepicker" value="<?php echo @$start_date;?>" placeholder="Start Date" id="start_date">
       
                    </div>
                  </div>
                     <div  class="form-group" ">
                    <label>Nama Petugas</label>
                      <select class="form-control select2" name="id_backend_users" style="width: 100%;">
                           <option value="">Pilih Petugas</option>

                      <?php
                       
                            $this->load->model('Website/users_model');
                            foreach ($data_dropdown_user as $laporan_entry) {
                                                                         
                      ?>
                            <option value="<?php echo $laporan_entry->id_backend_users;  ?>" <?php if($id_backend_users==$laporan_entry->id_backend_users){ echo"selected='selected'"; }?> ><?php echo $laporan_entry->users_name; ?></option>


                      <?php
                    
                            }
                      ?>

                      </select>
                  
                  </div>
                  <?php
                  }elseif ($access_groups==3) {
                  ?>
                  <div class="col-lg-6 col-xs-12">
                    <?php 
                      $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : null;
                      $id_backend_users = $access_user;
                      $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
                      $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
                    ?>
                    <div class="form-group">
                    <label for="">Start Date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" name="start_date" class="form-control pull-right datepicker" value="<?php echo @$start_date;?>" placeholder="Start Date" id="start_date">
       
                    </div>
                  </div>
                     
                  <?php
                  }
                  ?>
                 
                  </div>
                  <div class="col-lg-6 col-xs-12">
                    <div class="form-group">
                    <label for="">End Date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" name="end_date" class="form-control pull-right datepicker" value="<?php echo @$end_date; ?>" placeholder="End Date" id="end_date">
       
                    </div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-xs-12" align="right">
                    <button type="submit" class="btn btn-warning">Search !</button>
                  </div>
              </form>
              </div>   
             
              </div>
            </div>
          
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                 <div class="col-lg-6 col-xs-12">
                 <?php 
                   $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : NULL;
                   //$id_backend_users = $access_user;
                ?>
                </div>
                <div class="col-lg-6 col-xs-12 text-right">
                  <!-- <a href="<?php echo $create_url; ?>" class="btn-primary btn-sm btn btnbig2">Add Journal</a> -->
                   <a href="<?php echo $excel_url; ?>?start_date=<?php echo @$start_date;?>&id_backend_users=<?php echo $id_backend_users;?>&end_date=<?php echo @$end_date;?>" class="btn-success btn-sm btn btnbig2">Export Excel</a>
                </div>

                <div class="col-xs-12 col-lg-12">

                  <div class="col-xs-12 col-lg-12"  style="padding-top: 15px;">
                      <table id="" class="table table-bordered table-striped" width="100%">
                        <thead>
                        <tr>
                             <th>No</th>
                             <th >Tanggal</th>                 
                             <th >Kode Bayar</th>              
                             <th >Jenis Pajak</th>
                             <th >Nama Petugas </th>
                             <th >Tagihan Pokok</th>
                             <th >Tagihan Denda</th>
                             <th >Biaya Admin Bank</th>                 
                             <th >Total</th>                 
                        </tr>
                        </thead>
                        <tbody>
                       <?php
                        // $limit   = 6;
                        // $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

                        
                        // if(empty($page)){
                        //     $position  = 0;
                        //     $page = 1;
                        // } else {
                        //     $position = ($page-1) * $limit;
                        // }

                        $this->load->model('Report/Report_model');
                        // $data_journal = $this->journal_model->get_journal_list($limit,$position)->result();

                        // $no = $position+1;
                        // $data_journal = $this->journal_model->get_journal();
                        $data_laporan = $this->report_model->get_laporan_list_report_admin(null,@$id_backend_users,@$start_date,@$end_date);

                        $no=0;
                        $total = 0;
                        $total_all = 0;
                        // var_dump($pokok);
                        // die();
                        
                           foreach ($data_laporan as $laporan_entry){
                            $pokok = $laporan_entry->tagihan_pokok;
                            
                            $total = 0 + $laporan_entry->tagihan_pokok + $laporan_entry->tagihan_denda + $laporan_entry->admin_bank;
                            $no++;
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo date('d-m-Y', strtotime($laporan_entry->updated_date)); ?></td>
                          <td><?php echo $laporan_entry->kd_bayar; ?></td>
                          <td><?php echo $laporan_entry->nama_rekening; ?></td>
                          <td><?php echo $laporan_entry->users_name; ?></td>
                          <td><?php echo $laporan_entry->tagihan_pokok; ?></td>
                          <td><?php echo $laporan_entry->tagihan_denda; ?></td>
                          <td><?php echo $laporan_entry->admin_bank; ?></td>
                          <td><?php echo str_replace(",", ".", number_format($total))?></td>
                        </tr>
                        <?php 
                        // $no++;
                        $total_all = $total_all + $total;
                        }
                        
                        echo "
                          <tr>
                            <td colspan='8'><b>Total</b></td>
                            <td><b>Rp. ".str_replace(",", ".", number_format($total_all))."</b></td>
                          </tr>
                        "; 
                        ?>
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
<script type="text/javascript">
function delete_data(id_journal)
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
            window.location = "<?php echo $delete_url; ?>/" + id_journal;
        } else {
            event.preventDefault();
        }
    }
    });
}

var overflow_1 = document.getElementById('overflow_1');
var overflow_2 = document.getElementById('overflow_2');
overflow_1.onscroll = function() {
  overflow_2.scrollLeft = overflow_1.scrollLeft;
};
overflow_2.onscroll = function() {
  overflow_1.scrollLeft = overflow_2.scrollLeft;
};
</script>

