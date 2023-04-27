<?php 

/**
* 
*/
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminModel');
	}

	public function index(){
		$this->load->view('login/loginAdminView');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password,
			);
		$cek = $this->adminModel->cek_login("admin", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login",
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('message', '<script language="javascript">window.alert("Selamat Datang Admin")</script>');
			redirect('Data');
		}
		else{
			$this->session->set_flashdata('message', '<script type="text/javascript">alert("Login Dulu");</script>');
			redirect('admin');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}

?>