<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function get_access($users_username, $users_password)
  	{   
		$this->db->select("tbu.id_backend_users, tbu.users_name, tbg.groups_name, tbu.id_backend_groups, tbu.users_access_status, 
		tbu.users_last_signin, tbu.users_last_signout")
	      ->from("tb_backend_users tbu")
		  ->join("tb_backend_groups tbg", "tbg.id_backend_groups = tbu.id_backend_groups");

	    $this->db->where("tbu.users_username", $users_username);
	    $this->db->where("tbu.users_password", $users_password);

	    return $this->db->get()->result();

	  }
	  
	  public function get_tempat_bayar($users_id)
  	{   
		$this->db->select("tbu.id_backend_users, tbu.users_name, ttb.kd_tempat, ttb.nama_tempat")
	      ->from("tb_backend_users tbu")
		  ->join("tb_tempat_bayar ttb", "ttb.id_tempat_bayar = tbu.id_tempat_bayar");

	    $this->db->where("tbu.id_backend_users", $users_id);

	    return $this->db->get()->result();

  	}
}
?>