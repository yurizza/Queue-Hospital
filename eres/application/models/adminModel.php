<?php 

/**
* 
*/
class AdminModel extends CI_Model
{
	const table_name = "admin";
	function __construct()
	{
		
	}

	public function cek_login($table,$where){
		return $this->db->get_where($table, $where);
	}
	
}

?>