<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_model extends CI_Model {


  public function get_data($table)
  { 
    return $this->db->get($table);
    
  }

    public function sum_laporan_by_kd_bayar($kd_bayar = null, $start_date = null, $end_date = null)
    {   
        $this->db->select('tc.kd_bayar, SUM(tc.tagihan_pokok) AS pokok, SUM(tc.tagihan_denda) AS denda, SUM(tc.admin_bank) AS admin')
                 ->from("tb_backend_trx tc");

        //$this->db->where("tc.status = 'true'");

        if (!empty($kd_bayar)){
          $this->db->where("tc.kd_bayar", $kd_bayar);
        }

        if (!empty($start_date)){
          $this->db->where('tc.updated_date >=', $start_date);
        }
        if (!empty($end_date)){
          $this->db->where('tc.updated_date <=', $end_date);
        }
        
        return $this->db->get()->result();
    }

    public function get_report_list()
    {   
        $this->db->select("tc.*")
          ->from("tb_backend_trx tc");

        $this->db->order_by("tc.id_backend_trx", "ASC");

        return $this->db->get();

    }

    public function get_laporan_list_report($id_backend_trx=null, $start_date=null,$end_date=null)
    {   
        $this->db->select("tc.*")
          ->from("tb_backend_trx tc");

        $this->db->where("tc.status = 'true'");
        if (!empty($id_backend_trx)){
        $this->db->where("tc.id_backend_trx", $id_backend_trx);
        }
         if (!empty($start_date)){
          $this->db->where("tc.updated_date >= '$start_date'" );
        }

         if (!empty($end_date)){
          $this->db->where("tc.updated_date <= '$end_date'");
        }
        //$this->db->group_by("tc.id_backend_users");
      
        $this->db->order_by("tc.id_backend_trx", "DESC");

        return $this->db->get()->result();

    }  

    public function get_laporan_list_report_admin($id_backend_trx=null, $id_backend_users=null,$start_date=null,$end_date=null)
    {   
        $this->db->select("tc.*, tt.users_name, twp.nama_rekening")
          ->from("tb_backend_trx tc")
          ->join("tb_backend_users tt", "tt.id_backend_users = tc.id_backend_users")
          ->join("tb_backend_wajib_pajak twp", "twp.idtb_backend_wajib_pajak = tc.id_backend_wp");
        $this->db->where("tc.status = 'true'");

        if (!empty($id_backend_trx)){
        $this->db->where("tc.id_backend_trx", $id_backend_trx);
        }

        if (!empty($id_backend_users)){
          $this->db->where("tc.id_backend_users", $id_backend_users);
        }
         if (!empty($start_date)){
          $this->db->where("tc.updated_date >= '$start_date'" );
        }

         if (!empty($end_date)){
          $this->db->where("tc.updated_date <= '$end_date'");
        }
        //$this->db->group_by("tc.id_backend_users");
      
        $this->db->order_by("tc.id_backend_trx", "DESC");

        return $this->db->get()->result();

    }

    public function get_laporan_by_id_users($id_backend_trx=null, $id_backend_users=null)
    {   
        $this->db->select("tc.*, tt.users_name")
          ->from("tb_backend_trx tc")
          ->join("tb_backend_users tt", "tt.id_backend_users = tc.id_backend_users");
        $this->db->where("tc.status = 'true'");

        if (!empty($id_backend_trx)){
        $this->db->where("tc.id_backend_trx", $id_backend_trx);
        }

        if (!empty($id_backend_users)){
          $this->db->where("tc.id_backend_users", $id_backend_users);
        }
         
        $this->db->group_by("tc.id_backend_users");
      
        //$this->db->order_by("tc.id_backend_trx", "DESC");

        return $this->db->get()->result();

    }   
}   
?>