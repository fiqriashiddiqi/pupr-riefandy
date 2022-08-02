<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parameter_all_model extends CI_Model {

	public function get_parameter_all()
    {   
        $this->db->select("twb.*")
          ->from("tb_parameter_all twb");
     

        if (!empty($parameter_all_access_status)){
          $this->db->where("twb.parameter_all_access_status", $parameter_all_access_status);
        }

        $this->db->order_by("twb.parameter_all_orders", "ASC");

        return $this->db->get()->result();

    }


   public function get_parameter_all_list ($limit = null, $position = null, $status = null)   
   {   
        $this->db->select("tc.* ")
          ->from("tb_parameter_all tc");

        if (!empty($status)){
          $this->db->where("tc.parameter_all_status", $status);
        }

      
        if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.id_parameter_all", "ASC");

        return $this->db->get();

    }


  public function get_parameter_all_by_id($id_parameter_all)
    {   
        $this->db->select("tf.*")
          ->from("tb_parameter_all tf");

        $this->db->where("tf.id_parameter_all", $id_parameter_all);
        // $this->db->where("tf.parameter_all_access_status", "Activated");

      return $this->db->get()->result();
    }

  public function get_dropdown_faq_category()
    {   
        $this->db->select("tf.*")
          ->from("tb_fintech_faq tf");

        $this->db->group_by("tf.category_faq");
        $this->db->order_by("tf.id_fintech_faq", "ASC");

      return $this->db->get()->result();
    }
   
    public function get_faq_by_category($category_faq = null)
    {   
        $this->db->select("tf.*")
          ->from("tb_fintech_faq tf");

        $this->db->where("tf.faq_access_status = 'Activated'");

        if (!empty($category_faq)){
          $this->db->where("tf.category_faq", $category_faq);
        }


        $this->db->order_by("tf.id_fintech_faq", "ASC");

      return $this->db->get()->result();
    }

  
  
}
?>