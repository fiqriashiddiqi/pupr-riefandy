<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function get_trx_kdbayar($kd_bayar){   
        $this->db->select("trx.*")
          ->from("tb_backend_trx trx");
          $this->db->where("trx.kd_bayar", $kd_bayar);
        return $this->db->get()->result();
    }

  public function get_param_global(){   
      $this->db->select("prm.*")
        ->from("tb_backend_param_global prm");
      return $this->db->get()->result();
  }

  public function get_inquiry($paramBit) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => GANESH_PDL_INQUIRY,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>$paramBit,
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }
  
  public function post_trx_inquiry(){
    $this->db->insert($table, $data);
  }

  // dari batas ini ke bawah adalah kode tambahan oleh laurensius dede suhardiman
  function pdl_payment_process($paramBit){
    $curl = curl_init();
    curl_setopt_array($curl, 
      array(
        CURLOPT_URL => GANESH_PDL_PAYMENT,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>$paramBit,
        // CURLOPT_HTTPHEADER => array(
        //   "Content-Type: application/json"
        // )
      )
    );

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
  }

  public function pdl_payment_print($where){
    $this->db->select('*');
    $this->db->from('tb_backend_trx');
    $this->db->join('tb_backend_wajib_pajak', 'tb_backend_trx.id_backend_wp = tb_backend_wajib_pajak.idtb_backend_wajib_pajak');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }

  public function bphtb_payment_print($where){
    $this->db->select('*');
    $this->db->from('tb_backend_trx_bphtb');
    $this->db->join('tb_backend_wajib_pajak_bphtb', 'tb_backend_trx_bphtb.id_backend_wp = tb_backend_wajib_pajak_bphtb.idtb_backend_wajib_pajak_bphtb');
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
  }


  //-----------added by laurensius-------------
  public function get_inquiry_bphtb($paramBit) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => GANESH_BPHTB_INQUIRY,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>$paramBit,
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json"
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }

  function bphtb_payment_process($paramBit){
    $curl = curl_init();
    curl_setopt_array($curl, 
      array(
        CURLOPT_URL => GANESH_BPHTB_PAYMENT,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>$paramBit,
        // CURLOPT_HTTPHEADER => array(
        //   "Content-Type: application/json"
        // )
      )
    );

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
  }
}
?>