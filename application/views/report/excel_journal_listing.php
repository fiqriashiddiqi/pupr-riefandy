<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-journal-Listing.xls");
?>
<html>
<body>
    <center>
        <?php
          $id_journal = isset($_REQUEST['id_journal']) ? $_REQUEST['id_journal'] : NULL;
          $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
          $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
        ?>

        <h3>Data Journal Listing</h3>  
         <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3>
        <table border="1">
            <thead>
                <tr style="background-color: #ffc516"; >  
                
                           <th style=" text-align: center">Journal Number</th>
                           <th style=" text-align: center">Entry Date</th>
                           <th style=" text-align: center">Posting Date</th>
                           <th style=" text-align: center">Journal Description</th>
                           <th style=" text-align: center" >Account</th>
                           <th style="text-align: center" >Debit</th>
                           <th style="text-align: center" >Credit</th>   
                           <th style="text-align: center" >Cashflow Code</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                      $data_journal = $this->journal_model->get_journal_detail(null,@$start_date,@$end_date);
                        $total_debit = 0;
                        $total_kredit = 0;

                        foreach ($data_journal as $journal_entry){
                    ?>
                        <tr>
                            <td align="center"><?php echo($journal_entry->journal_no); ?></td>
                            <td align="right"><?php echo($journal_entry->journal_entry); ?></td>
                            <td align="right"><?php echo($journal_entry->journal_date); ?></td>
                            <td align="left"><?php echo($journal_entry->journal_description); ?></td>
                            <td align="left"><?php echo $journal_entry->coa_code_e; ?> || <?php echo $journal_entry->coa_name_e; ?> </td> 
                            <td align="right"><?php echo number_format($journal_entry->journal_debit,0,".","."); ?></td>
                            <td align="right"><?php echo number_format($journal_entry->journal_kredit,0,".","."); ?></td>
                            <td align="right"><?php echo($journal_entry->cashflow_code_status); ?></td>
                        </tr>

                    <?php
                        $total_debit = $total_debit + $journal_entry->journal_debit;
                        $total_kredit = $total_kredit + $journal_entry->journal_kredit;
                      }
                    ?>
            </tbody>
        </table>
    </center>
</body>

</html>