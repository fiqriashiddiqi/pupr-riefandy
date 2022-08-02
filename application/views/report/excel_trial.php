<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Trial-Balance.xls");
?>
<html>
<body>
    <center>
            <?php 
               $id_param_coa_e = isset($_REQUEST['id_param_coa_e']) ? $_REQUEST['id_param_coa_e'] : null;
               $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
               $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
            ?>
        <h3>Data Trial Balance</h3>  
        <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3>
        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516"; >  
                        <th style="text-align: center; padding-bottom: 25px;" rowspan='2' >Account</th>
                        <th style="text-align: center; padding-bottom: 25px;" rowspan='2'>Beginning Balance</th>
                        <th style="text-align: center;" colspan='2'>Movement</th>
                        <th style="text-align: center; padding-bottom: 25px;" rowspan='2'>Ending Balance</th>
                    </tr>
              
                    <tr>
                   
                         <th style= "text-align: center;">Debit</th>
                         <th style= " text-align: center;">Credit</th>
                        
                         <!-- <th style="  text-align: center;">Saldo</th> -->
                         <!-- <th   text-align: center;">Action</th> --> 
                    </tr>
            </thead>
            <tbody>
                <?php
                    $data_journal = $this->journal_model->get_trialbalance($id_param_coa_e,null,@$start_date,@$end_date);

                    $no=0;
                    $total_endsaldo= 0;
                    $total_begining= 0;
                    $saldodebit = 0;
                    $saldokredit = 0;
                    $saldo_mutasi_debit=0;
                    $saldo_mutasi_kredit=0;
                    $endsaldo=0;
                    $saldobegening=0;
                    // var_dump($data_journal); die();
                       foreach ($data_journal as $journal_entry){
                    $no++;
                            $data_saldo_akhir = $this->journal_model->get_saldo_akhir_trial($journal_entry->id_param_coa_e,@$start_date);

                            $isExists = $this->journal_model->get_journaldate_status(@$start_date,@$end_date);

                            if($isExists != "0"){
                              // echo "a";

                                $saldobegening=  @$data_saldo_akhir[0]->debit - @$data_saldo_akhir[0]->kredit;
                                $saldo =  $journal_entry->debit - $journal_entry->kredit;
                                $endsaldo= $saldobegening;

                                // $saldo_mutasi_kredit = $journal_entry->kredit;
                                // $saldo_mutasi_debit = $journal_entry->debit;
             

                                $total_endsaldo = $total_endsaldo + $endsaldo;
                                $total_begining = $total_begining + $saldobegening;

                                $saldokredit=$saldokredit+$saldo_mutasi_kredit;
                                $saldodebit=$saldodebit+$saldo_mutasi_debit;

                            }else{

                                $saldobegening=  @$data_saldo_akhir[0]->debit - @$data_saldo_akhir[0]->kredit;

                                $saldo_mutasi_kredit = $journal_entry->kredit;
                                $saldo_mutasi_debit = $journal_entry->debit;
                                $saldo =  $journal_entry->debit - $journal_entry->kredit;

         
                                $endsaldo= $saldobegening + $journal_entry->debit -  $journal_entry->kredit;
                                $total_endsaldo = $total_endsaldo + $endsaldo;
                                $total_begining = $total_begining + $saldobegening;
                         

                                $saldokredit=$saldokredit+$saldo_mutasi_kredit;
                                $saldodebit=$saldodebit+$saldo_mutasi_debit;
                          }

                    ?>  
                    <tr>
                     <!--  <td><?php echo $no; ?></td>
                      <td><?php echo date('d/m/Y', strtotime($journal_entry->journal_date)); ?> </td>  -->
                      <td><?php echo $journal_entry->coa_code_e; ?> || <?php echo $journal_entry->coa_name_e; ?> </td>
                      <td align="center"><?php echo number_format($saldobegening,0,".","."); ?></td>
                      <td align="center"><?php echo number_format($saldo_mutasi_debit,0,".","."); ?> </td>
                      <td align="center"><?php echo number_format($saldo_mutasi_kredit,0,".","."); ?> </td>
                       <td align="center"><?php echo number_format($endsaldo,0,".","."); ?></td>
                      
                    </tr>    
                    <?php 
                    } 
                    ?>
                    </tbody>
                        <tr>
                            <!-- <td></td> -->
                   
                            <td align="center"><strong>TOTAL</strong></td>
                            <td align="center"><?php echo number_format($total_begining,0,".","."); ?></td>
                            <td align="center"><?php echo number_format($saldodebit,0,".","."); ?> </td>
                            <td align="center"><?php echo number_format($saldokredit,0,".","."); ?> </td>
                            <td align="center"><?php echo number_format($total_endsaldo,0,".","."); ?></td>
                    
                         
                        </tr>
            </tbody>
        </table>
    </center>
</body>

</html>