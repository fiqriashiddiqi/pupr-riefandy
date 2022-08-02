<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tempat_model extends CI_Model {

	public function get_tempat()
    {   
        $this->db->select("tb.*")
          ->from("tb_tempat_bayar tb");
          $this->db->order_by("tb.id_tempat_bayar", "ASC");

      return $this->db->get()->result();

    }

    public function get_tempat_u()
    {   
        $this->db->select("tb.*")
          ->from("tb_tempat_bayar tb");
          $this->db->where("tb.tempat_access_status" , "Activated");
          $this->db->order_by("tb.id_tempat_bayar", "ASC");

      return $this->db->get()->result();

    }

    public function get_tempat_list($limit = null, $position = null)
    {   
        $this->db->select("twa.*")
          ->from("tb_tempat_bayar twa");

           if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        return $this->db->get();
    }

    public function get_tempat_by_id($id_tempat_bayar = null)
    {   
        $this->db->select("tbm.*")
          ->from("tb_tempat_bayar tbm");

        $this->db->where("tbm.id_tempat_bayar", $id_tempat_bayar);

        return $this->db->get()->result();

    }
}
?>