<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Business_model extends CI_Model {

	public function get_target()
    {   
        $this->db->select("twb.*")
          ->from("tb_business_plan_asumption twb");

        return $this->db->get()->result();

    }

    public function get_target_id($id_asumption)
    {   
        $this->db->select("twb.*")
          ->from("tb_business_plan_asumption twb");

        $this->db->where("twb.id_asumption", $id_asumption);

        return $this->db->get()->result();

    }

    public function get_wages($where = array(), $array = false, $column = '')
    {   
        $this->db->select("twb.*")
          ->from("tb_business_plan_wages twb");

        if (!empty($where)) {
          if ($array) {
            $this->db->where_in($column, $where);
          } else {
            $this->db->where($where);
          }
        }

        return $this->db->get()->result();

    }

    public function get_wages_by_id($id_wages)
    {   
        $this->db->select("twb.*")
          ->from("tb_business_plan_wages twb");

        $this->db->where("twb.id_wages", $id_wages);

        return $this->db->get()->result();

    }

    public function get_score_list($limit = null, $position = null)
    {   
        $this->db->select("twb.*")
          ->from("tb_param_score twb");
     
          if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("twb.id_score", "ASC");

        return $this->db->get();

    }

    public function get_score_by_id($id_score)
    {   
        $this->db->select("tf.*")
          ->from("tb_param_score tf");

        $this->db->where("tf.id_score", $id_score);

      return $this->db->get()->result();
    }

    public function get_cost()
    {   
        $this->db->select("twb.*")
          ->from("tb_business_plan_cost twb");

        return $this->db->get()->result();

    }
  
}
?>