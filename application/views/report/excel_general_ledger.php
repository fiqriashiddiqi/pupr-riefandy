<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-General-Ledger.xls");
?>
<html>
<body>
    <center>
     <!--  <?php
      $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
        $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
        ?> -->
        <table>
          
        <h3>Data General Ledger</h3> 
       <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3>
        </table>
        <table width="1000" border="1">
          <?php
           $saldo_akhir = 0;
           ?>
            <thead>
                <tr style="background-color: #ffc516"; >  
                   <tr style="background-color: whitesmoke;">
                          <td><strong>Saldo Awal :</strong></td>
                          <td align="center"><?php echo number_format($saldo_akhir); ?></td>
                          <td></td>
                          <td align="center"></td>
                          <td align="center"></td>
                          <td align="center"></td>
                          <td align="center"></td>
                           <td align="center"></td>
                      </tr> 
                      <tr style="background-color: #ffc516";>
                         <th style="display: none;">No</th>
                         <th style="width: 10%;">Date</th>
                         <th style="width: 25%;">Account</th>
                         <th style="width: 8%;"">Number Journal</th>
                         <th style="width: 25%;">Description</th>
                         <th style="text-align: center;width: 10%;">Debit</th>
                         <th style="text-align: center;width: 10%;">Credit</th>
                         <th style="text-align: center;width: 10%;">Saldo</th>
                        
                    </tr>
                </tr>
            </thead>
            <tbody>
                <?php
                  $saldo_akhir = 0;
                 $saldo = $saldo_akhir;
                        $saldodebit = 0;
                        $saldokredit = 0;
                  $no = 0;
                  foreach ($data_journal as $journal_entry){
                  $no++;
                   $saldo = ($saldo + $journal_entry->journal_debit) - $journal_entry->journal_kredit;
                                $saldodebit = $saldodebit + $journal_entry->journal_debit;
                                $saldokredit = $saldokredit + $journal_entry->journal_kredit;
                ?>
                <tr>
                          <td style="display: none;"><?php echo $no; ?></td>
                          <td><?php echo date('d/m/Y', strtotime($journal_entry->journal_date)); ?> </td> 
                          <td><?php echo $journal_entry->coa_code_e; ?> || <?php echo $journal_entry->coa_name_e; ?> </td>
                          <td><?php echo $journal_entry->journal_no; ?> </td>
                          <td><?php echo $journal_entry->journal_description; ?> </td>
                          <td align="center"><?php echo number_format($journal_entry->journal_debit,0,".","."); ?> </td>
                          <td align="center"><?php echo number_format($journal_entry->journal_kredit,0,".","."); ?> </td>
                          <td align="center"><?php echo number_format($saldo,0,".","."); ?> </td>
                        </tr>
                <?php 
                    } 
                ?>
            </tbody>
                       <tr>          
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td align="center"><strong>TOTAL</strong></td>
                          <td align="center"><?php echo number_format($saldodebit,0,".","."); ?> </td>
                          <td align="center"><?php echo number_format($saldokredit,0,".","."); ?> </td>
                          <td align="center"> </td>
                          <!-- <td align="center"><?php echo number_format($saldo,2); ?> </td> -->
                      </tr>
                      <tr style="background-color: whitesmoke;">
                        <span>
                          <td><strong>Saldo Akhir : </strong></td>
                          <td><?php echo number_format($saldo,0,".","."); ?></td>
                          <td></td>
                          <td align="center"></td>
                          <td align="center"> </td>
                          <td align="center"> </td>
                          <td align="center"> </td>
                          </span>
                      </tr>  
                     
        </table>
    </center>
</body>

</html>