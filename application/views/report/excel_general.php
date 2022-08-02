<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-General-journal.xls");
?>
<html>
<body>
    <center>
        <h3>Data General Journal</h3>  
        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516"; >  
                     <th style="width: 5%">No</th>
                     <th style="width: 20%">Date</th>
                     <th style="width: 35%" >Account</th>
                     <th style="width: 20%">Debit</th>
                     <th style="width: 20%">Credit</th>

            </thead>
            <tbody>
                <?php
                  $no = 0;
                  foreach ($data_journal as $journal_entry){
                  $no++;
                ?>
                <tr valign="top" align="center">
                     <td><?php echo $no; ?></td>
                      <td><?php echo date('d/m/Y', strtotime($journal_entry->journal_date)); ?> </td> 
                      <td><?php echo $journal_entry->coa_code_e; ?> || <?php echo $journal_entry->coa_name_e; ?> </td>
                      <!-- <td><?php echo $journal_entry->journal_description_form; ?> </td> -->
                      <td align="center"><?php echo number_format($journal_entry->journal_debit,0,".","."); ?> </td>
                      <td align="center"><?php echo number_format($journal_entry->journal_kredit,0,".","."); ?> </td>
    
                </tr>
                <?php 
                    } 
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>