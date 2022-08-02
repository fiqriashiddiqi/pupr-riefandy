<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		header('Content-type:json');
		
		$this->raw_text = "";
		
		$this->KEY_PROVINSI = "PROVINSI"; 
		$this->KEY_KABUPATEN = "KABUPATEN";
		$this->KEY_NIK = "NIK";
		$this->KEY_NAMA = "Nama";
		$this->KEY_TTL = "Tempat/Tgl Lahir";
		$this->KEY_JK = "Jenis Kelamin";
		$this->KEY_GOLDARAH = "Gol. Darah";
		$this->KEY_ALAMAT = "Alamat";
		$this->KEY_RTRW = "RT/RW";
		$this->KEY_KELDES = "Kel/Desa";
		$this->KEY_KEC = "Kecamatan";
		$this->KEY_AGAMA = "Agama";
		$this->KEY_STATUS = "Status Perkawinan";
		$this->KEY_PEKERJAAN = "Pekerjaan";
		$this->KEY_KEWARGAAN = "Kewarganegaraan";
		$this->KEY_MASABERLAKU = "Berlaku Hingga";

		$this->ARRAY_KEY = array(
			$this->KEY_PROVINSI, 
			$this->KEY_KABUPATEN,
			$this->KEY_NIK,
			$this->KEY_NAMA,
			$this->KEY_TTL,
			$this->KEY_JK,
			$this->KEY_GOLDARAH,
			$this->KEY_ALAMAT,
			$this->KEY_RTRW,
			$this->KEY_KELDES,
			$this->KEY_KEC,
			$this->KEY_AGAMA,
			$this->KEY_STATUS,
			$this->KEY_PEKERJAAN,
			$this->KEY_KEWARGAAN,
			$this->KEY_MASABERLAKU
		);
		

		$this->ARRAY_AGAMA = array("ISLAM","KATHOLIK","KRISTEN","BUDHA","HINDU");
		$this->SEARCH_AGAMA = false;
		$this->ARRAY_STATUS = array("KAWIN","BELUM KAWIN","CERAI MATI","CERAI HIDUP","TIDAK KAWIN");
		$this->SEARCH_STATUS = false;
	}


	public function do_upload(){
		if($this->input->post()!=null){
			$config['upload_path'] = './image_dir/';
			$config['allowed_types'] = 'jpg|jpeg|png|bmp';
			$config['max_size']	= '10240';
			$config['overwrite'] = 'true';
			$config['encrypt_name'] = 'true';  
			$config['remove_spaces'] = 'true';  
			$config['file_name'] = date("YmdHis");  
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('lender_id_picture')){ 
				$response = array(
					"message_severity" => "warning",
					"message" => "Penyimpanan gambar gagal"
				);
			}else{ 
				$detail = $this->upload->data();
				$nama_lampiran = $detail["orig_name"];
				$response = array(
					"message_severity" => "success",
					"message" => "Penyimpanan gambar berhasil",
					"nama_lampiran" => $nama_lampiran
				);
			}
		}else{
			$response = array(
				"message_severity" => "warning",
				"message" => "Tidak ada gambar dikirim ke sever"
			);
		}
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	public function do_upload_borrower(){
		if($this->input->post()!=null){
			$config['upload_path'] = './image_dir/';
			$config['allowed_types'] = 'jpg|jpeg|png|bmp';
			$config['max_size']	= '10240';
			$config['overwrite'] = 'true';
			$config['encrypt_name'] = 'true';  
			$config['remove_spaces'] = 'true';  
			$config['file_name'] = date("YmdHis");  
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('borrower_id_picture')){ 
				$response = array(
					"message_severity" => "warning",
					"message" => "Penyimpanan gambar gagal"
				);
			}else{ 
				$detail = $this->upload->data();
				$nama_lampiran = $detail["orig_name"];
				$response = array(
					"message_severity" => "success",
					"message" => "Penyimpanan gambar berhasil",
					"nama_lampiran" => $nama_lampiran
				);
			}
		}else{
			$response = array(
				"message_severity" => "warning",
				"message" => "Tidak ada gambar dikirim ke sever"
			);
		}
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	public function do_ocr(){
		require_once APPPATH.'libraries\tesseract\vendor\autoload.php';
		require_once APPPATH.'libraries\tesseract\vendor\thiagoalessio\tesseract_ocr\src\TesseractOCR.php';
		$filepath = FCPATH."image_dir\\".$this->uri->segment(3);
		$tesseractInstance = new TesseractOCR($filepath);
		$tesseractInstance->psm(1);
		$this->raw_text = $tesseractInstance->run();
		//parsing data ke array string
		$data["raw_text"] = $this->raw_text;
		$master_cek = array(
			$this->provinsi(),
			$this->kabupaten(),
			$this->nik(),
			$this->nama(),
			$this->ttl(),
			$this->jk(),
			$this->goldarah(),
			$this->alamat(),
			$this->rtrw(),
			$this->keldes(),
			$this->kec(),
			$this->agama(),
			$this->status(),
			$this->pekerjaan(),
			$this->kewargaan(),
			$this->masaberlaku()
		);
		$data["ktp"] = $this->parsing($master_cek);
		//--end of parsing
		if($this->raw_text == ""){
			$response = array(
				"message_severity" => "warning",
				"message" => "Tidak ada hasil",
				"data" => array()
			);
		}else{
			$response = array(
				"message_severity" => "success",
				"message" => $this->raw_text,
				"data" => $data
			);
		}
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	public function do_save_edit(){
		define('UPLOAD_DIR', 'image_dir/');

		$original_name = $this->input->post('original_name');
		$img = $this->input->post('image');
		//echo $img;
		$img = str_replace('data:image/png;base64,', '', $img);
		$data = base64_decode($img);
		$file = UPLOAD_DIR . $original_name . '.png';
		$success = file_put_contents($file, $data);
		if($success){
			$response = array(
				"message_severity" => "success",
				"message" => "simpan hasil brightness OK",
				"image_name" =>  $original_name.".png"
			);
		}else{
			$response = array(
				"message_severity" => "warning",
				"message" => "simpan hasil brightness NOT OK",
				"image_name" => ""
			);
		}
		echo json_encode($response,JSON_PRETTY_PRINT);
	}



	//OCR Parsing
	function cek_parameter($raw_text, $param){
		if (strpos($raw_text, $param) !== false) {
			return true;
		}
		return false;
	}

	function provinsi(){
		if($this->cek_parameter($this->raw_text,$this->KEY_PROVINSI)){
			$exp = explode($this->KEY_PROVINSI,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function kabupaten(){
		if($this->cek_parameter($this->raw_text,$this->KEY_KABUPATEN)){
			$exp = explode($this->KEY_KABUPATEN,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function nik(){
		if($this->cek_parameter($this->raw_text,$this->KEY_NIK)){
			$exp = explode($this->KEY_NIK,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function nama(){
		if($this->cek_parameter($this->raw_text,$this->KEY_NAMA)){
			$exp = explode($this->KEY_NAMA,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function ttl(){
		if($this->cek_parameter($this->raw_text,$this->KEY_TTL)){
			$exp = explode($this->KEY_TTL,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function jk(){
		if($this->cek_parameter($this->raw_text,$this->KEY_JK)){
			$exp = explode($this->KEY_JK,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function goldarah(){
		if($this->cek_parameter($this->raw_text,$this->KEY_GOLDARAH)){
			$exp = explode($this->KEY_GOLDARAH,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function alamat(){
		if($this->cek_parameter($this->raw_text,$this->KEY_ALAMAT)){
			$exp = explode($this->KEY_ALAMAT,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function rtrw(){
		if($this->cek_parameter($this->raw_text,$this->KEY_RTRW)){
			$exp = explode($this->KEY_RTRW,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function keldes(){
		if($this->cek_parameter($this->raw_text,$this->KEY_KELDES)){
			$exp = explode($this->KEY_KELDES,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function kec(){
		if($this->cek_parameter($this->raw_text,$this->KEY_KEC)){
			$exp = explode($this->KEY_KEC,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function agama(){
		if($this->cek_parameter($this->raw_text,$this->KEY_AGAMA)){
			$exp = explode($this->KEY_AGAMA,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function status(){
		if($this->cek_parameter($this->raw_text,$this->KEY_STATUS)){
			$exp = explode($this->KEY_STATUS,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function pekerjaan(){
		if($this->cek_parameter($this->raw_text,$this->KEY_PEKERJAAN)){
			$exp = explode($this->KEY_PEKERJAAN,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function kewargaan(){
		if($this->cek_parameter($this->raw_text,$this->KEY_KEWARGAAN)){
			$exp = explode($this->KEY_KEWARGAAN,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function masaberlaku(){
		if($this->cek_parameter($this->raw_text,$this->KEY_MASABERLAKU)){
			$exp = explode($this->KEY_MASABERLAKU,$this->raw_text);
			$return = array("found" => "true", "kiri" => $exp[0],"kanan" => $exp[1]);
		}else{
			$return = array("found" => "false", "kiri" => "null","kanan" => "null");
		}
		return $return;
	}

	function parsing($master_cek){
		for($counter_check = 0;$counter_check < sizeof($this->ARRAY_KEY); $counter_check++){
			if($master_cek[$counter_check]["found"] && $master_cek[$counter_check]["kanan"] != ""){
				$match = false;
				$ctr = $counter_check;
				while(!$match && ($ctr < sizeof($this->ARRAY_KEY))){
					if($this->cek_parameter($master_cek[$counter_check]["kanan"],$this->ARRAY_KEY[$ctr])){
						$match = true;
						$exp = explode($this->ARRAY_KEY[$ctr],$master_cek[$counter_check]["kanan"]); 
						$hasil = preg_replace('~[\r\n]+~', ' ', $exp[0]);;
						$return[$this->ARRAY_KEY[$counter_check]] = $hasil;
					}else{
						$return[$this->ARRAY_KEY[$counter_check]] = "";
					}
					$ctr++;
				}
			}else{
				$return[$this->ARRAY_KEY[$counter_check]] = "";
			}
		}
		return $return;
	}

	// function json_rpc_header($userid, $password){
	// 	date_default_timezone_set("UTC");
	// 	$inttime     = strval(time()-strtotime("1970-01-01 00:00:00"));
	// 	$value       = "admin&" . $inttime;
	// 	$key         = $password;
	// 	$signature   = hash_hmac("sha256", $value, $key, true);
	// 	$signature64 = base64_encode($signature);
	// 	headers      = {"userid": userid, "signature": $signature64, "key": $inttime};
	// 	return headers;
	// }
}
?>