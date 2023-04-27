<?php 

/**
* 
*/
class Auth extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('authModel');
	}

	public function index(){
		$this->load->view('home');
	}
}

?>