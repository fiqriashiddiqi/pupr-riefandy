<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_pembayaran extends CI_Controller {

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

		$data['title'] = "Input Pembayaran";
		$data['brd_title_main'] = "Input Pembayaran";
		$data['brd_title_url'] = site_url('Website/B_input_pembayaran');
		$data['id_backend_users'] = $check_access[0]->id_backend_users;
		$data['id_nama_tempat'] = $check_access[0]->nama_tempat;
		$data['id_kd_tempat'] = $check_access[0]->kd_tempat;
		$data['jenis_pajak'] = array(
			'BPHTB',
			'Pajak Daerah'
		);
		$data['form_url'] = site_url('Petugas/B_pembayaran/inquiry_pembayaran');

		$data['data_groups'] = $this->groups_model->get_groups($access_groups);

		$this->form_validation->set_rules("id_backend_groups", "Hak Akses", "trim");
		$this->form_validation->set_rules("users_access_status", "Status Akses", "trim");

		$this->load->view('backend-web/partial/metadata');
		$this->load->view('backend-web/partial/header', $header);
		$this->load->view('backend-web/partial/navigation', $navigation);
		$this->load->view('backend-web/root/input-pembayaran', $data);
		$this->load->view('backend-web/partial/footer');

	}

	public function inquiry_pembayaran(){
		function randomNumber($length) {
			$result = '';
		
			for($i = 0; $i < $length; $i++) {
				$result .= mt_rand(0, 9);
			}
		
			return $result;
		}
		$id_backend_users = $this->input->post('id_backend_users');
		$inp_kd_bayar = $this->input->post('kd_pembayaran');
		$param_global = $this->transaksi_model->get_param_global();
		$obj = new stdClass();
		$obj->mti = "0200";

		$data[0]['bit']="3";
		$data[0]['value']=$param_global[0]->processing_code;

		$data[1]['bit']="7";
		$data[1]['value']=date("dmyhs");

		$data[2]['bit']="11";
		$data[2]['value']=date("dmy");

		$data[3]['bit']="12";
		$data[3]['value']=date("hms");

		$data[4]['bit']="13";
		$data[4]['value']=date("md");

		$data[5]['bit']="15";
		$data[5]['value']=date("dm");

		$data[6]['bit']="18";
		$data[6]['value']=$param_global[0]->merchant_type;

		$data[7]['bit']="22";
		$data[7]['value']=$param_global[0]->pos_entry_code;

		$data[8]['bit']="32";
		$data[8]['value']=$param_global[0]->acquiring_code;

		$data[9]['bit']="33";
		$data[9]['value']=$param_global[0]->forwading_code;

		$data[11]['bit']="37";
		$data[11]['value']=randomNumber(12); 

		$data[12]['bit']="41";
		$data[12]['value']=randomNumber(8);

		$data[13]['bit']="42";
		$data[13]['value']=randomNumber(15);

		$data[14]['bit']="43";
		$data[14]['value']=$param_global[0]->card_name;

		$data[15]['bit']="61";
		$data[15]['value']=$inp_kd_bayar;

		$obj->bitmap = $data;
		// $paramBit = "{\n    \"mti\" : \"0200\",\n    \"bitmap\" : [\n        {\"bit\" : \"3\",\"value\" : \"300001\"},\n        {\"bit\" : \"7\",\"value\" : \"1012220000\"},\n        {\"bit\" : \"11\",\"value\" : \"000000\"},\n        {\"bit\" : \"12\",\"value\" : \"210600\"},\n        {\"bit\" : \"13\",\"value\" : \"1013\"},\n        {\"bit\" : \"15\",\"value\" : \"1013\"},\n        {\"bit\" : \"18\",\"value\" : \"6010\"},\n        {\"bit\" : \"22\",\"value\" : \"021\"},\n        {\"bit\" : \"32\",\"value\" : \"110\"},\n        {\"bit\" : \"33\",\"value\" : \"00110\"},\n        {\"bit\" : \"37\",\"value\" : \"000000000001\"},\n        {\"bit\" : \"41\",\"value\" : \"00000000\"},\n        {\"bit\" : \"42\",\"value\" : \"000000000000000\"},\n        {\"bit\" : \"43\",\"value\" : \"622011000000000000\"},\n        {\"bit\" : \"61\",\"value\" : \"3211202055896\"}\n    ]\n}";
		$data_hasil_inquiry = $this->transaksi_model->get_inquiry(json_encode($obj));
		echo $data_hasil_inquiry;
	}

	// dari batas ini ke bawah adalah kode tambahan oleh laurensius dede suhardiman
	public function pdl_payment_process(){
		$req = file_get_contents("php://input");
		$json = json_decode($req);
				
		$param_global = $this->transaksi_model->get_param_global();

		$obj = new stdClass();
		$obj->mti = "0200";

		$data[0]['bit']="2";
		$data[0]['value']="0031260208360"; 	

		$data[1]['bit']="3";
		$data[1]['value']=$param_global[0]->proc_code_pdl_payment; 		  //500001 

		$data[2]['bit']="4";
		$data[2]['value']= str_pad($json->amount, 12, '0', STR_PAD_LEFT); //balikan dari response utk total (jml digit 12)

		$data[3]['bit']="7";
		$data[3]['value']=date("mdhis");

		$data[4]['bit']="11";
		$data[4]['value']=date("dmy");

		$data[5]['bit']="12";
		$data[5]['value']=date("hms");

		$data[6]['bit']="13";
		$data[6]['value']=date("md");

		$data[7]['bit']="15";
		$data[7]['value']=date("md");

		$data[8]['bit']="18";
		$data[8]['value']=$param_global[0]->merchant_type;

		$data[9]['bit']="22";
		$data[9]['value']=$param_global[0]->pos_entry_code;

		$data[10]['bit']="32";
		$data[10]['value']=$param_global[0]->acquiring_code;

		$data[11]['bit']="33";
		$data[11]['value']=$param_global[0]->forwading_code;

		$data[12]['bit']="35";
		$data[12]['value']="                                     ";

		$data[13]['bit']="37";
		$data[13]['value']=$json->nomor_squence_ntb; 

		$data[14]['bit']="41";
		$data[14]['value']=$json->terminal_identification_number; 

		$data[15]['bit']="42";
		$data[15]['value']=$json->terminal_name_or_user_identification; 

		$data[16]['bit']="43";
		$data[16]['value']= $param_global[0]->card_name;

		$data[17]['bit']="48";
		$data[17]['value']= date("Ymd").$json->nomor_squence_ntb; 

		$data[18]['bit']="59";
		$data[18]['value']=$param_global[0]->add_data_pay;

		$data[19]['bit']="61";
		$data[19]['value']= $json->kd_pembayaran;

		$obj->bitmap = $data;
		
		// echo json_encode($obj);
		// die();
		$this->transaksi_model->pdl_payment_process(json_encode($obj));
	}

	public function pdl_payment_save(){
		$req = file_get_contents("php://input");
		$json = json_decode($req);
		if($json != NULL){
			$x = $this->crud_model->insert("tb_backend_wajib_pajak",(array)$json->wajib_pajak);
			$y = $this->crud_model->insert("tb_backend_trx",(array)$json->transaksi);
			header("Content-type:application/json");
			echo json_encode(
				array(
					"code" => "00",
					"message" => "Simpan data berhasil",
					"body" => NULL
				),JSON_PRETTY_PRINT
			);
			
		}else{
			header("Content-type:application/json");
			echo json_encode(
				array(
					"code" => "500",
					"message" => "Parameter request tidak lengkap",
					"body" => NULL
				),JSON_PRETTY_PRINT
			);
		}
	}

	public function pdl_payment_print($generatedID=NULL){
		if(isset($generatedID)){
			$data = $this->transaksi_model->pdl_payment_print(
				array(
					"tb_backend_trx.id_backend_wp" => $generatedID
				) 
			);
			
			if(sizeof($data) > 0){
				$data[0]->terbilang = $this->terbilang($data[0]->tagihan_pokok + $data[0]->tagihan_denda + $data[0]->admin_bank);
				$tempat_bayar = $this->auth_model->get_tempat_bayar($data[0]->id_backend_users);
				$data[0]->kd_tempat = $tempat_bayar[0]->kd_tempat;
				$data[0]->nama_tempat = $tempat_bayar[0]->nama_tempat;
			}else {
				alert("No Bayar Tidak ditemukan");
				die();
			}
			// $data->print->terbilang = $this->terbilang("123");
			$this->load->view(
				"backend-web/pdf",
				array("print" => $data)
			);
		}
		
	}

	public function bphtb_payment_print($generatedID=NULL){
		if(isset($generatedID)){
			$data = $this->transaksi_model->bphtb_payment_print(
				array(
					"tb_backend_trx_bphtb.id_backend_wp" => $generatedID
				) 
			);
			
			if(sizeof($data) > 0){
				$data[0]->terbilang = $this->terbilang($data[0]->tagihan_pokok + $data[0]->tagihan_denda);
				$tempat_bayar = $this->auth_model->get_tempat_bayar($data[0]->id_backend_users);
				$data[0]->kd_tempat = $tempat_bayar[0]->kd_tempat;
				$data[0]->nama_tempat = $tempat_bayar[0]->nama_tempat;
			}else {
				alert("No Bayar Tidak ditemukan");
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


	//-------------------added by laurensius------------------
	public function inquiry_pembayaran_bphtb(){
		function randomNumber($length) {
			$result = '';
		
			for($i = 0; $i < $length; $i++) {
				$result .= mt_rand(0, 9);
			}
		
			return $result;
		}
		$id_backend_users = $this->input->post('id_backend_users');
		$inp_kd_bayar = $this->input->post('kd_pembayaran');
		$inp_kd_nop = $this->input->post('kd_nop');
		$param_global = $this->transaksi_model->get_param_global();
		$obj = new stdClass();
		$obj->mti = "0200";

		$data[0]['bit']="2";
		$data[0]['value']="0031260208360";

		$data[1]['bit']="3";
		$data[1]['value']="341066";

		$data[2]['bit']="7";
		$data[2]['value']=date("dmyhs");

		$data[3]['bit']="11";
		$data[3]['value']=date("dmy");

		$data[4]['bit']="12";
		$data[4]['value']=date("hms");

		$data[5]['bit']="13";
		$data[5]['value']=date("md");

		$data[6]['bit']="15";
		$data[6]['value']=date("md");

		$data[7]['bit']="18";
		$data[7]['value']=$param_global[0]->merchant_type;

		$data[8]['bit']="22";
		$data[8]['value']=$param_global[0]->pos_entry_code;

		$data[9]['bit']="32";
		$data[9]['value']=$param_global[0]->acquiring_code;

		$data[10]['bit']="33";
		$data[10]['value']=$param_global[0]->forwading_code;

		$data[11]['bit']="35";
		$data[11]['value']="                                     ";

		$data[12]['bit']="37";
		$data[12]['value']=randomNumber(12); 

		$data[13]['bit']="41";
		$data[13]['value']=randomNumber(8);

		$data[14]['bit']="42";
		$data[14]['value']=randomNumber(15);

		$data[15]['bit']="43";
		$data[15]['value']=$param_global[0]->card_name;

		$data[16]['bit']="49";
		$data[16]['value']="IDR";

		$data[17]['bit']="59";
		$data[17]['value']=$param_global[0]->add_data_pay;

		$data[18]['bit']="61";
		$data[18]['value']=$inp_kd_nop;

		$data[19]['bit']="62";
		$data[19]['value']=$inp_kd_bayar;

		$data[20]['bit']="102";
		$data[20]['value']="0031260208360";

		$data[21]['bit']="107";
		$data[21]['value']="0031G788";

		$obj->bitmap = $data;
		// $paramBit = "{\n    \"mti\" : \"0200\",\n    \"bitmap\" : [\n        {\"bit\" : \"3\",\"value\" : \"300001\"},\n        {\"bit\" : \"7\",\"value\" : \"1012220000\"},\n        {\"bit\" : \"11\",\"value\" : \"000000\"},\n        {\"bit\" : \"12\",\"value\" : \"210600\"},\n        {\"bit\" : \"13\",\"value\" : \"1013\"},\n        {\"bit\" : \"15\",\"value\" : \"1013\"},\n        {\"bit\" : \"18\",\"value\" : \"6010\"},\n        {\"bit\" : \"22\",\"value\" : \"021\"},\n        {\"bit\" : \"32\",\"value\" : \"110\"},\n        {\"bit\" : \"33\",\"value\" : \"00110\"},\n        {\"bit\" : \"37\",\"value\" : \"000000000001\"},\n        {\"bit\" : \"41\",\"value\" : \"00000000\"},\n        {\"bit\" : \"42\",\"value\" : \"000000000000000\"},\n        {\"bit\" : \"43\",\"value\" : \"622011000000000000\"},\n        {\"bit\" : \"61\",\"value\" : \"3211202055896\"}\n    ]\n}";
		$data_hasil_inquiry = $this->transaksi_model->get_inquiry_bphtb(json_encode($obj));
		echo $data_hasil_inquiry;
	}

	public function bphtb_payment_process(){
		$req = file_get_contents("php://input");
		$json = json_decode($req);
		$param_global = $this->transaksi_model->get_param_global();

		$obj = new stdClass();
		$obj->mti = "0200";

		$data[0]['bit']="2";
		$data[0]['value']="0031260208360";

		$data[1]['bit']="3";
		$data[1]['value']="541066";

		$data[2]['bit']="4";
		$data[2]['value']=$json->amount;

		$data[3]['bit']="7";
		$data[3]['value']=date("dmyhs");

		$data[4]['bit']="11";
		$data[4]['value']=date("dmy");

		$data[5]['bit']="12";
		$data[5]['value']=date("hms");

		$data[6]['bit']="13";
		$data[6]['value']=date("md");

		$data[7]['bit']="15";
		$data[7]['value']=date("md");

		$data[8]['bit']="18";
		$data[8]['value']=$param_global[0]->merchant_type;

		$data[9]['bit']="22";
		$data[9]['value']=$param_global[0]->pos_entry_code;

		$data[10]['bit']="32";
		$data[10]['value']=$param_global[0]->acquiring_code;

		$data[11]['bit']="33";
		$data[11]['value']=$param_global[0]->forwading_code;

		$data[12]['bit']="35";
		$data[12]['value']="                                     ";

		$data[13]['bit']="37";
		$data[13]['value']=$json->ntb; 

		$data[14]['bit']="41";
		$data[14]['value']=$json->terminal_identification_number;

		$data[15]['bit']="42";
		$data[15]['value']=$json->terminal_name_or_user_identification;

		$data[16]['bit']="43";
		$data[16]['value']=$param_global[0]->card_name;

		$data[17]['bit']="49";
		$data[17]['value']="IDR";

		$data[18]['bit']="58";
		$data[18]['value']=$json->ntb; 

		$data[19]['bit']="59";
		$data[19]['value']=$param_global[0]->add_data_pay;

		$data[20]['bit']="61";
		$data[20]['value']=$json->nop;

		$data[21]['bit']="62";
		$data[21]['value']=$json->kd_pembayaran;

		$data[22]['bit']="102";
		$data[22]['value']="0031260208360";

		$data[23]['bit']="107";
		$data[23]['value']="0031G788";

		$obj->bitmap = $data;
	
		$this->transaksi_model->bphtb_payment_process(json_encode($obj));
	}

	public function bphtb_payment_save(){
		$req = file_get_contents("php://input");
		$json = json_decode($req);
		if($json != NULL){
			$x = $this->crud_model->insert("tb_backend_wajib_pajak_bphtb",(array)$json->wajib_pajak);
			$y = $this->crud_model->insert("tb_backend_trx_bphtb",(array)$json->transaksi);
			header("Content-type:application/json");
			echo json_encode(
				array(
					"code" => "00",
					"message" => "Simpan data berhasil",
					"body" => NULL
				),JSON_PRETTY_PRINT
			);
			
		}else{
			header("Content-type:application/json");
			echo json_encode(
				array(
					"code" => "500",
					"message" => "Parameter request tidak lengkap",
					"body" => NULL
				),JSON_PRETTY_PRINT
			);
		}
	}

}
?>