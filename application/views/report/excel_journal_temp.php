<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-journal-temp.xls");
?>
<html>
<body>
    <center>
       <?php
          $id_temp_journal = isset($_REQUEST['id_temp_journal']) ? $_REQUEST['id_temp_journal'] : NULL;
          $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
          $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
        ?>
        <h3>Data Journal Temporary</h3>  
        <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3>

        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516"; >  
                         <th>No</th>
                         <th>Number Journal</th>
                         <th style="width: 15%">Title</th>
                         <th style="width: 15%">Date Entry</th>
                         <th style="width: 15%">Date Posting</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $no = 0;
                  foreach ($data_journal as $journal_entry){
                  $no++;
                ?>
                <tr valign="top" align="center">
                   <td><?php echo $no; ?></td>
                      <!-- <td><?php echo $journal_entry->coa_code_e; ?> || <?php echo $journal_entry->coa_name_e; ?> </td> -->
                      <td><?php echo $journal_entry->journal_no; ?></td>
                       <td><?php echo $journal_entry->journal_description; ?></td>
                      <td><?php echo $journal_entry->journal_entry; ?></td>
                      <td><?php echo $journal_entry->journal_date; ?></td>
    
                </tr>
                <?php 
                    } 
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>