<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class homeController extends CI_Controller {
	// declare variables or class properties
	var $name;
	var $color;

	function __construct(){
		parent::__construct();
		// give default value
		$this->name="ABC";
		$this->color="black";
	}

	//http://localhost:8012/thesi/Server/index.php/HomeController/you/firstname/lastname
	public function you($firstname='', $lastname=''){
		$data['name']=($firstname)?$firstname.' '.$lastname:$this->name;
		$data['color']=$this->color;
		$this->load->view('HomeView', $data);
	}
}
?>