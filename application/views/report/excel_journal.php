<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-journal.xls");
?>
<html>
<body>

  <?php
          $id_journal = isset($_REQUEST['id_journal']) ? $_REQUEST['id_journal'] : NULL;
          $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
          $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
        ?>
    <center>
        <h3>Data Journal </h3>
        <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3>
          
        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516"; >  
                     <th style="width: 5%">No</th>
                     <th style="width: 20%">Number Journal</th>
                     <th style="width: 35%" >Title</th>
                     <th style="width: 20%">Date Entry</th>
                     <th style="width: 20%">Date Posting</th>
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
                  <td><?php echo $journal_entry->journal_no; ?></td>
                  <td align="left"><?php echo $journal_entry->journal_description; ?></td>
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