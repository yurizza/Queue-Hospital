<?php
	
	class LoginPasien extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('modelPasien');
			
		}

		function index(){
			$this->load->view('loginPasien');
		}

		function registrasi(){
			if(isset($_POST['simpan']))
			{
				$nik = $this->input->POST('nik');
				$password = $this->input->POST('password');
				$nama = $this->input->POST('nama');
				$tgl = $this->input->POST('tgl');
				$notelp = $this->input->POST('notelp');
				
				$data = $this->modelPasien->insertData('pasien',array('nik'=>$nik,
					'nama_pasien'=>$nama,
					'tgl_lhr'=>$tgl,
					'no_telp_pasien'=>$notelp,
					'password'=>$password
				));

				if($data)
				{
					redirect('Loginpasien');
				}
			}
			$this->load->view('registrasiPasien');
		}

		function cekLogin()
		{
			$niklogin = $this->input->POST('niklogin');
			$passlogin = $this->input->POST('passlogin');

			$data = array(
				'nik'=>$niklogin,
				'password'=>$passlogin
			);

			$cek = $this->modelPasien->getData('*','pasien',$data);
			// echo $cek->nama_pasien;
			if($cek)
			{
				$this->session->set_userdata(array(
					'nik'=>$niklogin,
					'nama'=>$cek->nama_pasien
				));

				redirect('DataPasien/halamanAwal');
			}else{
				redirect('LoginPasien?pesan=Daftardulu');
			}
		}
		function logout(){
			$this->session->unset_userdata('nik');
			redirect('LoginPasien');
		}

		
	}


?>