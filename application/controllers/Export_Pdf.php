<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export_Pdf extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Front_Fintech/personal_info_model');
        $this->load->model('Front_Fintech/auth_model');
        $this->load->model('Report/report_model');
        // $this->load->model('Front_Fintech/portofolio_model');
        $this->load->model('General_Ledger/journal_model');
        // $this->load->model('Website/contact_model');
        $this->load->model('Website/users_model');
        // $this->load->model('Website/management_model');
        $this->load->model('crud_model');
        $this->load->library('form_validation');

            

    }

    public function index()
    {
        $username = $this->session->userdata('username');

        $krs_id = $this->input->get('krs_id');
        $status = $this->input->get('status');

        $where = array('username' => $username);
        $data = $this->auth_model->user_data("users",$where)->result();

        $data['name'] = $data[0]->nama;
        $data['status_login'] = $data[0]->status_login;

        $data['krs_id'] = $krs_id;
        $data['data_krs'] = $this->cetak_model->cetak_krs_2($krs_id);

        $this->load->view('layouts/header');
        $this->load->view('layouts/navigation', $data);
        $this->load->view('root/printkrs', $data);
        $this->load->view('layouts/footer');             
    }

    function pdf_fact_sheet($id_borrower_loan){
        //$id_borrower_loan = $this->input->get('id_borrower_loan');
        $reg_code = $this->session->userdata('reg_code');
        $reg_password = $this->session->userdata('reg_password');
        $reg_access_status = $this->session->userdata('reg_access_status');
        $reg_activation_status = $this->session->userdata('reg_activation_status');
        $reg_status = $this->session->userdata('reg_status');

        $check_access = $this->auth_model->get_access($reg_code, $reg_password, $reg_access_status, $reg_activation_status, $reg_status);

        $register_code = $check_access[0]->register_code;

        $where = array('register_code'=>$register_code);
        $navigation['borrower_fund'] = $this->bank_model->get_fund_borrower($register_code);
        $navigation['bio_fullname'] = $this->crud_model->get_data('tb_fintech_borrower_bio',$where)->result();
        $navigation['account_active'] = "active";

        $data['data_bio_borrower'] = $this->manually_model->get_bio_borrower_loan($id_borrower_loan);
        $data['data_consumtive'] = $this->manually_model->get_personal_info_borrower_consumptive($id_borrower_loan);
        $prov_consumtive = ((array)@$data['data_consumtive'][0]);
        $data['data_province_consumtive'] = $this->indonesia_model->get_province_business_by_id(@$prov_consumtive['borrower_province_company']);
        $data['data_city_consumtive'] = $this->indonesia_model->get_city_business_by_id(@$prov_consumtive['borrower_city_company']);
        $data['data_district_consumtive'] = $this->indonesia_model->get_district_business_by_id(@$prov_consumtive['borrower_district_company']);
        $data['data_village_consumtive'] = $this->indonesia_model->get_village_business_by_id(@$prov_consumtive['borrower_village_company']);
        
        $data['get_code'] = $register_code;
        $data['data_manually'] = $this->manually_model->get_manually_id($id_borrower_loan,$register_code);
        $data['data_commercial'] = $this->manually_model->get_personal_info_borrower_commercial($id_borrower_loan);
        $industry_type = ((array)@$data['data_commercial'][0]);
        $data['data_industry_type'] = $this->param_model->get_industry_by_id(@$industry_type['borrower_industry_type']);
        $data['data_industry_cons'] = $this->param_model->get_industry();
        $prov_commercial = ((array)@$data['data_commercial'][0]);
        $data['data_province_commercial'] = $this->indonesia_model->get_province_business_by_id(@$prov_commercial['borrower_province_company']);
        $data['data_city_commercial'] = $this->indonesia_model->get_city_business_by_id(@$prov_commercial['borrower_city_company']);
        $data['data_district_commercial'] = $this->indonesia_model->get_district_business_by_id(@$prov_commercial['borrower_district_company']);
        $data['data_village_commercial'] = $this->indonesia_model->get_village_business_by_id(@$prov_commercial['borrower_village_company']);
        $data['data_business_field'] = $this->personal_info_model->get_business_field_borrower($register_code);
        $business_field = ((array)@$data['data_commercial'][0]);
        $data['data_business_field_name'] = $this->param_model->get_field_business_by_id(@$business_field['borrower_business_field']);
        $data['data_business_field_cons'] = $this->param_model->get_field_business();

        $data['data_loan'] = $this->loan_model->get_loan_by_id($id_borrower_loan);
        // load dompdf
        $this->load->helper('dompdf');
        //load content html
        $html = $this->load->view('report/pdf_fact_sheet', $data, true);
        // create pdf using dompdf
        $filename = 'Fact-Sheet';
        $paper = 'A4';
        $orientation = 'potrait';
        pdf_create($html, $filename, $paper, $orientation);
    }

    function pdf_detail($id_borrower_loan){
        // $id_borrower_loan = $this->input->get('id_borrower_loan');
        $reg_code = $this->session->userdata('reg_code');
        $reg_password = $this->session->userdata('reg_password');
        $reg_access_status = $this->session->userdata('reg_access_status');
        $reg_activation_status = $this->session->userdata('reg_activation_status');
        $reg_status = $this->session->userdata('reg_status');

        $check_access = $this->auth_model->get_access($reg_code, $reg_password, $reg_access_status, $reg_activation_status, $reg_status);

        $register_code = $check_access[0]->register_code;

        $data['get_code'] = $register_code;
        $data['get_id_borrower_loan'] = $id_borrower_loan;
        $data['data_code'] = $this->personal_info_model->get_personal_info_borrower($register_code);
       
        $data['data_loan'] = $this->loan_model->get_all_loan($id_borrower_loan, $register_code);
        $data['data_disbursed'] = $this->loan_model->get_ongoing_list(null,null, $register_code)->result();
        

        $html = $this->load->view('report/pdf_detail' , $data,true);
        $this->load->helper('dompdf');
        //load content html
        // $this->load->view('report/pdf_fact_sheet', $data, true);
        // create pdf using dompdf
        $filename = 'Detail-Account';
        // $customPaper = array(0,0,950,950);
        $paper = 'A4';
        $orientation = 'Landscape';
        pdf_create($html, $filename, $paper, $orientation);
    }

    function pdf_cashflow(){
       $reg_code = $this->session->userdata('reg_code');
        $reg_password = $this->session->userdata('reg_password');
        $reg_access_status = $this->session->userdata('reg_access_status');
        $reg_activation_status = $this->session->userdata('reg_activation_status');
        $reg_status = $this->session->userdata('reg_status');

        $check_access = $this->auth_model->get_access($reg_code, $reg_password, $reg_access_status, $reg_activation_status, $reg_status);

        $register_code = $check_access[0]->register_code;

        $where = array('register_code'=>$register_code);
        $navigation['lender_fund'] = $this->bank_model->get_fund_lender($register_code);
        $data['bio_fullname'] = $this->crud_model->get_data('tb_fintech_lender_bio',$where)->result();
        $navigation['report_active'] = "active";
        
        $data['get_code'] = $register_code;
        $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : null;
        $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : null;
        $time = strtotime($start_date);
        $start_date = date('Y-m-d H:i:s',$time);
        $time = strtotime($end_date. ' +23 hour +59 minutes +59 seconds');
        $end_date = date('Y-m-d H:i:s',$time);

        // var_dump($start_date);
        // die();
        $data['data_cashflow'] = $this->report_model->get_cashflow($register_code, $start_date, $end_date);
        $data['data_loan'] = $this->report_model->get_data_loan($register_code);

        

        // $html = $this->load->view('frontend-fintech/partial/header','',true);
        // $this->load->view('frontend-fintech/partial/navigation2' , $navigation);
        $html = $this->load->view('report/pdf_cashflow' , $data,true);
        $this->load->helper('dompdf');
        //load content html
        // $this->load->view('report/pdf_fact_sheet', $data, true);
        // create pdf using dompdf
        $filename = 'Cash-Flow';
        $paper = 'A4';
        $orientation = 'potrait';
        pdf_create($html, $filename, $paper, $orientation);
    }

    function pdf_order_history(){
       $reg_code = $this->session->userdata('reg_code');
        $reg_password = $this->session->userdata('reg_password');
        $reg_access_status = $this->session->userdata('reg_access_status');
        $reg_activation_status = $this->session->userdata('reg_activation_status');
        $reg_status = $this->session->userdata('reg_status');

        $check_access = $this->auth_model->get_access($reg_code, $reg_password, $reg_access_status, $reg_activation_status, $reg_status);

        $register_code = $check_access[0]->register_code;

        $where = array('register_code'=>$register_code);
        $navigation['lender_fund'] = $this->bank_model->get_fund_lender($register_code);
        $data['bio_fullname'] = $this->crud_model->get_data('tb_fintech_lender_bio',$where)->result();
        $navigation['report_active'] = "active";
        

        $data['get_code'] = $register_code;
        $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : null;
        $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : null;
        $time = strtotime($start_date);
        $start_date = date('Y-m-d H:i:s',$time);
        $time = strtotime($end_date. ' +23 hour +59 minutes +59 seconds');
        $end_date = date('Y-m-d H:i:s',$time);

        // var_dump($start_date);
        // die();
        $data['data_cashflow'] = $this->report_model->get_cashflow($register_code, $start_date, $end_date);
        $data['data_loan'] = $this->report_model->get_data_loan($register_code, $start_date, $end_date);


        // $html = $this->load->view('frontend-fintech/partial/header','',true);
        // $this->load->view('frontend-fintech/partial/navigation1', $navigation);
        $html = $this->load->view('report/pdf_order_history', $data, TRUE);
        // $this->load->view('frontend-fintech/partial/footer' , $footer);
        // $this->load->view('frontend-fintech/partial/sidebar');
        $this->load->helper('dompdf');
        //load content html
        // $this->load->view('report/pdf_fact_sheet', $data, true);
        // create pdf using dompdf
        $filename = 'Order-History';
        $paper = 'A4';
        $orientation = 'potrait';
        pdf_create($html, $filename, $paper, $orientation);
    }

    function pdf_term_borrower($id_borrower_loan){
       $reg_code = $this->session->userdata('reg_code');
        $reg_password = $this->session->userdata('reg_password');
        $reg_access_status = $this->session->userdata('reg_access_status');
        $reg_activation_status = $this->session->userdata('reg_activation_status');
        $reg_status = $this->session->userdata('reg_status');

        $check_access = $this->auth_model->get_access($reg_code, $reg_password, $reg_access_status, $reg_activation_status, $reg_status);

        $register_code = $check_access[0]->register_code;

        $where = array('register_code'=>$register_code);
        $navigation['borrower_fund'] = $this->bank_model->get_fund_borrower($register_code);
        $navigation['bio_fullname'] = $this->crud_model->get_data('tb_fintech_borrower_bio',$where)->result();
        $navigation['account_active'] = "active";

        $data['check_data'] = $this->crud_model->get_data("tb_fintech_register",$where)->result();

        // $data['export_pdf'] = site_url('Export_Pdf/pdf_accout_borrower');

        $data['get_code'] = $register_code;
        $data['get_id_borrower_loan'] = $id_borrower_loan;
        $data['data_code'] = $this->personal_info_model->get_personal_info_borrower($register_code);
        $data['data_register'] = $this->register_model->get_register_by_id($register_code);
        
        $data['data_consumtive'] = $this->personal_info_model->get_consumtive_borrower($register_code);
        $data['data_loan'] = $this->loan_model->get_loan_by_id($id_borrower_loan);
        $data['data_term'] = $this->account_model->get_term_by_id_nreg_borrower($id_borrower_loan);
        $data['data_contact'] = $this->contact_model->get_contact();
        $data['data_direk'] = $this->management_model->get_managementmenu_direk();
        $data['data_bio'] = $this->personal_info_model->get_personal_info_borrower($register_code);

        $prov_consumtive = ((array)@$data['data_consumtive'][0]);
        $data['data_province_consumtive'] = $this->indonesia_model->get_province_business_by_id(@$prov_consumtive['borrower_province_company']);
        $data['data_city_consumtive'] = $this->indonesia_model->get_city_business_by_id(@$prov_consumtive['borrower_city_company']);
        $data['data_district_consumtive'] = $this->indonesia_model->get_district_business_by_id(@$prov_consumtive['borrower_district_company']);
        $data['data_village_consumtive'] = $this->indonesia_model->get_village_business_by_id(@$prov_consumtive['borrower_village_company']);

        $data['data_commercial'] = $this->personal_info_model->get_commercial_borrower($register_code);

        $prov_commercial = ((array)@$data['data_commercial'][0]);
        $data['data_province_commercial'] = $this->indonesia_model->get_province_business_by_id(@$prov_commercial['borrower_province_company']);
        $data['data_city_commercial'] = $this->indonesia_model->get_city_business_by_id(@$prov_commercial['borrower_city_company']);
        $data['data_district_commercial'] = $this->indonesia_model->get_district_business_by_id(@$prov_commercial['borrower_district_company']);
        $data['data_village_commercial'] = $this->indonesia_model->get_village_business_by_id(@$prov_commercial['borrower_village_company']);

        $html = $this->load->view('report/pdf_term_borrower', $data, TRUE);
        $this->load->helper('dompdf');
        //load content html
        
        // create pdf using dompdf
        $filename = 'Perjanjian-Elektronik';
        $paper = 'A4';
        $orientation = 'potrait';
        pdf_create($html, $filename, $paper, $orientation);
    }

    public function pdf_term_lender($register_code){
        $reg_code = $this->session->userdata('reg_code');
        $reg_password = $this->session->userdata('reg_password');
        $reg_access_status = $this->session->userdata('reg_access_status');
        $reg_activation_status = $this->session->userdata('reg_activation_status');
        $reg_status = $this->session->userdata('reg_status');

        $check_access = $this->auth_model->get_access($reg_code, $reg_password, $reg_access_status, $reg_activation_status, $reg_status);

        $register_code = $check_access[0]->register_code;

        $where = array('register_code'=>$register_code);
        $navigation['lender_fund'] = $this->bank_model->get_fund_lender($register_code);
        $navigation['bio_fullname'] = $this->crud_model->get_data('tb_fintech_lender_bio',$where)->result();
        $navigation['account_active'] = "active";

        $data['get_code'] = $register_code;
        $data['data_code'] = $this->personal_info_model->get_personal_info_lender($register_code);
        

        $data['total_reserved'] = $this->account_model->get_total_reserved_sum($register_code);
        $data['total_invest'] = $this->account_model->get_total_invest_sum($register_code);
        $data['total_funding'] = $this->account_model->get_total_funding_sum($register_code);

        $data['data_loan'] = $this->account_model->get_data_loan($register_code);
        $data['data_term'] = $this->account_model->get_term_by_id_nreg_lender($register_code);
        $data['data_contacts'] = $this->contact_model->get_contact();
        $data['data_direk'] = $this->management_model->get_managementmenu_direk();
        $data['check_data'] = $this->crud_model->get_data("tb_fintech_register",$where)->result();
        $data['data_bio'] = $this->personal_info_model->get_personal_info_lender($register_code);
        

        $html = $this->load->view('report/pdf_term_lender', $data, TRUE);
        $this->load->helper('dompdf');
        //load content html
        
        // create pdf using dompdf
        $filename = 'Perjanjian-Elektronik';
        $paper = 'A4';
        $orientation = 'potrait';
        pdf_create($html, $filename, $paper, $orientation);
    }
   

}
?>
