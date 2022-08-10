<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_jicaconcurrence extends CI_Controller {

	function __construct()
  	{
    	parent::__construct();
   	 	$this->load->library('form_validation');
    	$this->load->model('auth_model');
    	$this->load->model('crud_model');
    	// $this->load->model('General_Ledger/journal_model');
    	$this->load->model('Website/users_model');
    	$this->load->model('Website/tempat_model');
    	$this->load->model('Website/groups_model');
    	date_default_timezone_set("Asia/Jakarta");

    	$users_username = $this->session->userdata('users_username');
    	$users_password = $this->session->userdata('users_password');
		$users_access_status = $this->session->userdata('users_access_status');

		$check_access = $this->auth_model->get_access($users_username, $users_password);


        $groups = array(
            '1',
            '2',
            '3',
            '4',
            '5',
            '6');

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
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;

        $groups_access = array(
            '2');

        if(!in_array($check_access[0]->id_backend_groups, $groups_access)){
                $this->session->unset_userdata("users_username","users_password", "users_access_status");

                $this->session->set_flashdata('alert_error', 'You do not have access to this page !');
                redirect(base_url().'auth');
                die();
        }
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$navigation['users_active'] = 'active';

		$data['title'] = "Dashboard";
		$data['brd_title_main'] = "Dashboard";
		$data['brd_title_url'] = site_url('Admin/B_verifikasi');

		$data['create_url'] = site_url('Admin/B_tempatbayar/create_tempat');
		$data['filter_url'] = site_url('Admin/B_tempatbayar');
		$data['update_url'] = site_url('Admin/B_tempatbayar/update_tempat');
		$data['exchange_url'] = site_url('Admin/B_tempatbayar/exchange_users');
		$data['delete_url'] = site_url('Admin/B_tempatbayar/delete_tempat');
		$data['excel_url'] = site_url('Admin/B_report/excel_users');

		// $data['data_groups'] = $this->groups_model->get_groups($access_groups);

		// $this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
		// $this->form_validation->set_rules("users_access_status", "Status Akses", "trim");

		// if ($this->form_validation->run() == true){
		// 	$id_backend_groups = $this->input->post('id_backend_groups');
		// 	$users_access_status = $this->input->post('users_access_status');

		// 	$data['data_users'] = $this->users_model->get_users($access_groups, $id_backend_groups, $users_access_status);

		// 	$data['id_backend_groups'] = $id_backend_groups;
		// 	$data['users_access_status'] = $users_access_status;

		// } else {
		// 	$data['data_users'] = $this->users_model->get_users($access_groups);

		// }

		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/jica-concurrence', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function daftar_permohonan()
	{

		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;

        $groups_access = array(
            '1');

        if(!in_array($check_access[0]->id_backend_groups, $groups_access)){
                $this->session->unset_userdata("users_username","users_password", "users_access_status");

                $this->session->set_flashdata('alert_error', 'You do not have access to this page !');
                redirect(base_url().'auth');
                die();
        }
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$navigation['users_active'] = 'active';

		$data['title'] = "Dashboard";
		$data['brd_title_main'] = "Dashboard";
		$data['brd_title_url'] = site_url('Admin/B_verifikasi');

		$data['create_url'] = site_url('Admin/B_tempatbayar/create_tempat');
		$data['filter_url'] = site_url('Admin/B_tempatbayar');
		$data['update_url'] = site_url('Admin/B_tempatbayar/update_tempat');
		$data['exchange_url'] = site_url('Admin/B_tempatbayar/exchange_users');
		$data['delete_url'] = site_url('Admin/B_tempatbayar/delete_tempat');
		$data['excel_url'] = site_url('Admin/B_report/excel_users');

		// $data['data_groups'] = $this->groups_model->get_groups($access_groups);

		// $this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
		// $this->form_validation->set_rules("users_access_status", "Status Akses", "trim");

		// if ($this->form_validation->run() == true){
		// 	$id_backend_groups = $this->input->post('id_backend_groups');
		// 	$users_access_status = $this->input->post('users_access_status');

		// 	$data['data_users'] = $this->users_model->get_users($access_groups, $id_backend_groups, $users_access_status);

		// 	$data['id_backend_groups'] = $id_backend_groups;
		// 	$data['users_access_status'] = $users_access_status;

		// } else {
		// 	$data['data_users'] = $this->users_model->get_users($access_groups);

		// }

		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/daftar-permohonan', $data);
		$this->load->view('backend-web/partial/footer');

	}




	
}
?>