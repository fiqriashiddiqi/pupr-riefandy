<style type="text/css">



#footer { 
  position: ; 
  left: 0px; 
  bottom: 0px; 
  right: 0px; 
  height: 40px;
}

</style>
<body style="background-color: white;">
    <header class="main-nav">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-header navbar-top-1">
                    <div class="logo">
                        <a class="navbar-brand" href="#">
                            <div class="logobcaheader">
                                <img class="img-responsive img-logo" src="<?php echo base_url() ?>uploads/base-img/img_home/logoSanders.png" style="height:50px;width:160px;margin-top:-5px">
                            </div>
                        </a>
                    </div>
                    
                    <style>
                        .navbar_li {
                            overflow: hidden;
                            
                            font-family: Arial, Helvetica, sans-serif;

                        }

                        .navbar_li a {
                            float: left;
                            font-size: 13px;
                            color: #6d6d6d;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                        }

                        .dropdown_li {
                            float: left;
                            overflow: hidden;
                        }

                        .dropdown_li .dropbtn {
                            font-size: 13px;    
                            border: none;
                            outline: none;
                            color: #6d6d6d;
                            padding: 14px 16px;
                            background-color: inherit;
                            font-family: inherit;
                            margin: 0;
                        }

                        .navbar_li a:hover, .dropdown_li:hover .dropbtn {
                            background-color: ;
                        }

                        .dropdown-content_li {
                            display: none;
                            position: absolute;
                            background-color: #f9f9f9;
                            min-width: 160px;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                        }

                        .dropdown-content_li a {
                            float: none;
                            color: black;
                            padding: 3px 16px;
                            text-decoration: none;
                            display: block;
                            text-align: left;
                        }

                        .dropdown-content_li a:hover {
                            background-color: #ddd;
                        }

                        .dropdown_li:hover .dropdown-content_li {
                            display: block;
                        }

                        .divider_li {
                          
                          margin: 9px 0;
                          overflow: hidden;
                          background-color: #e5e5e5;
                          display: block;
                          height: 1px;
                        }

                        .dot {
                          height: 25px;
                          width: 25px;
                          
                          border-radius: 50%;
                          display: inline-block;
                        }

                        table {
                          border: 1px solid black;
                          
                          }

                          table td {
                          border: 1px solid black;
                          
                          }

                          table th {
                          border: 1px solid black;
                          
                          }
                       
                    </style>
       
            </nav>
        </div>
    </div>
</header>   
<div class="container">             
                    <?php 
                      $this->load->model("crud_model");
                      ?>
                      
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px;margin-left: 25%">
                        <div class="form-group">
                            <span class="dot" style="background-color: green;"></span>
                            <label class="control-label">On time</label>
                            <span class="dot" style="background-color: yellow;margin-left: 3%;"></span>
                            <label class="control-label">Late, already paid</label>
                            <span class="dot" style="background-color: orange;margin-left: 3%;"></span>
                            <label class="control-label">Late, not yet paid</label>
                            <span class="dot" style="background-color: whitesmoke;margin-left: 3%;"></span>
                            <label class="control-label">Default</label>
                        </div>
<!--                         <div class="col-sm-2">
                            <i class="fa fa-circle" style="font-size: 20px;color: red; width: 16%"></i>
                            <label class="control-label">Penalty</label>
                        </div> -->
                    </div>
                    

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <br>
                    <h4><strong>Punctuality</strong></h4>
                    <div style="overflow-x: auto;">
                        
                        <?php
                        
                        $no=0;
                        $saldo = 0;
                        $data_loans = array();
                        $i = 0;
                        foreach ($data_loan as $loan_entry){
                        $no++;
                        // $entry = new \stdClass;

                        $data_setting = $this->crud_model->get_setting();
                        $comm_borrower   = $data_setting[0]->commision_borrower;
                        $fee_pg = $data_setting[0]->fee_pg;


                        $amount_invest = $this->account_model->get_invest_by_id_nreg_borrower($get_code,$loan_entry->id_borrower_loan);

                        $amount = @$amount_invest[0]->amount_invest;
                        $flat_rate = $loan_entry->loan_rate;
                        $total_interest = $loan_entry->loan_interest;

                        $tenor = (int)$loan_entry->loan_tenor;
                        $a = (int)$total_interest;
                        $b = ($amount * (($flat_rate/100) * ($tenor/12))) + $amount;
                        

                        $fee = $fee_pg * $tenor;

                        // echo "<pre>";
                        // var_dump($fee);
                        $estimated = $b + $fee;

                        $data_loan_period = $this->account_model->get_data_loan_period_borrower($get_code ,$loan_entry->id_borrower_loan);

                        $penalty = @$data_loan_period[0]->payment_periode_pinalty;

                        $total_principal = $this->account_model->get_pay_realization_sum_borrower_principal($loan_entry->id_borrower_loan);

                        $total_int_pen = $this->account_model->get_pay_realization_sum_borrower_int_pen($loan_entry->id_borrower_loan);

                        $total_fee_ex = $this->account_model->get_pay_realization_sum_borrower_fee($loan_entry->id_borrower_loan)->num_rows();

                        $total_fee_ex = $total_fee_ex * $fee_pg;

                        $total_realization = $total_principal[0]->total_principal + $total_int_pen[0]->total_int_pen + $total_fee_ex; 
                        
                        // var_dump($total_realization);
                        ?>

                            <table style="width:100%;border:1 solid grey;">
                                <thead style="background-color:lightgray;">
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Loan ID</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Amount</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Period</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Rating</th>
                                        <th style="text-align: center">Rate</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Payment Estimate</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Payment Realization</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Loan Status</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Loan Start</th>
                                       
                                    </tr>
                                    <tr>
                                        <th style="width:10%">(Effective & Flat)</th>
                                        
                                    </tr>
                                </thead>

                                <tbody style="background-color: whitesmoke;">
                                    <tr>
                                        <td rowspan="2" style="text-align: center;"><?php echo $loan_entry->id_borrower_loan; ?></td>
                                        <td rowspan="2" style="text-align: center;">Rp. <?php echo number_format(@$loan_entry->loan_amount,0,".","."); ?></td>
                                        <td rowspan="2" style="text-align: center;"><?php echo $loan_entry->loan_tenor; ?> months</td>
                                        <td rowspan="2" style="text-align: center;"><?php echo $loan_entry->loan_rating; ?></td>
                                        <td style="text-align: center;"><?php echo $loan_entry->loan_flat_rate; ?> %</td>
                                        
                                        <td rowspan="2" style="text-align: center;">Rp. <?php echo number_format($estimated,0,".","."); ?></td>
                                        <td rowspan="2" style="text-align: center;">Rp. <?php echo number_format($total_realization,0,".","."); ?></td>
                                        <td rowspan="2" style="text-align: center;"><?php echo $loan_entry->loan_status; ?></td>
                                        <td rowspan="2" style="text-align: center;">
                                        <?php if($loan_entry->loan_start_date != "0000-00-00"){echo date('d/m/y', strtotime($loan_entry->loan_start_date));} else { echo "Proses";} ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $loan_entry->loan_rate; ?> %</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table style="width:100%;">
                                <thead style="background-color:lightgray;">
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;width: 100px">Loan ID</th>
                                        
                                        <?php 
                                            $loan_tenor = $loan_entry->loan_tenor;
                                            for($i=0;$loan_tenor>=$i;$i++){
                                            }
                                        ?>
                                        <th colspan="<?php echo $loan_tenor; ?>" style="text-align: center"><?php if($loan_entry->loan_start_date != "0000-00-00"){echo date('Y', strtotime($loan_entry->loan_start_date));} else { echo "Proses";} ?></th>
                                    </tr>
                                    <tr>
                                        <?php 
                                            for($q=1;$loan_tenor>=$q;$q++){
                                                echo "<th style='text-align: center'>$q</th>";
                                            }
                                            
                                        ?>
                                    </tr>
                                </thead>

                                <tbody style="background-color: whitesmoke;">
                                    <tr>
                                        <td rowspan="2" style="text-align: center;height: 50px;line-height: 30px;"><?php echo $loan_entry->id_borrower_loan; ?></td>
                                        
                                        


                                        <?php 
                                                $this->load->model('Front_Fintech/account_model');
                                                $data_loan_period = $this->account_model->get_data_loan_period_borrower($get_code,$loan_entry->id_borrower_loan);

                                                //for($w=1;$loan_tenor>=$w;$w++){

                                                    foreach ($data_loan_period as $period_entry){
                                                        if ($period_entry->payment_periode_status_principal AND $period_entry->payment_periode_status_interest == "default") {
                                                                $status_color = 'whitesmoke';
                                                                $font_color = 'black';    
                                                            } else if ($period_entry->payment_periode_status_principal AND $period_entry->payment_periode_status_interest == "On Time") {
                                                                $status_color = 'green';
                                                                $font_color = 'white';
                                                            } else if ($period_entry->payment_periode_status_principal AND $period_entry->payment_periode_status_interest == "Late, Not Yet Paid") {
                                                                $status_color = 'orange';
                                                                $font_color = 'white';
                                                            } else if ($period_entry->payment_periode_status_principal AND $period_entry->payment_periode_status_interest == "Late, Already Paid") {
                                                                $status_color = 'yellow';
                                                            } else{
                                                                $status_color = '';
                                                            }

                                                        
                                                ?>

                                                
                                                    <td rowspan="2" style="text-align: center;height: 50px;background-color: <?php echo @$status_color ;?>"></td>
                                            
                                       <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                            <?php 
                            }
                            
                        ?>
                    </div> 
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <br><br>
                    <h4><strong>Principal and Interest Report (Expected and Actual)</strong></h4>
                    <div style="overflow-x: auto;">
                        <table style="text-align: center;border-color: black;">

                            <tr style="font-weight: bold; background-color: lightgray;">
                                <td rowspan="2" colspan="2" style="text-align: center; vertical-align: middle;width:200px;"> # </td>
                                <?php
                                    foreach ($data_loan as $loan_entry){
                                        echo "<td colspan='2' style='width:200px;'>".$loan_entry->id_borrower_loan."</td>";

                                    }
                                ?>
                                <td colspan="2" style="width:200px;">Total</td>
                            </tr>

                            <tr style="font-weight: bold; background-color: lightgray;">

                                <?php
                                    $loan_jml = 0;
                                    foreach ($data_loan as $loan_entry){
                                        echo "<td style='width:100px;'>Expected</td>";
                                        echo "<td style='width:100px;'>Actual</td>";
                                    $loan_jml++;
                                    }
                                ?>

                                <td style="width:100px;">Expected</td>
                                <td style="width:100px;">Actual</td>
                            </tr>

                            <?php 
                            $min_date = $this->account_model->get_loan_min_date_borrower($get_code,$get_id_borrower_loan);
                            $max_date = $this->account_model->get_loan_max_date_borrower($get_code,$get_id_borrower_loan);

                            $start = new DateTime($min_date[0]->min_date);
                            $end   = new DateTime($max_date[0]->max_date);
                            $counter = 0;
                            for($i = $start; $i <= $end; $i->modify('+1 months')){

                            ?>
                            
                            <tr>
                                <th style="width: 80px; text-align: center; vertical-align: middle;  background-color: lightgray; font-weight: bold;" rowspan="5">
                                    <?php echo $i->format("Y")."<br>".$i->format("F");?>
                                </th>
                                <td style="background-color: lightgray; font-weight: bold; width: 100px;">Principal</td>

                                <?php 
                                    $total_principal_side = 0;
                                    $total_principal_side_actual = 0;
                                    foreach ($data_loan as $loan_entry){
                                        $months_now = $i->format("Y-m-d");
                                        $data_loan_period = $this->account_model->get_data_loan_period_month_borrower($loan_entry->id_borrower_loan,$months_now);

                                        foreach ($data_loan_period as $entry_periode) {

                                            $months_payment = date("Y-m",strtotime($entry_periode->payment_periode_date));
                                            if ($months_payment == $i->format("Y-m")){
                                            $principal = $entry_periode->payment_periode_principal;
                                            $interest = $entry_periode->payment_periode_interest;
                                            $pinalty = $entry_periode->payment_periode_pinalty;

                                            $total_principal_side = $total_principal_side + $principal;
                                ?>
                                            <td><?php echo number_format($principal,0,".",".");?></td>
                                <?php
                                                if($entry_periode->payment_periode_status_principal == 'On Time' OR $entry_periode->payment_periode_status_principal == 'Late, Already Paid'){
                                                    echo"<td>".number_format($principal,0,".",".")."</td>";

                                                    $total_principal_side_actual = $total_principal_side_actual + $principal;
                                                } else {
                                                    echo"<td>0</td>";
                                                }
                                            }                                          
                                        }

                                        if(empty($data_loan_period)){
                                            echo"<td>0</td><td>0</td>";
                                        }
                                    }
                                ?>

                                <td><?php echo number_format($total_principal_side,0,".",".");?></td>
                                <td><?php echo number_format($total_principal_side_actual,0,".",".");?></td>
                              <?php $counter++ ?>
                            </tr>
                            
                            <tr>
                                <?php if($counter==86){ ?>
                                <th style="width: 80px; text-align: center; vertical-align: middle;  background-color: lightgray; font-weight: bold;" rowspan="4">
                                    <?php echo $i->format("Y")."<br>".$i->format("F");?>
                                </th>
                                <?php } ?>

                                <td style="background-color: lightgray; font-weight: bold;">Interest</td>

                                <?php 
                                    $total_interest_side = 0;
                                    $total_interest_side_actual = 0;
                                    foreach ($data_loan as $loan_entry){
                                        $months_now = $i->format("Y-m-d");
                                        $data_loan_period = $this->account_model->get_data_loan_period_month_borrower($loan_entry->id_borrower_loan,$months_now);
                                        
                                        foreach ($data_loan_period as $entry_periode) {

                                            $months_payment = date("Y-m",strtotime($entry_periode->payment_periode_date));
                                            if ($months_payment == $i->format("Y-m")){
                                            $principal = $entry_periode->payment_periode_principal;
                                            $interest = $entry_periode->payment_periode_interest;
                                            $pinalty = $entry_periode->payment_periode_pinalty;

                                            $total_interest_side = $total_interest_side + $interest;
                                ?>
                                            <td><?php echo number_format($interest,0,".",".");?></td>
                                <?php
                                                if($entry_periode->payment_periode_status_interest == 'On Time' OR $entry_periode->payment_periode_status_interest == 'Late, Already Paid'){
                                                    echo"<td>".number_format($interest,0,".",".")."</td>";

                                                    $total_interest_side_actual = $total_interest_side_actual + $interest;
                                                } else {
                                                    echo"<td>0</td>";
                                                }
                                            }                                        
                                        }

                                        if(empty($data_loan_period)){
                                            echo"<td>0</td><td>0</td>";
                                        }
                                    }
                                ?>
                                
                                <td><?php echo number_format($total_interest_side,0,".",".");?></td>
                                <td><?php echo number_format($total_interest_side_actual,0,".",".");?></td>
                              <?php $counter++ ?>
                            </tr>

                            <tr>
                              <?php if($counter==32 OR $counter==167){ ?>
                                <th style="width: 80px; text-align: center; vertical-align: middle;  background-color: lightgray; font-weight: bold;" rowspan="3">
                                    <?php echo $i->format("Y")."<br>".$i->format("F");?>
                                </th>
                                <?php } ?>
                                <td style="background-color: lightgray; font-weight: bold;">Penalty</td>

                                <?php 
                                    $total_pinalty_side = 0;
                                    $total_pinalty_side_actual = 0;
                                    foreach ($data_loan as $loan_entry){
                                        $months_now = $i->format("Y-m-d");
                                        $data_loan_period = $this->account_model->get_data_loan_period_month_borrower($loan_entry->id_borrower_loan,$months_now);

                                        foreach ($data_loan_period as $entry_periode) {

                                            $months_payment = date("Y-m",strtotime($entry_periode->payment_periode_date));
                                            if ($months_payment == $i->format("Y-m")){
                                            $principal = $entry_periode->payment_periode_principal;
                                            $interest = $entry_periode->payment_periode_interest;
                                            $pinalty = $entry_periode->payment_periode_pinalty;

                                            $total_pinalty_side = $total_pinalty_side + $pinalty;
                                ?>
                                            <td><?php echo number_format(0);?></td>
                                <?php
                                                if($entry_periode->payment_periode_status_pinalty == 'On Time' OR $entry_periode->payment_periode_status_pinalty == 'Late, Already Paid'){
                                                    echo"<td>".number_format($pinalty,0,".",".")."</td>";

                                                    $total_pinalty_side_actual = $total_pinalty_side_actual + $pinalty;
                                                } else {
                                                    echo"<td>0</td>";
                                                }
                                            }                                          
                                        }

                                        if(empty($data_loan_period)){
                                            echo"<td>0</td><td>0</td>";
                                        }
                                    }
                                ?>

                                <td><?php echo number_format(0);?></td>
                                <td><?php echo number_format($total_pinalty_side_actual,0,".",".");?></td>
                              <?php $counter++ ?>
                            </tr>

                            <tr>
                              <?php if($counter==113){ ?>
                                <th style="width: 80px; text-align: center; vertical-align: middle;  background-color: lightgray; font-weight: bold;" rowspan="2">
                                    <?php echo $i->format("Y")."<br>".$i->format("F");?>
                                </th>
                                <?php } ?>
                                <td style="background-color: lightgray; font-weight: bold;">Transaction Fee</td>

                                <?php 
                                    $total_fee_side = 0;
                                    $total_fee_side_actual = 0;
                                    foreach ($data_loan as $loan_entry){
                                        $months_now = $i->format("Y-m-d");
                                        $data_loan_period = $this->account_model->get_data_loan_period_month_borrower($loan_entry->id_borrower_loan,$months_now);

                                        foreach ($data_loan_period as $entry_periode) {

                                            $months_payment = date("Y-m",strtotime($entry_periode->payment_periode_date));
                                            if ($months_payment == $i->format("Y-m")){
                                            $principal = $entry_periode->payment_periode_principal;
                                            $interest = $entry_periode->payment_periode_interest;
                                            $pinalty = $entry_periode->payment_periode_pinalty;

                                            $data_setting = $this->crud_model->get_setting();
                                            $fee_pg   = $data_setting[0]->fee_pg;


                                            $total_ex = ($principal + $interest) + $fee_pg;
                                            $total = ($principal + $interest + $pinalty) + $fee_pg;

                                            $total_fee_side = $total_fee_side + $fee_pg;
                                ?>
                                            <td><?php echo number_format($fee_pg,0,".",".");?></td>
                                <?php
                                                if($entry_periode->payment_periode_status_interest == 'On Time' OR $entry_periode->payment_periode_status_interest == 'Late, Already Paid'){
                                                    echo"<td>".number_format($fee_pg,0,".",".")."</td>";

                                                    $total_fee_side_actual = $total_fee_side_actual + $fee_pg;
                                                } else {
                                                    echo"<td>0</td>";
                                                }
                                            }                                          
                                        }

                                        if(empty($data_loan_period)){
                                            echo"<td>0</td><td>0</td>";
                                        }
                                    }
                                ?>
                                
                                <td><?php echo number_format($total_fee_side,0,".",".");?></td>
                                <td><?php echo number_format($total_fee_side_actual,0,".",".");?></td>
                              <?php $counter++ ?>
                            </tr>

                            <tr style="font-weight: bold;">
                              <?php if($counter==59){ ?>
                                <th style="width: 80px; text-align: center; vertical-align: middle;  background-color: lightgray; font-weight: bold;">
                                    <?php echo $i->format("Y")."<br>".$i->format("F");?>
                                </th>
                                <?php } ?>
                                <td style="background-color: lightgray; font-weight: bold;">TOTAL</td>

                                <?php 
                                    $total_side = 0;
                                    $total_side_actual = 0;
                                    foreach ($data_loan as $loan_entry){
                                        $months_now = $i->format("Y-m-d");
                                        $data_loan_period = $this->account_model->get_data_loan_period_month_borrower($loan_entry->id_borrower_loan,$months_now);

                                        foreach ($data_loan_period as $entry_periode) {

                                            $months_payment = date("Y-m",strtotime($entry_periode->payment_periode_date));
                                            if ($months_payment == $i->format("Y-m")){

                                            $principal = $entry_periode->payment_periode_principal;
                                            $interest = $entry_periode->payment_periode_interest;
                                            $pinalty = $entry_periode->payment_periode_pinalty;

                                            if($entry_periode->payment_periode_status_principal == 'On Time' OR $entry_periode->payment_periode_status_principal == 'Late, Already Paid'){
                                                
                                                $principal_flex = $principal;
                                            } else {
                                                $principal_flex = 0;
                                            }

                                            $data_setting = $this->crud_model->get_setting();
                                            $fee_pg   = $data_setting[0]->fee_pg;

                                            $total_ex = ($principal + $interest) + $fee_pg;
                                            $total = ($principal_flex + $interest + $pinalty) + $fee_pg;

                                            $total_side = $total_side + $total_ex;
                                ?>
                                            <td style='background-color: #e9e9e9;'><?php echo number_format($total_ex,0,".",".");?></td>
                                <?php
                                                if($entry_periode->payment_periode_status_interest == 'On Time' OR $entry_periode->payment_periode_status_interest == 'Late, Already Paid'){
                                                    echo"<td style='background-color: #e9e9e9;'>".number_format($total,0,".",".")."</td>";

                                                    $total_side_actual = $total_side_actual + $total;
                                                } else {
                                                    echo"<td style='background-color: #e9e9e9;'>0</td>";
                                                }
                                            }                                          
                                        }

                                        if(empty($data_loan_period)){
                                            echo"<td style='background-color: #e9e9e9;'>0</td><td style='background-color: #e9e9e9;'>0</td>";
                                        }
                                    }
                                ?>
                                
                                <td style='background-color: #e9e9e9;'><?php echo number_format($total_side,0,".",".");?></td>
                                <td style='background-color: #e9e9e9;'><?php echo number_format($total_side_actual,0,".",".");?></td>
                              <?php $counter++ ?>
                            </tr>
                            <?php
                                }
                            ?>
                            <tr style="font-weight: bold;">
                                <td colspan="2" style="background-color: lightgray; font-weight: bold;">GRAND TOTAL</td>

                                <?php 
                                    $grand_total_side = 0;
                                    $grand_total_side_actual = 0;
                                    foreach ($data_loan as $loan_entry){
                                        $data_loan_period = $this->account_model->get_data_loan_period_borrower_porto($loan_entry->id_borrower_loan);
                                        
                                        $total_down_per_loan_ex = 0;
                                        $total_down_per_loan = 0;
                                        foreach ($data_loan_period as $entry_periode) {

                                            $principal = $entry_periode->payment_periode_principal;
                                            $interest = $entry_periode->payment_periode_interest;
                                            $pinalty = $entry_periode->payment_periode_pinalty;

                                            if($entry_periode->payment_periode_status_principal == 'On Time' OR $entry_periode->payment_periode_status_principal == 'Late, Already Paid'){
                                                
                                                $principal_flex = ($principal);
                                            } else {
                                                $principal_flex = 0;
                                            }

                                            $data_setting = $this->crud_model->get_setting();
                                            $fee_pg   = $data_setting[0]->fee_pg;


                                            $total_ex = ($principal + $interest) + $fee_pg;
                                            $total = ($principal_flex + $interest + $pinalty) + $fee_pg;

                                            $grand_total_side = $grand_total_side + $total_ex;
                                            $total_down_per_loan_ex = $total_down_per_loan_ex + $total_ex;

                                            if($entry_periode->payment_periode_status_interest == 'On Time' OR $entry_periode->payment_periode_status_interest == 'Late, Already Paid'){
                                                
                                                $grand_total_side_actual = $grand_total_side_actual + $total;
                                                $total_down_per_loan = $total_down_per_loan + $total;
                                            } 
                                        }

                                        echo"<td style='background-color: lightgray;'>".number_format($total_down_per_loan_ex,0,".",".")."</td>";
                                        echo"<td style='background-color: lightgray;'>".number_format(@$total_down_per_loan,0,".",".")."</td>";                                     
                                    }
                                ?>
                                
                                <td style='background-color: lightgray;'><?php echo number_format($grand_total_side,0,".",".");?></td>
                                <td style='background-color: lightgray;'><?php echo number_format(@$grand_total_side_actual,0,".",".");?></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>


                <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                    <br><br>
                    <h4><strong></strong></h4>
                    <?php
                        $saldo = 0;
                        foreach ($data_loan as $loan_entry){
                    ?>
                    <div style="overflow-x: auto;">
                        <table class="table table-bordered" style="text-align: center">
                            <tr>
                                <td colspan="2" rowspan="2" style="text-align: center; vertical-align: middle;"> # </td>
                                <?php 

                                $data_loan_period = $this->account_model->get_data_loan_period_borrower($get_code,$loan_entry->id_borrower_loan);
                                foreach ($data_loan_period as $period_entry) {
                                     if($period_entry->payment_periode_pinalty != "0.00"){?>
                                   
                                    <td colspan='3'><?php echo date('j F Y', strtotime($period_entry->payment_periode_date));?></td>
                                    <?php } else { ;?>
                                    <td colspan='2'><?php echo date('j F Y', strtotime($period_entry->payment_periode_date));?></td>
                                <?php 
                                }
                                }           
                                ?> 
                                
                            </tr>
                          
                            <tr>
                                 <?php
                                
                                $data_loan_period = $this->account_model->get_data_loan_period_borrower($get_code,$loan_entry->id_borrower_loan);
                                foreach ($data_loan_period as $period_entry) { 
                                
                                    
                                    if($period_entry->payment_periode_pinalty != "0.00"){

                                    echo "<td>Principal</td>
                                          <td>Interest</td>
                                          <td>Penalty</td>";
                                    } else {
                                        echo "<td>Principal</td>
                                          <td>Interest</td>";
                                    }
                                 }
                             ?>
                                
                            </tr>
                            <tr>
                                <td><?php echo "Loan ID" ?></td>
                                <td><?php echo $loan_entry->id_borrower_loan; ?></td>



                                <?php 
                                    // for($q=1;$loan_tenor>=$q;$q++){
                                        foreach ($data_loan_period as $period_entry){
                                        if ($period_entry->payment_periode_status_principal == "default") {
                                                $status_color = 'whitesmoke';
                                                $font_color = 'black';    
                                            } else if ($period_entry->payment_periode_status_principal == "On Time") {
                                                $status_color = 'green';
                                                $font_color = 'white';
                                            } else if ($period_entry->payment_periode_status_principal == "Late, Not Yet Paid") {
                                                $status_color = 'orange';
                                                $font_color = 'white';
                                            } else if ($period_entry->payment_periode_status_principal == "Late, Already Paid") {
                                                $status_color = 'yellow';
                                                $font_color = 'black';
                                            } else{
                                                $status_color = '';
                                            }

                                        if ($period_entry->payment_periode_status_interest == "default") {
                                                $status_color_int = 'whitesmoke';
                                                $font_color_int = 'black';    
                                            } else if ($period_entry->payment_periode_status_interest == "On Time") {
                                                $status_color_int = 'green';
                                                $font_color_int = 'white';
                                            } else if ($period_entry->payment_periode_status_interest == "Late, Not Yet Paid") {
                                                $status_color_int = 'orange';
                                                $font_color_int = 'white';
                                            } else if ($period_entry->payment_periode_status_interest == "Late, Already Paid") {
                                                $status_color_int = 'yellow';
                                                $font_color_int = 'black'; 
                                            } else{
                                                $status_color = '';
                                            }

                                            if($period_entry->payment_periode_pinalty != "0.00"){
                                            ?>
                                        <td rowspan="10" style="text-align: center;background-color:<?php echo @$status_color ;?>;vertical-align: bottom;color: <?php echo @$font_color ;?>;"><?php echo number_format($loan_entry->loan_principal,0,".",".");?></td>
                                        <td rowspan="10" style="text-align: center;background-color:<?php echo @$status_color_int ;?>;vertical-align: bottom;color: <?php echo @$font_color_int ;?>;"><?php echo number_format($loan_entry->loan_interest,0,".","."); ?></td>
                                        <td rowspan="10" style="text-align: center;background-color: red;vertical-align: bottom;color: white;"><?php echo number_format($period_entry->payment_periode_pinalty,0,".",".");?></td>

                                        <?php
                                        } else {?>

                                        <td rowspan="10" style="text-align: center;background-color:<?php echo @$status_color ;?>;vertical-align: bottom;color: <?php echo @$font_color ;?>;"><?php echo number_format($loan_entry->loan_principal,0,".",".");?></td>
                                        <td rowspan="10" style="text-align: center;background-color:<?php echo @$status_color_int ;?>;vertical-align: bottom;color: <?php echo @$font_color_int ;?>;"><?php echo number_format($loan_entry->loan_interest,0,".","."); ?> </td>    
                                        <?php
                                        }
                                    }

                                            
                                ?>
                            


                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td>Rp. <?php echo number_format(@$loan_entry->loan_amount,0,".","."); ?></td>
                            </tr>
                            <tr>
                                <td>Period</td>
                                <td><?php echo $loan_entry->loan_tenor; ?> months</td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td><?php echo $loan_entry->loan_rating; ?></td>
                            </tr>
                            <tr>
                                <td rowspan="2">Rate (Effective &amp; Flat)</td>
                                <td><?php echo $loan_entry->loan_rate; ?> %</td>
                            </tr>
                            <tr>
                                <td><?php echo $loan_entry->loan_flat_rate; ?> %</td>
                            </tr>
                            <tr>
                                <td>Payment Estimate</td>
                                <td>Rp. <?php echo number_format($loan_entry->payment_estimate,0,".","."); ?></td>
                            </tr>
                            <tr>
                                <td>Payment Realization</td>
                                <?php
                                $total_principal = $this->account_model->get_pay_realization_sum_borrower_principal($loan_entry->id_borrower_loan);

                                $total_int_pen = $this->account_model->get_pay_realization_sum_borrower_int_pen($loan_entry->id_borrower_loan);

                                $total_realization = $total_principal[0]->total_principal + $total_int_pen[0]->total_int_pen;
                                ?>
                                <td>Rp. <?php echo number_format($total_realization,0,".","."); ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><?php echo $loan_entry->loan_status; ?></td>
                            </tr>
                            <tr>
                                <td>Loan start</td>
                                <td><?php if($loan_entry->loan_start_date != "0000-00-00"){echo date('d/m/y', strtotime($loan_entry->loan_start_date));} else { echo "Proses";} ?></td>
                            </tr>
                        </table>
                    </div>
                    <?php } ?>
                </div> -->

                <div class="col-md-12 col-sm-12 col-xs-12">
                    &nbsp;
                </div>
            </div>
        <div id="footer" style="color: black;font-size: 12px;">
  
           <div> 
             <b>Detail</b>Account 
           </div>
           <div> 
             <strong>Copyright &copy; Sanders</strong> All rights 
             reserved.
           </div> 
        
        </div>
    </body>
</html>

    