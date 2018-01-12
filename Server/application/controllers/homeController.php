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
}

?>