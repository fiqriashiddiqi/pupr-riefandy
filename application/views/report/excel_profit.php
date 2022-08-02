<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Profit-Loss.xls");
?>
<html>
<body>
    <center>
        <?php
          $id_param_coa_e = isset($_REQUEST['id_param_coa_e']) ? $_REQUEST['id_param_coa_e'] : NULL;
          $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
          $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
        ?>
        <h3>Data Profit Loss</h3> 
        <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3> 
        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516"; >  
                        <td style="width: 60%;text-align: center;"><h4><strong>Description</strong></h4></td>
                         <td style="width: 20%;text-align: center;"><h4><strong>Amount</strong></h4></td>
                         <td style="width: 20%;text-align: center;"><h4><strong>Budget</strong></h4></td>
                </tr>
            </thead>
            <tbody>
                <?php

                    $this->load->model('General_Ledger/journal_model');
                    $data_coa_a = $this->journal_model->get_coa_a();
                    // print_r($data_coa_a);
                    foreach ($data_coa_a as $coa_a_entry){
                    if ($coa_a_entry->coa_name_a == "REVENUE" OR $coa_a_entry->coa_name_a == "EXPENSES" OR $coa_a_entry->coa_name_a == "OTHER INCOME / EXPENSE"){
                    $total_coa_a = 0;
                     $total_coa_revenue = 0;
                    // $temp_total_a = 0;

                    ?>
                    <tr>
                      <td colspan="2" style="background-color: #b7b7b7;">&nbsp;&nbsp;&nbsp;<strong><?php echo $coa_a_entry->coa_name_a; ?></strong></td>
                       <td style="background-color: #b7b7b7;">&nbsp;&nbsp;&nbsp;<strong></strong></td>

                    </tr>
                    <?php
                        $data_coa_b = $this->journal_model->get_dropdown_coa_b($coa_a_entry->id_param_coa_a);
                        foreach ($data_coa_b as $coa_b_entry) {
                        $total_coa_b = 0;
                        $total_coa_b_revenue = 0;
                    ?>
                    <tr>
                      <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $coa_b_entry->coa_name_b; ?></strong></td>
                      <td></td>
                       <td></td>

                    </tr>
                    <?php
                            $data_coa_c = $this->journal_model->get_dropdown_coa_c($coa_b_entry->id_param_coa_b);
                            foreach ($data_coa_c as $coa_c_entry) {
                    ?>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $coa_c_entry->coa_name_c; ?></strong></td>
                      <td></td>
                       <td></td>

                    </tr>
                    <?php
                            $data_coa_d = $this->journal_model->get_dropdown_coa_d($coa_c_entry->id_param_coa_c);
                            foreach ($data_coa_d as $coa_d_entry) {
                    ?>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $coa_d_entry->coa_name_d; ?></strong></td>
                      <td></td>
                       <td></td>

                    </tr>
                    <?php
                            $data_coa_e = $this->journal_model->get_dropdown_coa_e($coa_d_entry->id_param_coa_d);
                            foreach ($data_coa_e as $key => $coa_e_entry) {
                              

                            $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : null;
                            $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : null;

                            $sum_data = $this->journal_model->sum_journal_by_coa_e($coa_e_entry->id_param_coa_e,$start_date,$end_date);

                            // $sum_amount = $sum_data[0]->debit-$sum_data[0]->credit;
                            $sum_amount = 0;
                            $sum_revenue = 0;
                            
                           
                            // if($sum_data[0]->debit==$sum_data[0]->credit){
                            //   $sum_amount = $sum_data[0]->debit;
                            // }else{
                            $sum_revenue = $sum_data[0]->debit-$sum_data[0]->credit;
                            $sum_amount = $sum_data[0]->debit-$sum_data[0]->credit;
                            // }
                            
                            $total_coa_b_revenue = $total_coa_b_revenue + $sum_revenue;
                            $total_coa_revenue = $total_coa_revenue + $sum_revenue;

                            $total_coa_a = $total_coa_a + $sum_amount;
                            $total_coa_b = $total_coa_b + $sum_amount;
                          

                            if ($total_coa_a > 0) {
                              
                              $total_coa_a=$total_coa_a;
                              $total_coa_b=$total_coa_b;
                              // $stor_kredit=0;
                            }else{
                              // $stor_debit=0;
                              $total_coa_a=$total_coa_a  ;
                              $total_coa_b=$total_coa_b ;

                            }
                             if ($total_coa_revenue > 0) {
                              
                              $total_coa_revenue=$total_coa_revenue;
                              $total_coa_b_revenue=$total_coa_b_revenue;
                              // $stor_kredit=0;
                            }else{
                              // $stor_debit=0;
                              $total_coa_revenue=$total_coa_revenue ;
                              $total_coa_b_revenue=$total_coa_b_revenue ;
                            }
                            // var_dump($total_coa_b_revenue);

                    ?>      
                    <tr>    
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <?php echo $coa_e_entry->coa_name_e; ?></td>
                            <?php
                             if($coa_a_entry->coa_name_a=="REVENUE"){
                              ?>
                              <td align="right"><?php echo number_format($sum_revenue,0,".","."); ?></td>
                              <td></td>

                              <?php
                            }else if($coa_a_entry->coa_name_a=="EXPENSES" OR $coa_a_entry->coa_name_a=="OTHER INCOME / EXPENSE"){
                              ?>
                              <td align="right"><?php echo number_format($sum_amount
                                ,0,".","."); ?></td>
                              <td></td>


                              <?php
                            }
                            ?>
                            
                    </tr>
                    <?php
                                    }
                    ?>
                    <tr>
                            <td>&nbsp;</td>
                            <td align="right">&nbsp;</td>
                            <td align="right">&nbsp;</td>
                    </tr>
                    <?php
                                }
                            }
                    ?>
                    <tr>
                            <td align="center" style="background-color: lightgray;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>TOTAL <?php echo $coa_b_entry->coa_name_b; ?></strong></td>
                             <?php
                             if($coa_a_entry->coa_name_a=="REVENUE"){
                              ?>
                              <td align="right" style="background-color: lightgrey;"><?php echo number_format($total_coa_b_revenue
                                ,0,".","."); ?></td>
                              <td align="right" style="background-color: lightgrey;"><?php echo number_format($total_coa_b_revenue
                                ,0,".","."); ?></td>



                              <?php
                            }else if($coa_a_entry->coa_name_a=="EXPENSES" OR $coa_a_entry->coa_name_a=="OTHER INCOME / EXPENSE"){
                              ?>
                              <td align="right" style="background-color: lightgray;"><?php echo number_format($total_coa_b
                                ,0,".","."); ?></td>
                                <td align="right" style="background-color: lightgray;"><?php echo number_format($total_coa_b
                                ,0,".","."); ?></td>
                              


                              <?php
                            }
                            ?>
                     
                    </tr>

                    <?php
                        }
                    ?>
                    <tr>
                            <td align="center" style="background-color: #b7b7b7;">&nbsp;&nbsp;&nbsp;<strong>TOTAL <?php echo $coa_a_entry->coa_name_a; ?></strong></td>
                            <td align="right" style="background-color: #b7b7b7;">
                           
                  
                            <?php
                             if($coa_a_entry->coa_name_a=="REVENUE"){
                            ?> 
                              <?php echo number_format($total_coa_revenue
                                ,0,".","."); ?>

                              </td>
                            <td align="center" style="background-color: #b7b7b7;">&nbsp;&nbsp;&nbsp;</td>
                            



                              <?php
                            }else if($coa_a_entry->coa_name_a=="EXPENSES" OR $coa_a_entry->coa_name_a=="OTHER INCOME / EXPENSE"){
                              ?>
                             <?php echo number_format($total_coa_a
                                ,0,".","."); ?></td>
                             <td align="center" style="background-color: #b7b7b7;">&nbsp;&nbsp;&nbsp;</td>


                              <?php
                            }
                            ?>

                              <?php 
                                if($coa_a_entry->coa_name_a=="REVENUE"){
                                  $end_total_revenue = $total_coa_revenue;
                                }else if($coa_a_entry->coa_name_a=="EXPENSES" OR $coa_a_entry->coa_name_a=="OTHER INCOME / EXPENSE"){
                                  $end_total_expense = $total_coa_a;
                                }
                              ?>

                           </strong></td>
                    </tr>
                    <tr>
                            <td>&nbsp;</td>

                            <td align="right">
                             
                            </td>

                    </tr>
                    <?php
                    }
                    } ?>

                     <tr>
                            <td style="text-align: center;"><strong>TOTAL PROFIT LOSS </strong></td>
                            <td align="right">
                              <?php
                                $netto = $end_total_revenue - $end_total_expense;
                                echo number_format($netto,0,".",".");

                              ?>
                            </td>
                              <td></td>

                    </tr>
            </tbody>
        </table>
    </center>
</body>

</html>