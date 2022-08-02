<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function get_users($access_groups, $id_backend_groups = null, $users_access_status = null)
    {   
        $this->db->select("tu.*, tg.groups_name")
          ->from("tb_backend_users tu")
          ->join("tb_backend_groups tg", "tg.id_backend_groups = tu.id_backend_groups");

        if ($access_groups == '2' OR $access_groups == '3'){
          $this->db->where("tg.id_backend_groups != 1");
        }
        
        if (!empty($id_backend_groups)){
          $this->db->where("tu.id_backend_groups", $id_backend_groups);
        }
        if (!empty($users_access_status)){
          $this->db->where("tu.users_access_status", $users_access_status);
        }

        $this->db->order_by("tu.id_backend_users", "ASC");

        return $this->db->get()->result();

    }

    // public function get_user_email()
    // {   
    //     $this->db->select("ta.users_email")
    //       ->from("tb_backend_users ta");

    //     $this->db->where("ta.id_backend_groups","7");

    // return $this->db->get()->result();
    // }

    public function get_users_list($limit = null, $position = null, $access_groups = null, $data_tempat = null)
    {   
        $this->db->select("twa.*,  tg.groups_name, tt.nama_tempat")
          ->from("tb_backend_users twa")
          ->join("tb_backend_groups tg", "tg.id_backend_groups = twa.id_backend_groups")
          ->join("tb_tempat_bayar tt", "tt.id_tempat_bayar = twa.id_tempat_bayar");

          if ($access_groups == '2' OR $access_groups == '3'){
          $this->db->where("tg.id_backend_groups != 1");
          }

          if (!empty($limit)){
          $this->db->limit($limit, $position);
          }

    return $this->db->get();
    }

    public function get_users_by_id($id_backend_users = null, $access_groups = null, $data_tempat = null)
    {   
        $this->db->select("tu.*, tg.groups_name, tt.nama_tempat")
          ->from("tb_backend_users tu")
          ->join("tb_backend_groups tg", "tg.id_backend_groups = tu.id_backend_groups")
          ->join("tb_tempat_bayar tt", "tt.id_tempat_bayar = tu.id_tempat_bayar");

        if (!empty($id_backend_users)){
          $this->db->where("tu.id_backend_users", $id_backend_users);
        }

        $this->db->order_by("tu.id_backend_users", "ASC");

        return $this->db->get()->result();

    }

    public function get_users_by_id_groups($id_backend_groups = null)
    {   
        $this->db->select("tu.*")
          ->from("tb_backend_users tu");
        $this->db->where("tu.id_backend_groups=3");
        if (!empty($id_backend_groups)){
          $this->db->where("tu.id_backend_groups", $id_backend_users);
        }

        //$this->db->order_by("tu.id_backend_users", "ASC");

        return $this->db->get()->result();

    }
}
?>