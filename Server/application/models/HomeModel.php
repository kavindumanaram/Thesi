<?php 

class HomeModel extends CI_Model{

	function __construct()
	{
	parent::__construct();
	$this->load->database("thesidevelopment ");
	}
	
	public function get_all_users(){
		$query = $this->db->get('users');
		return $query->result();
	}
}

?>