<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Cash-Flow.xls");
?>
<html>
<body>
    <center>
            <?php 
               $id_param_coa_e = isset($_REQUEST['id_param_coa_e']) ? $_REQUEST['id_param_coa_e'] : null;
               $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
               $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');
            ?>
        <h3>Data Cash Flow</h3>  
        <h3>One Stop Solution </h3>  
        <h3> Per Tanggal <?php echo "$start_date";?>  s/d  <?php echo "$end_date";?>  </h3>
        <table width="1000" border="1">

            <?php 
                   $id_journal = isset($_REQUEST['id_journal']) ? $_REQUEST['id_journal'] : NULL;
                    $ending_balance=0;
                    $begening_balance=0;

                   @$data_begening = $this->journal_model->get_cashflow_begining(null,$start_date);

                   @$begening_balance= $data_begening[0]->debit-$data_begening[0]->kredit;


                ?>
            <thead>
                <tr style="background-color: #ffc516"; >  
                        <td style="width: 40%;text-align: center;"><h4><strong>Description</strong></h4></td>
                         <td style="width: 10%;text-align: center;"><h4><strong>Amount</strong></h4></td>
                         <td style="width: 40%;text-align: center;"><h4><strong>Description</strong></h4></td>
                         <td style="width: 10%;text-align: center;"><h4><strong>Amount</strong></h4></td>
                    </tr>
              
                  
            </thead>
            <tbody>
                <tr>
                      <th colspan="4" style="text-align: left;">Begining Balance : &nbsp;Rp.<?php echo number_format(@$begening_balance); ?></th>            
                    </tr>
                    <tr style="background-color: #ffd100;">
                      <th colspan="2">CASH INFLOW</th>
                      <th colspan="2">CASH OUTFLOW</th>

                    </tr>
                    <?php
                    // $year_temp = isset($_REQUEST['start_date']) ? (date("Y",strtotime($_REQUEST['start_date'])) - 1) : date('Y');
                    // $month_temp = isset($_REQUEST['start_date']) ? (date("m",strtotime($_REQUEST['start_date'])) - 1) : date('m');

                    // $month_temp = ($month_temp<10) ? '0'.$month_temp : $month_temp;

                    // $begining_date_start = $year_temp.'-'.$month_temp.'-01'; 
                    // $begining_date_end  = date("Y-m-t", strtotime($begining_date_start));

                    // echo $begining_date_start.'====='.$begining_date_end;

                 
                      //Tarik data Cash Inflow
                      @$data_ID = $this->journal_model->get_cashflow('ID',$start_date,$end_date);
                      @$data_LR = $this->journal_model->get_cashflow('LR',$start_date,$end_date);
                      @$data_LIP = $this->journal_model->get_cashflow('LIP',$start_date,$end_date);
                      @$data_PEN = $this->journal_model->get_cashflow('PEN',$start_date,$end_date);
                      @$data_IP = $this->journal_model->get_cashflow('IP',$start_date,$end_date);
                      @$data_TF = $this->journal_model->get_cashflow('TF',$start_date,$end_date);
                      @$data_II = $this->journal_model->get_cashflow('II',$start_date,$end_date);
                      @$data_PUC = $this->journal_model->get_cashflow('PUC',$start_date,$end_date);
                      @$data_SH = $this->journal_model->get_cashflow('SH',$start_date,$end_date);
                      @$data_OTD = $this->journal_model->get_cashflow('OTD',$start_date,$end_date);

                      //Cash data Outflow
                      @$data_LD = $this->journal_model->get_cashflow('LD',$start_date,$end_date);
                      @$data_WD = $this->journal_model->get_cashflow('WD',$start_date,$end_date);
                      @$data_SB = $this->journal_model->get_cashflow('SB',$start_date,$end_date);
                      @$data_ME = $this->journal_model->get_cashflow('ME',$start_date,$end_date);
                      @$data_INS = $this->journal_model->get_cashflow('INS',$start_date,$end_date);
                      @$data_TE = $this->journal_model->get_cashflow('TE',$start_date,$end_date);
                      @$data_OOE = $this->journal_model->get_cashflow('OOE',$start_date,$end_date);
                      @$data_FAA = $this->journal_model->get_cashflow('FAA',$start_date,$end_date);
                      @$data_SH = $this->journal_model->get_cashflow('SHR',$start_date,$end_date);
                      @$data_OTC = $this->journal_model->get_cashflow('OTC',$start_date,$end_date);

                   
                         // var_dump($data_cashflowloanrepayment);
                      $Total_cash_in= $data_ID[0]->debit+$data_LR[0]->debit+$data_LIP[0]->debit+$data_PEN[0]->debit+$data_IP[0]->debit+$data_TF[0]->debit+$data_II[0]->debit+$data_PUC[0]->debit+$data_SH[0]->debit+$data_OTD[0]->debit;

                      $Total_cash_out= $data_LD[0]->kredit+$data_WD[0]->kredit+$data_SB[0]->kredit+$data_ME[0]->kredit+$data_INS[0]->kredit+$data_TE[0]->kredit+$data_OOE[0]->kredit+$data_FAA[0]->kredit+$data_SH[0]->kredit+$data_OTC[0]->kredit;

                      $ending_balance=$begening_balance+ $Total_cash_in-$Total_cash_out;
                     ?>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Investor Deposit</td>
                      <td><?php echo number_format(@$data_ID[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loan Disbursement</td>
                      <td><?php echo number_format(@$data_LD[0]->kredit,0,".","."); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loan Repayment</td>
                      <td><?php echo number_format(@$data_LR[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Withdrawal</td>
                      <td><?php echo number_format(@$data_WD[0]->kredit,0,".","."); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loan Interest Payment</td>
                      <td><?php echo number_format(@$data_LIP[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary & Benefit</td>
                      <td><?php echo number_format(@$data_SB[0]->kredit,0,".","."); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penalty</td>
                      <td><?php echo number_format(@$data_PEN[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marketing Expenses</td>
                      <td><?php echo number_format(@$data_ME[0]->kredit,0,".","."); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insurance Payment</td>
                      <td><?php echo number_format(@$data_IP[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insurance</td>
                      <td><?php echo number_format(@$data_INS[0]->kredit,0,".","."); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transaction Fee</td>
                      <td><?php echo number_format(@$data_TF[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transaction Expenses</td>
                      <td><?php echo number_format(@$data_TE[0]->kredit,0,".","."); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Investment Income</td>
                      <td><?php echo number_format(@$data_II[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Operating Expenses</td>
                      <td><?php echo number_format(@$data_OOE[0]->kredit,0,".","."); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paid Up Capital</td>
                      <td><?php echo number_format(@$data_PUC[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fix Assets Acquisition</td>
                      <td><?php echo number_format(@$data_FAA[0]->kredit,0,".","."); ?></td>
                    </tr>
                     <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share Holder</td>
                      <td><?php echo number_format(@$data_SH[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share Holder Loan Repayment</td>
                      <td><?php echo number_format(@$data_SHR[0]->kredit,0,".","."); ?></td>
                    </tr>
                     <tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</td>
                      <td><?php echo number_format(@$data_OTD[0]->debit,0,".","."); ?></td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</td>
                      <td><?php echo number_format(@$data_OTC[0]->kredit,0,".","."); ?></td>
                    </tr>
                     <tr>
                      <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Cash Inflow </th>
                      <th>Rp.<?php echo number_format(@$Total_cash_in,0,".","."); ?></th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Cash Outflow </th>
                      <th>Rp.<?php echo number_format(@$Total_cash_out,0,".","."); ?></th>
                    </tr>

                    <tr>
                      <th colspan="2" style="text-align: left;">Ending Balance : &nbsp;Rp.<?php echo number_format(@$ending_balance,0,".","."); ?></th>
                      <th colspan="2" style="text-align: center;"></th>
                    </tr>

            </tbody>
        </table>
    </center>
</body>

</html>