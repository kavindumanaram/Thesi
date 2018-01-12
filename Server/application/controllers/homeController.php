<?php

class HomeController extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	#$this->load->helper('url');
	$this->load->model('HomeModel');
	}

	public function index()
	{
		$data['records'] = $this->HomeModel->get_all_users();
		$this->load->view('HomeView', $data);
	}

	#http://localhost:8012/ppp/Server/index.php/HomeController/add_form
	public function add_form()
	{
		$this->load->view('insert');
	}

	public function insert_new_user()
	{
		$udata['name'] = $this->input->post('name');
		$udata['email'] = $this->input->post('email');
		$udata['address'] = $this->input->post('address');
		$udata['mobile'] = $this->input->post('mobile');
		$res = $this->HomeModel->insert_users_to_db($udata);
		if($res){
		header('location:'.base_url()."index.php/HomeController/".$this->index());
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(3); //not a good practice change it
		$data['user'] = $this->HomeModel->getById($id);
		$this->load->view('edit', $data);
	}

	public function update()
	{
	$mdata['name']=$_POST['name'];		
	$mdata['email']=$_POST['email'];
	$mdata['address']=$_POST['address'];
	$mdata['mobile']=$_POST['mobile'];
	$res=$this->HomeModel->update_info($mdata, $_POST['id']);
	if($res){
	header('location:'.base_url()."index.php/HomeController/".$this->index());
		}
	}

	public function delete($id)
	{
		$this->HomeModel->delete_a_user($id);
		$this->index();
	}
}

?>