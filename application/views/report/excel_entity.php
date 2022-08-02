<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Enitity.xls");
?>
<html>
<body>
    <center>
        <h3>Data Enitity</h3>  
        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516";>
                     <th style="width: 5%">No</th>
                     <th style="width: 30%">Entity Name</th>
                     <th style="width: 30%">Entity score</th>   
                </tr>
            </thead>
            <tbody>
                <?php
                  $no = 0;
                  foreach ($data_entity as $entity_entry){
                  $no++;
                ?>
                <tr valign="top" align="center">
                  <td><?php echo $no; ?></td>
                  <td><?php echo $entity_entry->entity_name; ?></td>
                  <td><?php echo $entity_entry->entity_score; ?></td>
    
                </tr>
                <?php 
                    } 
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>