<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Groups_model extends CI_Model {

    public function get_groups($id_backend_groups = null)
    {   
        $this->db->select("tbg.*")
          ->from("tb_backend_groups tbg");
        
        if ($id_backend_groups != '1'){
        $this->db->where("tbg.id_backend_groups != 1");
        }

    return $this->db->get()->result();
    }

    public function get_group_list($limit = null, $position = null)
    {   
        $this->db->select("twa.*")
          ->from("tb_backend_groups twa");

           if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

    return $this->db->get();
    }

    public function groups_rules()
    {   
        $this->db->select("tbm.*")
          ->from("tb_backend_menus tbm");
        $this->db->where("tbm.menus_access_status" , "Activated");
        $this->db->order_by("tbm.menus_orders" , "ASC");

    return $this->db->get()->result();
    }

    public function get_menus()
    {   
        $this->db->select("tbm.*")
          ->from("tb_backend_menus tbm");
          $this->db->order_by("tbm.menus_orders", "ASC");

    return $this->db->get()->result();
    }

    public function get_submenus($id_menus)
    {   
        $this->db->select("tbsm.*")
          ->from("tb_backend_submenus tbsm");
        $this->db->where("tbsm.id_backend_menus", $id_menus);
        $this->db->where("tbsm.submenus_access_status" , "Activated");
        $this->db->order_by("tbsm.submenus_orders" , "ASC");

    return $this->db->get()->result();
    }

    public function get_submenus_all($id_menus)
    {   
        $this->db->select("tbsm.*")
          ->from("tb_backend_submenus tbsm");
        $this->db->where("tbsm.id_backend_menus", $id_menus);
        $this->db->order_by("tbsm.id_backend_submenus" , "ASC");

    return $this->db->get()->result();
    }

    public function get_menus_by_submenus_status()
    {   
        $this->db->select("tbm.*")
          ->from("tb_backend_menus tbm");
        $this->db->where("tbm.menus_submenus_status", "Yes");
        $this->db->order_by("tbm.id_backend_menus" , "ASC");

    return $this->db->get()->result();
    }
}
?>