<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-PDL.xls");
?>
<html>
<body>
    <?php
          $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : NULL;
          $id_backend_users = isset($_REQUEST['id_backend_users']) ? $_REQUEST['id_backend_users'] : NULL;
          $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
          $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
        ?>
<center>
                            <h3>Laporan Per Tanggal <?php echo date('d-m-Y', strtotime($start_date));?> s/d <?php echo date('d-m-Y', strtotime($end_date));?></h3>
          
                            <table width="1000" border="1">
                                <thead>
                                    <tr>
                                         <th style="background-color: lightblue;">No</th>
                                         <th style="text-align: center;">Tanggal</th>                 
                                         <th style="text-align: center;">Kode Bayar</th>
                                         <th style="text-align: center;">Jenis Pajak</th>
                                         <th style="text-align: center;">Nama Petugas</th>
                                         <th style="text-align: center;">Tagihan Pokok</th>
                                         <th style="text-align: center;">Tagihan Denda</th>
                                         <th style="text-align: center;">Biaya Admin Bank</th>                 
                                         <th style="text-align: center;">Total</th>                 
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                        $total = 0;
                                        $total_all = 0;
                                        $data_laporan = $this->report_model->get_laporan_list_report_admin(null,@$id_backend_users,@$start_date,@$end_date);
                                           foreach ($data_laporan as $laporan_entry){
                                        $no++;
                                        $total = 0 + $laporan_entry->tagihan_pokok + $laporan_entry->tagihan_denda + $laporan_entry->admin_bank;
                                        ?>
                                    <tr>
                                          <td><?php echo $no; ?></td>
                                          <td><?php echo date('d-m-Y', strtotime($laporan_entry->updated_date)); ?></td>
                                          <td><?php echo chr(39). $laporan_entry->kd_bayar; ?></td>
                                          <td><?php echo $laporan_entry->nama_rekening; ?></td>
                                          <td><?php echo $laporan_entry->users_name; ?></td>
                                          <td><?php echo $laporan_entry->tagihan_pokok; ?></td>
                                          <td><?php echo $laporan_entry->tagihan_denda; ?></td>
                                          <td><?php echo $laporan_entry->admin_bank; ?></td>
                                          <td><?php echo str_replace(",", ".", number_format($total)); ?></td>
                                          
                                        </tr>
                                        <?php 
                                        // $no++;
                                        $total_all = $total_all + $total;
                                        }
                                        echo "
                                          <tr>
                                            <td colspan='8'><b>Total Seluruh</b></td>
                                            <td><b>Rp. ".str_replace(",", ".", number_format($total_all))."</b></td>
                                          </tr>
                                        "; 
                                        ?>
                                </tbody>
                            </table>
</center>
</body>
</html>
<?php 
    echo"<script>alert('Mendownload Data Pengguna.')</script>";
    echo "<script>history.back(1)</script>";
?>