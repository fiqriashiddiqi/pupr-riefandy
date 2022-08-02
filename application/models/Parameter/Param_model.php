<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Param_model extends CI_Model {

  public function get_data($table)
  { 
    return $this->db->get($table);
    
  }

	public function get_coa()
    {   
        $this->db->select("tc.*")
          ->from("tb_param_coa tc");
    
        $this->db->order_by("tc.id_param_coa", "ASC");

        return $this->db->get()->result();

    }
    
    public function get_coa_a($id_param_coa_a = null)
    {   
        $this->db->select("tc.*")
          ->from("tb_param_coa_a tc");

        if (!empty($id_param_coa_a)){
          $this->db->where("tc.id_param_coa_a", $id_param_coa_a);
        }
    
        $this->db->order_by("tc.id_param_coa_a", "ASC");

        return $this->db->get()->result();

    }

   public function get_coa_a_list ($limit = null, $position = null)   
   {   
        $this->db->select("tc.* ")
          ->from("tb_param_coa_a tc");

      
        if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.id_param_coa_a", "ASC");

        return $this->db->get();

    }
   
    public function get_coa_b($id_param_coa_b = null)
    {   
        $this->db->select("tc.*, ta.coa_code_a, ta.coa_name_a")
          ->from("tb_param_coa_b tc");

        $this->db->join('tb_param_coa_a ta', 'tc.id_param_coa_a = ta.id_param_coa_a');

        if (!empty($id_param_coa_b)){
          $this->db->where("tc.id_param_coa_b", $id_param_coa_b);
        }

        $this->db->order_by("tc.id_param_coa_b", "ASC");

        return $this->db->get()->result();

    }
      public function get_coa_b_list($limit = null, $position = null)
    {   
        $this->db->select("tc.*, ta.coa_code_a, ta.coa_name_a")
          ->from("tb_param_coa_b tc");

        $this->db->join('tb_param_coa_a ta', 'tc.id_param_coa_a = ta.id_param_coa_a');

         if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.id_param_coa_b", "ASC");

        return $this->db->get();
    }

    public function get_dropdown_coa_b($id_param_coa_b = null)
    {   
        $this->db->select("tc.*")
          ->from("tb_param_coa_b tc");

        if (!empty($id_param_coa_b)){
          $this->db->where("tc.id_param_coa_b", $id_param_coa_b);
        }

        $this->db->order_by("tc.id_param_coa_b", "ASC");

        return $this->db->get()->result();

    }
   
    public function get_coa_c($id_param_coa_c = null)
    {   
     
       $this->db->select("tc.*, tb.coa_code_b, tb.coa_name_b")
          ->from("tb_param_coa_c tc");

        $this->db->join('tb_param_coa_b tb', 'tc.id_param_coa_b = tb.id_param_coa_b');

        if (!empty($id_param_coa_c)){
          $this->db->where("tc.id_param_coa_c", $id_param_coa_c);
        }

        $this->db->order_by("tc.id_param_coa_c", "ASC");

        return $this->db->get()->result();
    }

    public function get_coa_c_list($limit = null, $position = null)
    {   
        $this->db->select("tc.*, ta.coa_code_b, ta.coa_name_b")
          ->from("tb_param_coa_c tc");

        $this->db->join('tb_param_coa_b ta', 'tc.id_param_coa_b = ta.id_param_coa_b');

         if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.id_param_coa_c", "ASC");

        return $this->db->get();
    }

    public function get_dropdown_coa_c($id_param_coa_c = null)
    {   
     
        $this->db->select("tc.*")
          ->from("tb_param_coa_c tc");

        if (!empty($id_param_coa_c)){
          $this->db->where("tc.id_param_coa_c", $id_param_coa_c);
        }

        $this->db->order_by("tc.id_param_coa_c", "ASC");

        return $this->db->get()->result();
    }
 
    public function get_coa_d($id_param_coa_d = null)
    {   
        $this->db->select("td.*, tc.coa_code_c, tc.coa_name_c")
          ->from("tb_param_coa_d td");

        $this->db->join('tb_param_coa_c tc', 'td.id_param_coa_c = tc.id_param_coa_c');

        if (!empty($id_param_coa_d)){
          $this->db->where("td.id_param_coa_d", $id_param_coa_d);
        }

        $this->db->order_by("td.coa_code_d", "ASC");

        return $this->db->get()->result();
    }

    public function get_coa_d_list($limit = null, $position = null)
    {   
        $this->db->select("tc.*, ta.coa_code_c, ta.coa_name_c")
          ->from("tb_param_coa_d tc");

        $this->db->join('tb_param_coa_c ta', 'tc.id_param_coa_c = ta.id_param_coa_c');

         if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.coa_code_d", "ASC");

        return $this->db->get();
    }

    public function get_dropdown_coa_d($id_param_coa_d = null)
    {   
        $this->db->select("td.*")
          ->from("tb_param_coa_d td");

        if (!empty($id_param_coa_d)){
          $this->db->where("td.id_param_coa_d", $id_param_coa_d);
        }

        $this->db->order_by("td.coa_code_d", "ASC");

        return $this->db->get()->result();
    }

    public function get_coa_e($id_param_coa_e = null)
    {   
        $this->db->select("te.*, td.coa_code_d, td.coa_name_d")
          ->from("tb_param_coa_e te");

        $this->db->join('tb_param_coa_d td', 'te.id_param_coa_d = td.id_param_coa_d');

        if (!empty($id_param_coa_e)){
          $this->db->where("te.id_param_coa_e", $id_param_coa_e);
        }

        $this->db->order_by("te.coa_code_e", "ASC");

        return $this->db->get()->result();

    }

    public function get_coa_e_list($limit = null, $position = null)
    {   
        $this->db->select("tc.*, ta.coa_code_d, ta.coa_name_d")
          ->from("tb_param_coa_e tc");

        $this->db->join('tb_param_coa_d ta', 'tc.id_param_coa_d = ta.id_param_coa_d');

         if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.coa_code_e", "");

        return $this->db->get();
    }

     public function get_dropdown_coa_x($id_param_coa_e = null)
    {   
       $this->db->select("te.*")
          ->from("tb_param_coa_e te");

        if (!empty($id_param_coa_e)){
          $this->db->where("te.id_param_coa_e", $id_param_coa_e);
        }

        $this->db->order_by("te.id_param_coa_e", "ASC");

        return $this->db->get()->result();

    }

    public function get_dropdown_coa_e($id_param_coa_e = null)
    {   
       $this->db->select("te.*")
          ->from("tb_param_coa_e te");

        if (!empty($id_param_coa_e)){
          $this->db->where("te.id_param_coa_e", $id_param_coa_e);
        }

        $this->db->order_by("te.coa_code_e", "ASC");

        return $this->db->get()->result();

    }

    public function get_coa_f($id_param_coa_f = null)
    {   
        $this->db->select("tf.*, te.coa_code_e, te.coa_name_e")
          ->from("tb_param_coa_f tf");

        $this->db->join('tb_param_coa_e te', 'tf.id_param_coa_e = te.id_param_coa_e');

        if (!empty($id_param_coa_f)){
          $this->db->where("tf.id_param_coa_f", $id_param_coa_f);
        }

        $this->db->order_by("tf.id_param_coa_f", "ASC");

        return $this->db->get()->result();
    }

    public function get_dropdown_coa_f($id_param_coa_f = null)
    {   
        $this->db->select("tf.*")
          ->from("tb_param_coa_e tf");

        if (!empty($id_param_coa_f)){
          $this->db->where("tf.id_param_coa_f", $id_param_coa_f);
        }

        $this->db->order_by("tf.id_param_coa_f", "ASC");

        return $this->db->get()->result();
    }

    public function get_industry()
    {   
        $this->db->select("tc.*")
          ->from("tb_param_industry tc");

         $this->db->where("tc.industry_access_status = 'Activated'");
     

        $this->db->order_by("tc.id_param_industry", "ASC");

        return $this->db->get()->result();

    }
     public function get_entity()
    {   
        $this->db->select("tc.*")
          ->from("tb_param_type_entity tc");
     

        $this->db->order_by("tc.id_param_entity", "ASC");

        return $this->db->get()->result();

    }

    public function get_entity_business()
    {   
        $this->db->select("tc.*")
          ->from("tb_param_entity_business tc");
     

        $this->db->order_by("tc.id_param_entity_business", "ASC");

        return $this->db->get()->result();

    }

    public function get_field_business()
    {   
        $this->db->select("tc.*")
          ->from("tb_param_business_field tc");

        $this->db->where("tc.business_field_access_status = 'Activated'");

        $this->db->order_by("tc.id_param_business_field", "ASC");

        return $this->db->get()->result();

    }
    public function get_pulldown()
    {   
        $this->db->select("tc.*")
          ->from("tb_param_pulldown tc");
     

        $this->db->order_by("tc.id_param_pulldown", "ASC");

        return $this->db->get()->result();

    }

    public function get_parameter_category($id_category = null)
    {   
        $this->db->select("tc.*")
          ->from("tb_parameter_category tc");

        if (!empty($id_category)){
          $this->db->where("tc.id_category", $id_category);
        }
    
        $this->db->order_by("tc.id_category", "ASC");

        return $this->db->get()->result();

    }

   public function get_parameter_category_list ($limit = null, $position = null)   
   {   
        $this->db->select("tc.* ")
          ->from("tb_parameter_category tc");

      
        if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.id_category", "ASC");

        return $this->db->get();

    }

    public function get_parameter($id_parameter = null)
    {   
        $this->db->select("tc.*, ta.category_name")
          ->from("tb_parameter tc");

        $this->db->join('tb_parameter_category ta', 'tc.id_category = ta.id_category');

        if (!empty($id_parameter)){
          $this->db->where("tc.id_parameter", $id_parameter);
        }

        $this->db->order_by("tc.id_parameter", "ASC");

        return $this->db->get()->result();

    }

    public function get_parameter_list($limit = null, $position = null)
    {   
        $this->db->select("tc.*, ta.category_name")
          ->from("tb_parameter tc");

        $this->db->join('tb_parameter_category ta', 'tc.id_category = ta.id_category');

        if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

        $this->db->order_by("tc.id_parameter", "ASC");

        return $this->db->get();

    }

    public function get_parameter_option($id_parameter = null)
    {   
        $this->db->select("tc.* ")
        ->from("tb_parameter_option tc");

        $this->db->join('tb_parameter ta', 'tc.id_parameter = ta.id_parameter');

        if (!empty($id_parameter)){
          $this->db->where("tc.id_parameter", $id_parameter);
        }

        $this->db->order_by("tc.id_parameter", "ASC");

        return $this->db->get()->result();

    }

    public function get_parameter_by_id($id_parameter)
    {   
        $this->db->select("tam.*")
        ->from("tb_parameter tam");

        $this->db->where("tam.id_parameter", $id_parameter);

        return $this->db->get()->result();
    }

    public function get_category()
    {   
        $this->db->select("tc.*")
        ->from("tb_param_category tc");
     

        $this->db->order_by("tc.id_param_category", "ASC");

        return $this->db->get()->result();

    }
    public function get_coa_by_id($id_param_coa)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_coa tam");

        $this->db->where("tam.id_param_coa", $id_param_coa);

      return $this->db->get()->result();
    }

    public function get_industry_by_id($id_param_industry)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_industry tam");

        $this->db->where("tam.id_param_industry", $id_param_industry);

        if(!empty($name_industry)){
        $this->db->where("tam.industry_name", $name_industry);
        }

      return $this->db->get()->result();
    }

     public function get_industry_by_name($industry_name)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_industry tam");

        $this->db->where("tam.industry_name", $industry_name);

      return $this->db->get()->result();
    }

    public function get_entity_by_id($id_param_entity)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_type_entity tam");

        $this->db->where("tam.id_param_entity", $id_param_entity);

      return $this->db->get()->result();
    }

    public function get_entity_business_by_id($id_param_entity_business, $name_entity_busines = null)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_entity_business tam");

        $this->db->where("tam.id_param_entity_business", $id_param_entity_business);

        // $this->db->where("tam.entity_access_status = 'Activated'");

        if(!empty($name_entity_busines)){
        $this->db->where("tam.entity_business_name", $name_entity_busines);
        }

      return $this->db->get()->result();
    }


    public function get_field_business_by_id($id_param_business_field, $name_field_busines = null)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_business_field tam");
     
        $this->db->where("tam.id_param_business_field", $id_param_business_field);

        if(!empty($name_field_busines)){
        $this->db->where("tam.business_field_name", $name_field_busines);
        }

        return $this->db->get()->result();

    }

     public function get_pulldown_by_id($id_param_pulldown)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_pulldown tam");

        $this->db->where("tam.id_param_pulldown", $id_param_pulldown);

      return $this->db->get()->result();
    }

        public function get_category_by_id($id_param_category)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_category tam");

        $this->db->where("tam.id_param_category", $id_param_category);

      return $this->db->get()->result();
    }

     public function get_pulldown_option($id_param_pulldown)
    {   
        $this->db->select("tbsm.*")
        ->from("tb_param_pulldown_option tbsm");
        $this->db->where("tbsm.id_param_pulldown", $id_param_pulldown);
     
    return $this->db->get()->result();
    }
    
    public function get_category_option($id_param_category)
    {   
        $this->db->select("tbsm.*")
        ->from("tb_param_category_option tbsm");
        $this->db->where("tbsm.id_param_category", $id_param_category);
     
    return $this->db->get()->result();
    }

    public function get_industry_list($limit = null, $position = null, $id_param_industry = null)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_industry tam");

        if (!empty($id_param_industry)){
        $this->db->where("tam.id_param_industry", $id_param_industry);
        }

        if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

      return $this->db->get();
    }

    public function get_entity_list($limit = null, $position = null)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_type_entity tam");

        if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

      return $this->db->get();
    }
    public function get_entity_business_list($limit = null, $position = null)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_entity_business tam");

        if (!empty($limit)){
          $this->db->limit($limit, $position);
        }

      return $this->db->get();
    }


    public function get_industry_list_report($id_param_industry = null)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_industry tam");
        
        if (!empty($id_param_industry)){
        $this->db->where("tam.id_param_industry", $id_param_industry);
        }

        return $this->db->get()->result();
    }

    public function get_entity_list_report($id_param_entity= null)
    {   
        $this->db->select("tam.*")
        ->from("tb_param_type_entity tam");

        if (!empty($id_param_entity)){
        $this->db->where("tam.id_param_entity", $id_param_entity);
        }

      return $this->db->get()->result();
    }


  
}

?>