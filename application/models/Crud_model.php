<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function get_data($table, $where)
	{	
		return $this->db->get_where($table,$where);
    
	}

    public function get_data_table($table)
    {   
        return $this->db->get($table);
    
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);

    }

    public function update($table, $field, $id, $data)
    {
        $this->db->where($field, $id);
        $this->db->update($table, $data);

    }

    public function delete($table, $field, $id)
    {
        $this->db->where($field, $id);
        $this->db->delete($table);

    }

    public function deleteMany($table, $field, $id)
    {
        $this->db->where_in($field, $id);
        $this->db->delete($table);

    }

    public function get_setting()
    {   
        $this->db->select("ts.*")
          ->from("tb_backend_param_global ts");

        $this->db->order_by("ts.id_backend_param_global", "ASC");

        return $this->db->get()->result();

    }

  // public function get_setting_by_id($id_setting)
  //   {   
  //       $this->db->select("tam.*")
  //         ->from("tb_setting tam");

  //       $this->db->where("tam.id_setting", $id_setting);

  //     return $this->db->get()->result();
  //   }
	
}
?>