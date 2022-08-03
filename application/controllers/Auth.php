<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('crud_model');
        $this->load->library('form_validation');
        
        date_default_timezone_set("Asia/Jakarta");
        $url = site_url();
    }

	public function index()
	{	

		$this->load->view("backend-web/root/signin");

	}

	public function forgot_password()
	{	

		$this->load->view("backend-web/root/forgot-password");

	}

	public function signup()
	{	

		$this->load->view("backend-web/root/signup");

	}

	public function signin()
	{	

		$this->form_validation->set_rules("users_username", "Username", "trim|required");
		$this->form_validation->set_rules("users_password", "Password", "trim|required");

		if ($this->form_validation->run() == true){

			$db = get_instance()->db->conn_id;

			$users_username = mysqli_real_escape_string($db, $this->input->post('users_username'));
			$users_password = mysqli_real_escape_string($db, sha1($this->input->post('users_password')));

			$where = array('users_username' => $users_username, 'users_password' => $users_password , 'users_access_status' => 'Activated');
			$check_validation = $this->crud_model->get_data("tb_backend_users",$where)->num_rows();

				if($check_validation > 0){

					$data = $this->crud_model->get_data("tb_backend_users",$where)->result();

					$data_session = array(
						'users_username' => $data[0]->users_username,
						'users_password' => $data[0]->users_password,
						'users_access_status' => $data[0]->users_access_status
					);

					$this->session->set_userdata($data_session);

					$date = date('Y-m-d H:i:s');

					$id_backend_users = $data[0]->id_backend_users;
					$data_users_update = array('users_last_signin' => $date);
					$update_users = $this->crud_model->update('tb_backend_users', 'id_backend_users', $id_backend_users, $data_users_update);

					$flashDate = date("Y-m-d H:i:s");

                    if ($data[0]->id_backend_groups == "1"){

    					$this->session->set_flashdata('alert_success', 'Your sign in date is : '.$flashDate);
    					redirect(base_url().'Admin/B_dashboard');
    					die();

                    } else if($data[0]->id_backend_groups == "2"){

                        $this->session->set_flashdata('alert_success', 'Your sign in date is : '.$flashDate);
                        redirect(base_url().'Admin/B_verifikasi');
                        die();

                    } else if($data[0]->id_backend_groups == "3"){

                        $this->session->set_flashdata('alert_success', 'Your sign in date is : '.$flashDate);
                        redirect(base_url().'Admin/B_subwil');
                        die();

                    } else if($data[0]->id_backend_groups == "4"){

                        $this->session->set_flashdata('alert_success', 'Your sign in date is : '.$flashDate);
                        redirect(base_url().'Kontraktor/B_kontraktor');
                        die();

                    } else if($data[0]->id_backend_groups == "6"){

                        $this->session->set_flashdata('alert_success', 'Your sign in date is : '.$flashDate);
                        redirect(base_url().'Business_Plan/B_dashboard');
                        die();

                    } else if($data[0]->id_backend_groups == "7"){

                        $this->session->set_flashdata('alert_success', 'Your sign in date is : '.$flashDate);
                        redirect(base_url().'Manager/B_dashboard');
                        die();

                    }  else {

                        $this->session->unset_userdata("users_username","users_password", "users_access_status");
                        $this->session->set_flashdata('alert_error', 'The account you entered is wrong, try again !');
                        redirect(base_url().'Auth');
                        die();

                    }

				} else {

					$this->session->set_flashdata('alert_error', 'The account you entered is wrong, try again !');
					redirect(base_url().'Auth');
					die();
				
                }
		}
		$this->session->set_flashdata('alert_error', 'You do not have access to our page.');
		redirect(base_url().'Auth');
		die();

	}

	public function warningout()
	{	

		$this->session->unset_userdata("users_username","users_password", "users_access_status");
		$this->session->sess_destroy();
		redirect(base_url().'Auth');
		die();

	}

	public function signout()
	{	

		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

			if (isset($users_username)){
			$where = array('users_username' => $users_username, 'users_password' => $users_password,);
			$data = $this->crud_model->get_data("tb_backend_users",$where)->result();

			$date = date('Y-m-d H:i:s');

			$id_backend_users = $data[0]->id_backend_users;
			$data_users_update = array('users_last_signout' => $date);
			$update_users = $this->crud_model->update('tb_backend_users', 'id_backend_users', $id_backend_users, $data_users_update);

			}

		$this->session->unset_userdata("users_username","users_password", "users_access_status");
		$this->session->sess_destroy();

		redirect(base_url().'Auth');
		die();
		
	}

	public function send()
	{	

		$this->form_validation->set_rules("users_email", "E-mail", "trim|required");

		if ($this->form_validation->run() == true){

			$users_email = $this->input->post('users_email');

			$where = array('users_email' => $users_email, 'users_access_status' => 'Activated');
			$check_email = $this->crud_model->get_data("tb_backend_users",$where)->num_rows();

			if($check_email > 0){

				$data = $this->crud_model->get_data("tb_backend_users",$where)->result();

				$title = "Sanders Backend Reset Password";

				$users_name = $data[0]->users_name;
				$users_username = $data[0]->users_username;
				$date = date("Hisd");
				$id_backend_users = $data[0]->id_backend_users;

				$data_users_update = array('users_password' => sha1($date));
				$update_users = $this->crud_model->update('tb_backend_users', 'id_backend_users', $id_backend_users, $data_users_update);

				$pesan = "
					We have sent the user data and changed the password from the name : ".$users_name."
			  		Now you can login again with this data \n\n
			  		Your account \n
			  		Username : ".$users_username." \n
			  		Password : ".$date."\n\n
			  		\n\n MESSAGE NO-REPLY";

				$header = "From: sanders@sanders.co.id<no-reply@sanders.co.id>";

				mail($users_email, $title, $pesan, $header);
			
				$this->session->set_flashdata('alert_success', 'We send an email, please check your email to reset your password.');
				redirect(base_url().'Auth');
				die();

			}else{

			$this->session->set_flashdata('alert_error', 'Your email was not found !');
			redirect(base_url().'Auth/forgot_password');
		    die();
			
			}

		} else {
		    redirect(base_url().'Auth/forgot_password');
		    die();
		}
	}
}
?>