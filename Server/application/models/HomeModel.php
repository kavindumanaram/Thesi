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

	public function insert_users_to_db($data)
	{
		return $this->db->insert('users', $data);
	}

	public function getById($id)
	{
		$query = $this->db->get_where('users', array('id'=>$id));
		return $query->row_array();
	}

	public function update_info($data, $id)
	{
		$this->db->where('users.id', $id);
		return $this->db->update('users', $data);
	}

	public function delete_a_user($id)
	{
		$this->db->where('users.id', $id);
		return $this->db->delete('users');
	}

	public function search_by_keyword($keyword)
	{
		$this->db->like('name', $keyword);
		$query = $this->db->get('users');
		return $query->result();
	}
}

?>