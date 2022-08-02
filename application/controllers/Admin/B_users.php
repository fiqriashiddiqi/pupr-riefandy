<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_users extends CI_Controller {

	function __construct()
  	{
    	parent::__construct();
   	 	$this->load->library('form_validation');
    	$this->load->model('auth_model');
    	$this->load->model('crud_model');
    	// $this->load->model('General_Ledger/journal_model');
    	$this->load->model('Website/users_model');
    	$this->load->model('Website/groups_model');
    	$this->load->model('Website/tempat_model');
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

		$data['title'] = "Users Management";
		$data['brd_title_main'] = "Users Management";
		$data['brd_title_url'] = site_url('Admin/B_users');

		$data['create_url'] = site_url('Admin/B_users/create_users');
		$data['filter_url'] = site_url('Admin/B_users');
		$data['update_url'] = site_url('Admin/B_users/update_users');
		$data['exchange_url'] = site_url('Admin/B_users/exchange_users');
		$data['delete_url'] = site_url('Admin/B_users/delete_users');
		$data['excel_url'] = site_url('Admin/B_report/excel_users');

		$data['data_groups'] = $this->groups_model->get_groups($access_groups);

		$this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
		$this->form_validation->set_rules("users_access_status", "Status Akses", "trim");

		if ($this->form_validation->run() == true){
			$id_backend_groups = $this->input->post('id_backend_groups');
			$users_access_status = $this->input->post('users_access_status');

			$data['data_users'] = $this->users_model->get_users($access_groups, $id_backend_groups, $users_access_status);

			$data['id_backend_groups'] = $id_backend_groups;
			$data['users_access_status'] = $users_access_status;

		} else {
			$data['data_users'] = $this->users_model->get_users($access_groups);

		}

		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/users-list', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function access_status_exchange()
	{

		$id_backend_users = $this->input->post('id_backend_users');

		$data_users = $this->users_model->get_users_by_id($id_backend_users);
		$users_access_status = $data_users[0]->users_access_status;

		if ($users_access_status == "Deactivated"){

			$data_exchange = array(
			'users_access_status' => 'Activated'
			);

		} else {

			$data_exchange = array(
			'users_access_status' => 'Deactivated'
			);

		}
							
		$update_users = $this->crud_model->update('tb_backend_users','id_backend_users',$id_backend_users,$data_exchange);

	}

	public function create_users()
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

		$data['title'] = "Add Users";
		$data['brd_title_main'] = "Users Management";
		$data['brd_title_url'] = site_url('Admin/B_users');
		$data['brd_title_sub'] = "Add Users";
		$data['brd_title_url_sub'] = site_url('Admin/B_users/create_users');
		$data['back_url'] = site_url('Admin/B_users');

		$data['form_url'] = site_url('Admin/B_users/create_users');

		$data['data_groups'] = $this->groups_model->get_groups($access_groups);
		$data['data_tempat'] = $this->tempat_model->get_tempat_u();

		$this->form_validation->set_rules("users_name", "Nama Pengguna", "trim|required");
		$this->form_validation->set_rules("users_username", "Username", "trim|required");
		$this->form_validation->set_rules("users_password", "Password", "trim|required");
		$this->form_validation->set_rules("id_backend_groups", "ID Groups", "trim|required");
		$this->form_validation->set_rules("id_tempat_bayar", "ID Tempat Bayar", "trim|required");
		//$this->form_validation->set_rules("users_access_status", "Status Akses", "trim|required");

		if ($this->form_validation->run() == true){
			$users_name = $this->input->post('users_name');
			$users_username = $this->input->post('users_username');
			$users_password = sha1($this->input->post('users_password'));
			$id_backend_groups = $this->input->post('id_backend_groups');
			$id_tempat_bayar = $this->input->post('id_tempat_bayar');
			//$users_access_status = $this->input->post('users_access_status');

			$where_username = array('users_username' => $users_username);
			$check_username = $this->crud_model->get_data('tb_backend_users',$where_username)->num_rows();

		
			if ($check_username == 0){
					$data_users = array(
					'id_backend_groups' => $id_backend_groups,
					'id_tempat_bayar' => $id_tempat_bayar,
					'users_name' => $users_name,
					'users_username' => $users_username,
					'users_password' => $users_password,
					'users_role' => '',
					'users_last_signin' => $date,
					'users_last_signout' => $date,
					'users_access_status' => 'Activated'

					);

					$insert_users = $this->crud_model->insert('tb_backend_users',$data_users);
					$this->session->set_flashdata('alert_success', 'Data successfully saved.');
					redirect(base_url().'Admin/B_users/create_users');
					die();
				
			} else {
				$this->session->set_flashdata('alert_error', 'Data Gagal Disimpan, Username sudah terpakai!');
					redirect(base_url().'Admin/B_users/create_users');
					die();

			}
		
		}

		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/users-form', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function update_users()
	{

		$id_backend_users = $this->uri->segment(4);

		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;

        $groups_access = array(
            '1',
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

		$data['title'] = "Update Users";
		$data['brd_title_main'] = "Users Management";
		$data['brd_title_url'] = site_url('Admin/B_users');
		$data['brd_title_sub'] = "Update Users";
		$data['brd_title_url_sub'] = site_url('Admin/B_users/update_users')."/".$id_backend_users;
		$data['back_url'] = site_url('Admin/B_users');

		$data['form_url'] = site_url('Admin/B_users/update_users');

		$data['profile_true'] = "backdoor";

		$where_users = array('id_backend_users' => $id_backend_users);
		// $data['data_users'] = $this->crud_model->get_data('tb_backend_users', $where_users)->result();
		$data['data_users'] = $this->users_model->get_users_by_id($id_backend_users);
		$data['data_groups'] = $this->groups_model->get_groups($access_groups);
		$data['data_tempat'] = $this->tempat_model->get_tempat_u();

		$this->form_validation->set_rules("id_backend_users", "id_backend_users", "trim|required");
		$this->form_validation->set_rules("users_name", "Nama Pengguna", "trim|required");
		$this->form_validation->set_rules("users_password", "Password", "trim|required");
		$this->form_validation->set_rules("id_backend_groups", "ID Groups", "trim|required");
		$this->form_validation->set_rules("id_tempat_bayar", "ID Tempat Bayar", "trim|required");
		$this->form_validation->set_rules("users_access_status", "Status Akses", "trim|required");

		if ($this->form_validation->run() == true){

			$id_backend_users = $this->input->post('id_backend_users');
			$users_name = $this->input->post('users_name');
			$users_password = $this->input->post('users_password');
			$id_backend_groups = $this->input->post('id_backend_groups');
			$id_tempat_bayar = $this->input->post('id_tempat_bayar');
			$users_access_status = $this->input->post('users_access_status');
					$val_pass = $this->users_model->get_users_by_id($id_backend_users);
					// var_dump($val_pass);
					if($val_pass[0]->users_password != $users_password){
						$users_password = sha1($this->input->post('users_password'));
					}	
						$data_users = array(

						'id_backend_groups' => $id_backend_groups,
						'id_tempat_bayar' => $id_tempat_bayar,
						'users_name' => $users_name,
						'users_password' => $users_password,
						'users_access_status' => $users_access_status
						);

						$update_users = $this->crud_model->update('tb_backend_users','id_backend_users',$id_backend_users,$data_users);
						$this->session->set_flashdata('alert_success', 'Data successfully saved.');
						redirect(base_url().'Admin/B_users/update_users/'.$id_backend_users);
						die();

		}
		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/users-form-update', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function profile()
	{

		$id_backend_users = $this->uri->segment(4);
		$profile_true = $this->uri->segment(5);

		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;

        $groups_access = array(
            '1',
            '2',
            '3',
            '4',
            '5',
            '6');

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

		$data['title'] = "Your Account";
		$data['brd_title_main'] = "Dashboard";
		$data['brd_title_url'] = site_url('Admin/b_dashboard');
		$data['brd_title_sub'] = "Your Account";
		$data['brd_title_url_sub'] = site_url('Admin/B_users/profile')."/".$id_backend_users."/".$profile_true;

		$data['form_url'] = site_url('Admin/B_users/profile');
		$data['profile_true'] = $profile_true;

        $data['back_url'] = site_url('Admin/b_dashboard');

		$where_users = array('id_backend_users' => $id_backend_users);
		$data['data_users'] = $this->crud_model->get_data('tb_backend_users', $where_users)->result();

		$data['data_groups'] = $this->groups_model->get_groups($access_groups);

		$this->form_validation->set_rules("id_backend_users", "id_backend_users", "trim|required");
		$this->form_validation->set_rules("users_name", "Nama Pengguna", "trim|required");
		$this->form_validation->set_rules("users_password", "Password", "trim|required");
        
        if($this->input->post('id_backend_users')){
		if ($this->form_validation->run() == true){
			$id_backend_users = $this->input->post('id_backend_users');
			$users_name = $this->input->post('users_name');
			$users_password = sha1($this->input->post('users_password'));

						$data_users = array(
						'users_name' => $users_name,
						'users_password' => $users_password,
						
						);

						$update_users = $this->crud_model->update('tb_backend_users','id_backend_users',$id_backend_users,$data_users);
                        
                        $this->session->unset_userdata("users_username","users_password", "users_access_status");
                        $this->session->set_flashdata('alert_success', 'Data successfully Changed, Please Re-Login With a New Username or Password.');
                        redirect(base_url().'auth');
                        die();

		} else {

            if($access_groups == 1){
                redirect(base_url().'Admin/b_dashboard');
                die();

            } else if($access_groups == 2){
                redirect(base_url().'Fintech_Site/b_dashboard');
                die();

            } else if($access_groups == 3){
                redirect(base_url().'Admin/b_dashboard');
                die();

            } else if($access_groups == 4){
                redirect(base_url().'Fintech_Site/b_dashboard');
                die();

            } else if($access_groups == 5){
                redirect(base_url().'General_Ledger/b_dashboard');
                die();

            } else if($access_groups == 6){
                redirect(base_url().'Busuness_Plan/b_dashboard');
                die();

            } else {
                redirect(base_url().'Admin/b_dashboard');
                die();

            }
		}
        }
		
		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/users-form-update', $data);
		$this->load->view('backend-web/partial/footer');

	}


	public function delete_users()
	{
		$id_backend_users = $this->uri->segment(4);
		
		if (!empty($id_backend_users)){

					$this->crud_model->delete('tb_backend_users','id_backend_users',$id_backend_users);
					$this->session->set_flashdata('alert_success', 'Data successfully Deleted.');
					redirect(base_url().'Admin/B_users');
					die();


		} else {
			$this->session->set_flashdata('alert_error', 'Data failed to Delete !');
			redirect(base_url().'Admin/B_users');
			die();
		}
	}
}
?>