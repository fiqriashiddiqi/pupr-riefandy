<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-balance-Sheet.xls");
?>
<html>
<body>
    <center>
        <?php 
            $id_param_coa_e = isset($_REQUEST['id_param_coa_e']) ? $_REQUEST['id_param_coa_e'] : null;
            $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
            $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
            $start_date_comparison = isset($_REQUEST['start_date_comparison']) ? $_REQUEST['start_date_comparison'] : date('Y-m-d');
            $end_date_comparison = isset($_REQUEST['end_date_comparison']) ? $_REQUEST['end_date_comparison'] : date('Y-m-d');
        ?>
        <h3>Data Balance Sheet</h3>  
        <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3> 
         <h3>Dan Pembanding Per Tanggal <?php echo "$start_date_comparison";?>  s/d  <?php echo "$end_date_comparison";?>  </h3> 
        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516"; >  
                  <td style="width: 50%;text-align: center;"><h4><strong>Description</strong></h4></td>
                  <td style="width: 25%;text-align: center;"><h4><strong>As Of</strong></h4></td>
                  <td style="width: 25%;text-align: center;"><h4><strong>Comparison</strong></h4></td>
                </tr>
            </thead>
            <tbody>
               <?php

                    $this->load->model('General_Ledger/journal_model');
                    $data_coa_a = $this->journal_model->get_coa_a();
                    $total_all = 0;
                    foreach ($data_coa_a as $coa_a_entry){
                    if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" || $coa_a_entry->coa_name_a == "REVENUE" || $coa_a_entry->coa_name_a == "EXPENSES" ){
                    $total_coa_a = 0;
                    $total_comparison = 0;

                    if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>


                    <tr>

                      <td colspan="3" style="background-color: #b7b7b7;">&nbsp;&nbsp;&nbsp;<strong><?php echo $coa_a_entry->coa_name_a; ?></strong></td>
                      
                    </tr>
                    <?php
                    }
                        $data_coa_b = $this->journal_model->get_dropdown_coa_b($coa_a_entry->id_param_coa_a);
                        $counter = 0;
                        foreach ($data_coa_b as $coa_b_entry) {
                        $total_coa_b = 0;
                        $total_comparison_b = 0;
                    if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>

                    <tr style="color: black;">
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $coa_b_entry->coa_name_b; ?></strong></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <?php
                  }

                            $data_coa_c = $this->journal_model->get_dropdown_coa_c($coa_b_entry->id_param_coa_b);
                            foreach ($data_coa_c as $coa_c_entry) {
                    
                      if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>
                    <tr class="clickable" data-toggle="collapse" id="<?php echo $counter ?>"  data-target=".<?php echo $counter ?>collapsed">
                     
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#demo" style="color: black;" data-toggle="collapse" data-target="#collapseme-<?php echo $counter ?>" ><strong><?php echo $coa_c_entry->coa_name_c; ?></strong></a></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <?php
                  }
                            $data_coa_d = $this->journal_model->get_dropdown_coa_d($coa_c_entry->id_param_coa_c);
                            foreach ($data_coa_d as $coa_d_entry) {
                    if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>
                 
                    
                    <tr class="collapse out budgets <?php echo $counter ?>collapsed">
                      <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $coa_d_entry->coa_name_d; ?></strong></td>
                      <td></td>
                      <td></td>
                    </tr>
              
                    <?php
                  }
                            $data_coa_e = $this->journal_model->get_dropdown_coa_e($coa_d_entry->id_param_coa_d);
                            foreach ($data_coa_e as $coa_e_entry) {

                            $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : null;
                            $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : null;

                            $start_date_comparison = isset($_REQUEST['start_date_comparison']) ? $_REQUEST['start_date_comparison'] : null;

                            // print_r( $start_date);
                            $end_date_comparison = isset($_REQUEST['end_date_comparison']) ? $_REQUEST['end_date_comparison'] : null;

                            $sum_data = $this->journal_model->sum_journal_by_coa_e($coa_e_entry->id_param_coa_e,$start_date,$end_date);

                            $sum_comparison = $this->journal_model->sum_journal_by_coa_comparison($coa_e_entry->id_param_coa_e,$start_date_comparison,$end_date_comparison);

          
                            $sum_amount = $sum_data[0]->debit-$sum_data[0]->credit;
                            //saldonormalkrdit
                            $sum_amount_kredit = -$sum_data[0]->credit-$sum_data[0]->debit;

                            $sum_amount_comparison = $sum_comparison[0]->debit-$sum_comparison[0]->credit;
                     
                            $total_coa_a = $total_coa_a + $sum_amount;
                            $total_coa_b = $total_coa_b + $sum_amount;


                            $total_comparison = $total_comparison + $sum_amount_comparison;
                            $total_comparison_b = $total_comparison_b + $sum_amount_comparison;



                      if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>      
                    <tr class="collapse out budgets <?php echo $counter ?>collapsed">    
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <?php echo $coa_e_entry->coa_name_e; ?></td>
                            <td align="right"><?php echo number_format($sum_amount,0,".","."); ?> </td>
                            <td align="right"><?php echo number_format($sum_amount_comparison,0,".","."); ?></td>
                    </tr>
                    <?php
                  }
                                    }
                    if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>
                    <tr class="collapse out budgets <?php echo $counter ?>collapsed">
                            <td>&nbsp;</td>
                            <td align="right">&nbsp;</td>
                            <td></td>
                    </tr>
                    <?php
                  }
                 }
                 $counter ++;
                }

                      if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>
                    <tr>
                            <td align="center" style="background-color: lightgray;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>TOTAL <?php echo $coa_b_entry->coa_name_b; ?></strong></td>
                            <td align="right" style="background-color: lightgray;"><strong><?php echo number_format($total_coa_b,0,".","."); ?></strong></td>
                            <td align="right" style="background-color: lightgray;"><strong><?php echo number_format($total_comparison_b,0,".","."); ?></strong></td>
                    </tr>

                    <?php
                  }
                        }
                        if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>
                    <tr>
                            <td align="center" style="background-color: #b7b7b7;">&nbsp;&nbsp;&nbsp;<strong>TOTAL <?php echo $coa_a_entry->coa_name_a; ?></strong></td>
                           <td align="right" style="background-color: #b7b7b7;"><strong>
                              <span value=<?php echo $total_coa_a;?> id=
                              <?php 
                              if($coa_a_entry->coa_name_a=="ASSETS"){
                                echo "total_assets";
                              }elseif ($coa_a_entry->coa_name_a=="LIABILITY") {
                                 echo "total_liabilty";
                              }
                              else{
                                echo "total_equity" ;
                              }?> 
                              >
                              <?php echo number_format($total_coa_a,0,".","."); ?></span></strong></td>
                              <td align="right" style="background-color: #b7b7b7;"><strong>
                              <span value=<?php echo $total_coa_a;?> id=
                              <?php 
                              if($coa_a_entry->coa_name_a=="ASSETS"){
                                echo "total_assets";
                              }elseif ($coa_a_entry->coa_name_a=="LIABILITY") {
                                 echo "total_liabilty";
                              }
                              else{
                                echo "total_equity" ;
                              }?> 
                              >
                              <?php echo number_format($total_comparison,0,".","."); ?></span></strong></td>
                    </tr>

                    <?php 
                  }
                      if($coa_a_entry->coa_name_a=="ASSETS"){
                        $end_total_assets = $total_coa_a;
                        $end_total_assets_comparison = $total_comparison;
                      }elseif ($coa_a_entry->coa_name_a=="LIABILITY") {
                       $end_total_liability = $total_coa_a;
                       $end_total_liability_comparison = $total_comparison;
                      }elseif($coa_a_entry->coa_name_a=="REVENUE"){
                        $end_total_revenue = $total_coa_a;
                        $end_total_revenue_comparison = $total_comparison;
                      }else if($coa_a_entry->coa_name_a=="EXPENSES"){
                        $end_total_expense = $total_coa_a;
                        $end_total_expense_comparison = $total_comparison;
                      }else{
                        $end_total_equity = $total_coa_a;
                        $end_total_equity_comparison = $total_comparison;
                      }
                    if ($coa_a_entry->coa_name_a == "ASSETS" || $coa_a_entry->coa_name_a == "LIABILITY" || $coa_a_entry->coa_name_a == "EQUITY" ){
                    ?>
                    <tr>
                            <td>&nbsp;</td>
                            <td align="right">&nbsp;</td>
                            <td></td>
                    </tr>
                    <?php
                  }
                    }
                    } ?>
                    <tr>
                       <td style="text-align: center;"><strong>TOTAL ASSETS </strong></td>
                            <td align="right">
                              <?php

                                $sheet = $end_total_assets;
                                echo number_format($sheet,0,".",".");

                              ?>
                         </td>
                        <td align="right">
                              <?php

                                $sheet = $end_total_assets_comparison;
                                echo number_format($sheet,0,".",".");

                              ?>
                         </td>

                    </tr>
                     <tr>
                       <td style="text-align: center;"><strong>Profit Loss </strong></td>
                            <td align="right">
                              <?php

                                $netto = $end_total_revenue + $end_total_expense;
                                echo number_format($netto,0,".",".");

                              ?>
                         </td>
                         <td align="right">
                              <?php

                                $netto_comparison = $end_total_revenue_comparison + $end_total_expense_comparison;
                                echo number_format($netto_comparison,0,".",".");

                              ?>
                         </td>
                          
                    </tr> 
                    <tr>
                       <td style="text-align: center;"><strong>Total Liability & Equity </strong></td>
                            <td align="right">
                              <?php

                                $balance =($end_total_liability + $end_total_equity  );
                                echo number_format($balance,0,".",".");

                              ?>
                           </td>

                            <td align="right">
                              <?php
          
                                $balance_comparison =($end_total_liability_comparison + $end_total_equity_comparison );
                                echo number_format($balance_comparison,0,".",".");

                              ?>
                           </td>
                    
                    </tr>
                    <tr>
                       <td style="text-align: center;"><strong>Grand Total Balance </strong></td>
                            <td align="right">
                              <?php
                              $grandtotal=0;

                                $grandtotal =($end_total_assets) + ( $netto) + ($balance );
                                echo number_format($grandtotal,0,".",".");

                              ?>
                           </td>

                            <td align="right">
                              <?php

                              $grandtotalcom=0;


                                $grandtotalcom =($end_total_assets_comparison) + ($netto_comparison) + ($balance_comparison );
                                echo number_format($grandtotalcom,0,".",".");
                              ?>
                           </td>
             
                    </tr>
            </tbody>
        </table>
    </center>
</body>

</html>