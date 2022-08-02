<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_parameter extends CI_Controller {

	function __construct()
  	{
    	parent::__construct();
   	 	$this->load->library('form_validation');
    	$this->load->model('auth_model');
    	$this->load->model('crud_model');
    	// $this->load->model('General_Ledger/journal_model');
    	$this->load->model('Website/param_model');
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

		$data['title'] = "Parameter Global";
		$data['brd_title_main'] = "Parameter Global";
		$data['brd_title_url'] = site_url('Admin/B_parameter');
		$data['brd_title_sub'] = "Update Parameter";
		$data['brd_title_url_sub'] = site_url('Admin/B_parameter');
		//$data['create_url'] = site_url('Admin/B_parameter/create_param');
		$data['form_url'] = site_url('Admin/B_parameter');
		$data['filter_url'] = site_url('Admin/B_parameter');
		//$data['update_url'] = site_url('Admin/B_parameter/update_param');
		//$data['exchange_url'] = site_url('Admin/B_parameter/exchange_users');
		//$data['delete_url'] = site_url('Admin/B_parameter/delete_param');
		//$data['excel_url'] = site_url('Admin/B_report/excel_users');
		//$where_param = array('id_backend_param_global' => $id_backend_param_global);
		$data['data_param'] = $this->crud_model->get_setting();

		$data['data_groups'] = $this->groups_model->get_groups($access_groups);

		$this->form_validation->set_rules("id_backend_param_global", "ID Parameter Global", "trim|required");
		$this->form_validation->set_rules("port", "Port", "trim|required");
		$this->form_validation->set_rules("ip_address", "", "trim|required");
		$this->form_validation->set_rules("request", "", "trim|required");
		$this->form_validation->set_rules("curl", "", "trim|required");
		$this->form_validation->set_rules("merchant_type", "", "trim|required");

		if ($this->form_validation->run() == true){

			$id_backend_param_global = $this->input->post('id_backend_param_global');
			$port = $this->input->post('port');
			$ip_address = $this->input->post('ip_address');
			$request = $this->input->post('request');
			$curl = $this->input->post('curl');
			$merchant_type = $this->input->post('merchant_type');

						$data_param = array(
						'id_backend_param_global' => $id_backend_param_global,
						'port' => $port,
						'ip_address' => $ip_address,
						'request' => $request,
						'curl' => $curl,
						'merchant_type' => $merchant_type

						);

						$update_param = $this->crud_model->update('tb_backend_param_global','id_backend_param_global',$id_backend_param_global,$data_param);
						$this->session->set_flashdata('alert_success', 'Data successfully saved.');
						redirect(base_url().'Admin/B_parameter');
						die();

		}
		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/param-form-update', $data);
		$this->load->view('backend-web/partial/footer');
	}

	// public function access_status_exchange()
	// {

	// 	$id_backend_param_global = $this->input->post('id_backend_param_global');

	// 	$data_param = $this->paramt_model->get_pram_by_id($id_backend_param_global);
	// 	$tempat_access_status = $data_tempat[0]->tempat_access_status;

	// 	if ($tempat_access_status == "Deactivated"){

	// 		$data_exchange = array(
	// 		'tempat_access_status' => 'Activated'
	// 		);

	// 	} else {

	// 		$data_exchange = array(
	// 		'tempat_access_status' => 'Deactivated'
	// 		);

	// 	}
							
	// 	$update_tempat = $this->crud_model->update('tb_tempat_bayar','id_tempat_bayar',$id_tempat_bayar,$data_exchange);

	// }

	public function create_param()
	{
		$date = date('Y-m-d H:i:s');
		
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

		$data['title'] = "Tambah Parameter Global";
		$data['brd_title_main'] = "Parameter Global";
		$data['brd_title_url'] = site_url('Admin/B_parameter');
		$data['brd_title_sub'] = "Tambah Parameter";
		$data['brd_title_url_sub'] = site_url('Admin/B_parameter/create_param');
		$data['back_url'] = site_url('Admin/B_parameter');

		$data['form_url'] = site_url('Admin/B_parameter/create_param');

		//$data['data_groups'] = $this->groups_model->get_groups($access_groups);

		// $this->form_validation->set_rules("kd_tempat", "Kode Tempat", "trim|required");
		$this->form_validation->set_rules("param_name", "Nama Parameter", "trim|required");
		$this->form_validation->set_rules("param_value", "Parameter Value", "trim|required");

		if ($this->form_validation->run() == true){
			$param_name = $this->input->post('param_name');
			$param_value = $this->input->post('param_value');
			//$tempat_access_status = $this->input->post('tempat_access_status');

			// $where_email = array('users_email' => $users_email);
			// $check_email = $this->crud_model->get_data('tb_backend_users',$where_email)->num_rows();

			$where_name = array('param_name' => $param_name);
			$check_name = $this->crud_model->get_data('tb_backend_param_global',$where_name)->num_rows();

		
			if ($check_name == 0){
					$data_param = array(
					
					'param_name' => $param_name,
					'param_value' => $param_value
					);

					$insert_param = $this->crud_model->insert('tb_backend_param_global',$data_param);
					$this->session->set_flashdata('alert_success', 'Data successfully saved.');
					redirect(base_url().'Admin/B_parameter/create_param');
					die();
				
			} else {
				$this->session->set_flashdata('alert_error', 'Nama Param telah digunakan!');
					redirect(base_url().'Admin/B_parameter/create_param');
					die();

			}
		
		}

		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/param-form', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function update_param()
	{


		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		$id_backend_param_global = $this->uri->segment(4);

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

		$data['title'] = "Update Parameter";
		$data['brd_title_main'] = "Parameter Global";
		$data['brd_title_url'] = site_url('Admin/B_parameter');
		$data['brd_title_sub'] = "Update Parameter";
		$data['brd_title_url_sub'] = site_url('Admin/B_parameter/update_param')."/".$id_backend_param_global;
		$data['back_url'] = site_url('Admin/B_parameter');

		$data['form_url'] = site_url('Admin/B_parameter/update_param');

		$data['profile_true'] = "backdoor";

		$where_param = array('id_backend_param_global' => $id_backend_param_global);
		$data['data_param'] = $this->crud_model->get_data('tb_backend_param_global', $where_param)->result();

		$data['data_groups'] = $this->groups_model->get_groups($access_groups);

		$this->form_validation->set_rules("id_backend_param_global", "ID Parameter Global", "trim|required");
		$this->form_validation->set_rules("param_name", "Nama Parameter", "trim|required");
		$this->form_validation->set_rules("param_value", "Parameter Value", "trim|required");

		if ($this->form_validation->run() == true){

			$id_backend_param_global = $this->input->post('id_backend_param_global');
			$param_name = $this->input->post('param_name');
			$param_value = $this->input->post('param_value');

						$data_param = array(

						'param_name' => $param_name,
						'param_value' => $param_value
						);

						$update_param = $this->crud_model->update('tb_backend_param_global','id_backend_param_global',$id_backend_param_global,$data_param);
						$this->session->set_flashdata('alert_success', 'Data successfully saved.');
						redirect(base_url().'Admin/B_parameter/update_param/'.$id_backend_param_global);
						die();

		}
		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/param-form-update', $data);
		$this->load->view('backend-web/partial/footer');

	}


	public function delete_param()
	{
		$id_backend_param_global = $this->uri->segment(4);
		
		if (!empty($id_backend_param_global)){

					$this->crud_model->delete('tb_backend_param_global','id_backend_param_global',$id_backend_param_global);
					$this->session->set_flashdata('alert_success', 'Data successfully Deleted.');
					redirect(base_url().'Admin/B_parameter');
					die();


		} else {
			$this->session->set_flashdata('alert_error', 'Data failed to Delete !');
			redirect(base_url().'Admin/B_parameter');
			die();
		}
	}
}
?>