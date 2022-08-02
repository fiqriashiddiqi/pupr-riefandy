<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Industry.xls");
?>
<html>
<body>
    <center>
        <h3>Data Industry</h3>  
        <table width="1000" border="1">
            <thead>
                <tr style="background-color: #ffc516;">
                    <th style="width: 28px">No</th>
                    <th>Industry Name</th>
                    <th>Industry Code</th>
                    <th>Industry score</th>
                    <th>Industry HPP (%)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($data_industry as $industry_entry){
                $no++;
                ?>
                    <tr valign="top">
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $industry_entry->industry_name; ?>
                        </td>
                        <td>
                            <?php echo $industry_entry->industry_code; ?>
                        </td>
                        <td>
                            <?php echo $industry_entry->industry_score; ?>
                        </td>
                        <td>
                            <?php echo $industry_entry->industry_hpp; ?>
                        </td>
                    </tr>
                <?php 
                    } 
                ?>
            </tbody>
        </table>
    </center>
</body>

</html>