<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_report_bphtb extends CI_Controller {

	function __construct()
  	{
    	parent::__construct();
   	 	$this->load->library('form_validation');
    	$this->load->model('auth_model');
    	$this->load->model('crud_model');
    	// $this->load->model('Parameter/param_model');
    	$this->load->model('Report/report_bphtb_model');
    	$this->load->model('Website/users_model');
    	$this->load->model('Website/groups_model');
    	date_default_timezone_set("Asia/Jakarta");

    	$users_username = $this->session->userdata('users_username');
    	$users_password = $this->session->userdata('users_password');
		$users_access_status = $this->session->userdata('users_access_status');

		$check_access = $this->auth_model->get_access($users_username, $users_password);

        $groups = array(
            '1',
            '2',
            '3');

            if (!isset($users_username) && !isset($users_password) && !isset($users_access_status)){
                $this->session->unset_userdata("users_username","users_password", "users_access_status");
                

                $this->session->set_flashdata('alert_error', 'You have not logged in or you have left the page for too long. !');
                redirect(base_url().'auth');
                die();
            }

            if(!in_array($check_access[0]->id_backend_groups, $groups)){
                $this->session->unset_userdata("users_username","users_password", "users_access_status");
                

                $this->session->set_flashdata('alert_error', 'You do not have access to this page !');
                redirect(base_url().'auth');
                die();
            }

            if($check_access[0]->users_access_status != "Activated"){
                $this->session->unset_userdata("users_username","users_password", "users_access_status");
                
                
                $this->session->set_flashdata('alert_error', 'Your account is already Disabled !');
                redirect(base_url().'auth');
                die();
            }

  	}

	public function index()
	{
        //$id_backend_users = $this->uri->segment(4);
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
        $access_user = $check_access[0]->id_backend_users;
        // var_dump($access_user);
        // die();

        $groups_access = array(
            '1',
            '2',
            '3');

        if(!in_array($check_access[0]->id_backend_groups, $groups_access)){
                $this->session->unset_userdata("users_username","users_password", "users_access_status");

                $this->session->set_flashdata('alert_error', 'You do not have access to this page !');
                redirect(base_url().'auth');
                die();
        }
        if($access_groups==1){
            
    		$header['users_name'] = $check_access[0]->users_name;
    		$header['groups_name'] = $check_access[0]->groups_name;
    		$navigation['users_name'] = $check_access[0]->users_name;
    		$navigation['groups_name'] = $check_access[0]->groups_name;
    		$navigation['access_groups'] = $access_groups;
    		$navigation['menus'] = $this->groups_model->groups_rules();

    		$data['title'] = "Laporan BPHTB";
    		$data['brd_title_main'] = "Laporan BPHTB";
    		$data['brd_title_url'] = site_url('Report/B_report_bphtb');

    		//$data['create_url'] = site_url('General_Ledger/B_journal/create_journal');
    		//$data['info_url'] = site_url('General_Ledger/B_journal/update_journal');
    		$data['excel_url'] = site_url('Report/B_report_bphtb/excel_laporan');

    		// $data['get_coa_a'] = $this->param_model->get_coa_a();
    		// $data['dropdown_coa_e'] = $this->param_model->get_dropdown_coa_e();
            //$where_users = array('id_backend_users' => $id_backend_users);
            $data['data_dropdown_user'] = $this->users_model->get_users_by_id_groups();
            $data['data_users'] = $this->users_model->get_users_by_id(@$id_backend_users);
            $data['data_laporan_user'] = $this->report_bphtb_model->get_laporan_by_id_users(null,@$id_backend_users);
    		$data['data_laporan'] = $this->report_bphtb_model->get_laporan_list_report_admin(null,@$id_backend_users,@$start_date,@$end_date);
            $this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
            $this->form_validation->set_rules("users_access_status", "Status Akses", "trim");
        }elseif ($access_groups==2) {
            $header['users_name'] = $check_access[0]->users_name;
            $header['groups_name'] = $check_access[0]->groups_name;
            $navigation['users_name'] = $check_access[0]->users_name;
            $navigation['groups_name'] = $check_access[0]->groups_name;
            $navigation['access_groups'] = $access_groups;
            $navigation['menus'] = $this->groups_model->groups_rules();

            $data['title'] = "Laporan BPHTB Manajemen";
            $data['brd_title_main'] = "Laporan BPHTB";
            $data['brd_title_url'] = site_url('Report/B_report_bphtb');

            //$data['create_url'] = site_url('General_Ledger/B_journal/create_journal');
            //$data['info_url'] = site_url('General_Ledger/B_journal/update_journal');
            $data['excel_url'] = site_url('Report/B_report_bphtb/excel_laporan_manajemen');

            // $data['get_coa_a'] = $this->param_model->get_coa_a();
            // $data['dropdown_coa_e'] = $this->param_model->get_dropdown_coa_e();
            //$where_users = array('id_backend_users' => $id_backend_users);
            $data['data_dropdown_user'] = $this->users_model->get_users_by_id_groups();
            $data['data_users'] = $this->users_model->get_users_by_id(@$id_backend_users);
            $data['data_laporan_user'] = $this->report_bphtb_model->get_laporan_by_id_users(null,@$id_backend_users);
            $data['data_laporan'] = $this->report_bphtb_model->get_laporan_list_report_admin(null,@$id_backend_users,@$start_date,@$end_date);
            $this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
            $this->form_validation->set_rules("users_access_status", "Status Akses", "trim");
        }elseif ($access_groups==3) {
            $header['users_name'] = $check_access[0]->users_name;
            $header['groups_name'] = $check_access[0]->groups_name;
            $navigation['users_name'] = $check_access[0]->users_name;
            $navigation['groups_name'] = $check_access[0]->groups_name;
            $navigation['access_groups'] = $access_groups;
            $navigation['menus'] = $this->groups_model->groups_rules();

            $data['title'] = "Laporan BPHTB Petugas";
            $data['brd_title_main'] = "Laporan BPHTB Petugas";
            $data['brd_title_url'] = site_url('Report/B_report_bphtb');

            //$data['create_url'] = site_url('General_Ledger/B_journal/create_journal');
            //$data['info_url'] = site_url('General_Ledger/B_journal/update_journal');
            $data['excel_url'] = site_url('Report/B_report_bphtb/excel_laporan_petugas');

            // $data['get_coa_a'] = $this->param_model->get_coa_a();
            // $data['dropdown_coa_e'] = $this->param_model->get_dropdown_coa_e();
            //$where_users = array('id_backend_users' => $id_backend_users);
            $data['data_users'] = $this->users_model->get_users_by_id($access_user);
            $data['data_laporan_user'] = $this->report_bphtb_model->get_laporan_by_id_users(null,$access_user);
            $data['data_laporan'] = $this->report_bphtb_model->get_laporan_list_report_admin(null,$access_user,@$start_date,@$end_date);
            $this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
            $this->form_validation->set_rules("users_access_status", "Status Akses", "trim");
        }
        
		

        //$id = ( isset( $_GET['id_backend_users'] ) && !empty( $_GET['id_backend_users'] ) ) ;
         
		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/report-list-bphtb', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function excel_laporan_admin()
    {       
        $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : NULL;
        $id_backend_users = isset($_REQUEST['id_backend_users']) ? $_REQUEST['id_backend_users'] : NULL;
        $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
        $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');

        $data['data_laporan'] = $this->report_bphtb_model->get_laporan_list_report_admin(null,$start_date,$end_date);
        $this->load->view('backend-web/report/excel_laporan_bphtb', $data);
    }

    public function excel_laporan()
    {       
        $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : NULL;
        $id_backend_users = isset($_REQUEST['id_backend_users']) ? $_REQUEST['id_backend_users'] : NULL;
        $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
        $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');

        $data['data_laporan'] = $this->report_bphtb_model->get_laporan_list_report_admin(null,$id_backend_users,$start_date,$end_date);
        $this->load->view('backend-web/report/excel_laporan_bphtb', $data);
    }

    public function excel_laporan_manajemen()
    {       
        $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : NULL;
        //$id_backend_users = isset($_REQUEST['id_backend_users']) ? $_REQUEST['id_backend_users'] : NULL;
        $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
        $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');

        $data['data_laporan'] = $this->report_bphtb_model->get_laporan_list_report_admin(null,null,$start_date,$end_date);
        $this->load->view('backend-web/report/excel_laporan_bphtb', $data);
    }

    public function excel_laporan_petugas()
    {       
        $users_username = $this->session->userdata('users_username');
        $users_password = $this->session->userdata('users_password');

        $check_access = $this->auth_model->get_access($users_username, $users_password);
        $access_groups = $check_access[0]->id_backend_groups;
        $access_user = $check_access[0]->id_backend_users;
        $id_backend_trx = isset($_REQUEST['id_backend_trx']) ? $_REQUEST['id_backend_trx'] : NULL;
        $id_backend_users = $access_user;
        $start_date = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date('Y-m-d');
        $end_date = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date('Y-m-d');

        $data['data_laporan'] = $this->report_bphtb_model->get_laporan_list_report_admin(null,$id_backend_users,$start_date,$end_date);
        $this->load->view('backend-web/report/excel_laporan_bphtb', $data);
    }


}

?>