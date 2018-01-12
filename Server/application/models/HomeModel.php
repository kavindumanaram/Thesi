<?php 

class HomeModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getData(){
		$query = $this->db->get('thesidevelopment');
		return $query->result();
	}

	public function get_all_users()
	{
		$query=$this->db->get('users');
		return $query->result();
	}
}

?>