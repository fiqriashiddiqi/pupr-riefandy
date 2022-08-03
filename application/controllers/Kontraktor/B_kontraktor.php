<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_kontraktor extends CI_Controller {

	function __construct()
  	{
    	parent::__construct();
   	 	$this->load->library('form_validation');
    	$this->load->model('auth_model');
    	$this->load->model('crud_model');
        // $this->load->model('General_Ledger/journal_model');
    	$this->load->model('Website/users_model');
    	$this->load->model('Website/groups_model');
    	date_default_timezone_set("Asia/Jakarta");

    	$users_username = $this->session->userdata('users_username');
    	$users_password = $this->session->userdata('users_password');
		$users_access_status = $this->session->userdata('users_access_status');

		$check_access = $this->auth_model->get_access($users_username, $users_password);

        $groups = array(
            '4');

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
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Admin/B_dashboard');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view("backend-web/root/input-no-kontrak");

	}

    public function kontraktor1()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor1', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor2()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor2', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor3()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor3', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor4()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor4', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor5()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor5', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor6()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor6', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor7()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor7', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor8()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor8', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}

    public function kontraktor9()
	{
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;
		
		$header['users_name'] = $check_access[0]->users_name;
		$header['groups_name'] = $check_access[0]->groups_name;
		$navigation['users_name'] = $check_access[0]->users_name;
		$navigation['groups_name'] = $check_access[0]->groups_name;
		$navigation['access_groups'] = $access_groups;
		$navigation['menus'] = $this->groups_model->groups_rules();

		$data['title'] = "Dashboard Admin";
		$data['brd_title_url'] = site_url('Kontraktor/B_kontraktor');
		$data['users_last_signin'] = $check_access[0]->users_last_signin;

		$this->load->view('backend-web/partial/metadata-admin');
		$this->load->view('backend-web/partial/header-admin', $header);
		// $this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/kontraktor9', $data);
		$this->load->view('backend-web/partial/footer-admin');

	}


}
?>