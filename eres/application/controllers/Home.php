<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dataModel');
	}
	function index(){
		$this->load->view('login/loginAdminView');
	}


}

?>