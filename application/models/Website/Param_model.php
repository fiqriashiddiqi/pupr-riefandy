<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Param_model extends CI_Model {

	public function get_param()
    {   
        $this->db->select("tb.*")
          ->from("tb_backend_param_global tb");
          $this->db->order_by("tb.id_backend_param_global", "ASC");

      return $this->db->get()->result();

    }

    // public function get_user_email()
    // {   
    //     $this->db->select("ta.tempat_email")
    //       ->from("tb_backend_tempat ta");

    //     $this->db->where("ta.id_backend_groups","7");

    // return $this->db->get()->result();
    // }

    public function get_param_list($limit = null, $position = null)
    {   
        $this->db->select("twa.*")
          ->from("tb_backend_param_global twa");

           if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        return $this->db->get();
    }

    public function get_param_by_id($id_backend_param_global = null)
    {   
        $this->db->select("tbm.*")
          ->from("tb_backend_param_global tbm");

        $this->db->where("tbm.id_backend_param_global", $id_backend_param_global);

        return $this->db->get()->result();

    }
}
?>