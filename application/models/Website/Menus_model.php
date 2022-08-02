<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menus_model extends CI_Model {

    public function get_menus()
    {   
        $this->db->select("ta.*")
          ->from("tb_backend_menus ta");
          $this->db->order_by("ta.menus_orders", "ASC");

    return $this->db->get()->result();
    }

    public function get_menus_list($limit = null, $position = null)
    {   
        $this->db->select("twa.*")
          ->from("tb_backend_menus twa");

           if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

    return $this->db->get();
    }

    public function get_menus_front()
    {   
        $this->db->select("tam.*")
          ->from("tb_backend_menus tam");

        $this->db->where("tam.menus_access_status", "Activated");
        $this->db->order_by("tam.id_backend_menus", "ASC");

    return $this->db->get()->result();
    }

    public function get_menus_by_id($id_backend_menus)
    {   
        $this->db->select("tbm.*")
          ->from("tb_backend_menus tbm");

        $this->db->where("tbm.id_backend_menus", $id_backend_menus);

    return $this->db->get()->result();
    }

    public function get_submenus_by_id($id_backend_submenus)
    {   
        $this->db->select("tbm.*")
          ->from("tb_backend_submenus tbm");

        $this->db->where("tbm.id_backend_submenus", $id_backend_submenus);

    return $this->db->get()->result();
    }

}
?>