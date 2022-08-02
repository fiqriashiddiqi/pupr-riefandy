<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_pembayaran_cetak extends CI_Controller {

	function __construct()
  	{
		parent::__construct();
   	 	$this->load->library('form_validation');
    	$this->load->model('auth_model');
    	$this->load->model('crud_model');
    	$this->load->model('Transaksi/transaksi_model');
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

	public function index(){
		$users_username = $this->session->userdata('users_username');
		$users_password = $this->session->userdata('users_password');

		$check_access = $this->auth_model->get_access($users_username, $users_password);
 		$access_groups = $check_access[0]->id_backend_groups;

        $groups_access = array(
            '1',
            '3');

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

		// $navigation['users_active'] = 'active';

		$data['title'] = "Cetak Pembayaran";
		$data['brd_title_main'] = "Cetak Pembayaran";
		$data['brd_title_url'] = site_url('Website/B_input_pembayaran_cetak');
		$data['id_backend_users'] = $check_access[0]->id_backend_users;
		$data['id_nama_tempat'] = $check_access[0]->nama_tempat;
		$data['id_kd_tempat'] = $check_access[0]->kd_tempat;
		$data['form_url'] = site_url('Petugas/B_pembayaran_cetak/inquiry_pembayaran_cetak');
		$data['jenis_pajak'] = array(
			'BPHTB',
			'Pajak Daerah'
		);
		$data['data_groups'] = $this->groups_model->get_groups($access_groups);

		$this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
		$this->form_validation->set_rules("users_access_status", "Status Akses", "trim");

		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/input-pembayaran-cetak', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function inquiry_pembayaran_cetak(){
		$inp_kd_bayar = $this->input->post('txt_kd_bayar');
		$inp_kd_bayar_bphtb = $this->input->post('txt_kd_bayar_bphtb');
		$inp_nop = $this->input->post('txt_nop');
		
		if($inp_nop == NULL){

			$data = $this->transaksi_model->pdl_payment_print(
				array(
					"tb_backend_trx.kd_bayar" => $inp_kd_bayar
				) 
			);
			if(sizeof($data) > 0){
				$data[0]->terbilang = $this->terbilang($data[0]->tagihan_pokok + $data[0]->tagihan_denda + $data[0]->admin_bank);
				$tempat_bayar = $this->auth_model->get_tempat_bayar($data[0]->id_backend_users);
				$data[0]->kd_tempat = $tempat_bayar[0]->kd_tempat;
				$data[0]->nama_tempat = $tempat_bayar[0]->nama_tempat;
			}else {
				echo "No Bayar Tidak ditemukan";
				die();
			}
			// $data->print->terbilang = $this->terbilang("123");
			$this->load->view(
				"backend-web/pdf",
				array("print" => $data)
			);
		}else{
			
			$data = $this->transaksi_model->bphtb_payment_print(
				array(
					"tb_backend_trx_bphtb.kd_bayar" => $inp_kd_bayar_bphtb,
					"tb_backend_trx_bphtb.nop" => $inp_nop
				) 
			);
			if(sizeof($data) > 0){
				$data[0]->terbilang = $this->terbilang($data[0]->tagihan_pokok + $data[0]->tagihan_denda + $data[0]->admin_bank);
				$tempat_bayar = $this->auth_model->get_tempat_bayar($data[0]->id_backend_users);
				$data[0]->kd_tempat = $tempat_bayar[0]->kd_tempat;
				$data[0]->nama_tempat = $tempat_bayar[0]->nama_tempat;
			}else {
				echo "No Bayar / NOP Tidak ditemukan";
				die();
			}
			// $data->print->terbilang = $this->terbilang("123");
			$this->load->view(
				"backend-web/pdf-bphtb",
				array("print" => $data)
			);
		}
		
	}

	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = $this->penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . $this->penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . $this->penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = $this->penyebut($nilai/1000000000000) . " trilyun" . $this->penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
	
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim($this->penyebut($nilai));
		} else {
			$hasil = trim($this->penyebut($nilai));
		}     		
		return strtoupper($hasil . " Rupiah");
	}
	function test() {
		$this->load->view(
			"backend-web/pdf-bphtb");
	}
}
?>