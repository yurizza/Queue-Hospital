<?php 

/**
* 
*/
class Data extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dataModel');
		if($this->session->userdata('status')!="login"){
			$this->session->set_flashdata('message', '<script language="javascript">window.alert("Silakan Login Dulu")</script>');
			redirect('admin');
		}
	}

	public function index(){
		$data['dokter'] = $this->dataModel->findAll();
		$this->load->view('home');
		$this->load->view('admin/dataDokter', $data);
		$this->load->view('footer');

	}

	public function delete($id_dokter){
		$this->dataModel->delete($id_dokter);
		$this->session->set_flashdata('message', '<script language="javascript">window.alert("Berhasil Dihapus")</script>');
		redirect('data');
	}

	public function edit($id_dokter){
		$data['dokter'] = $this->dataModel->findByID($id_dokter);
		$this->load->view('admin/updateDokter', $data);
	}

	public function submit(){
		echo "string";
		$dokter = array(
			'id_dokter' => $this->input->post('id_dokter'),
			'spesialis' => $this->input->post('spesialis'),
			'nama_dokter' => $this->input->post('nama_dokter'),
			'alamat_dokter' => $this->input->post('alamat_dokter'),
			'no_telp_dokter' => $this->input->post('no_telp'),
			);
		$this->dataModel->update($dokter);


		$this->session->set_flashdata('message', '<script language="javascript">window.alert("Data Berhasil Diedit")</script>');
		redirect('data');
	}

	public function tambah(){
		$this->load->view('admin/formTambahData');
			}

	public function tambahjadwal(){
		$data['dokter'] = $this->dataModel->findDokter();
		$this->load->view('admin/formTambahJadwal', $data);
			}

	public function insert(){
		$dokter = array(
			'id_dokter' => $this->input->post('id_dokter'),
			'spesialis' => $this->input->post('spesialis'),
			'nama_dokter' => $this->input->post('nama_dokter'),
			'alamat_dokter' => $this->input->post('alamat_dokter'),
			'no_telp_dokter' => $this->input->post('no_telp'),
			);
		$this->dataModel->insert($dokter);
		$this->session->set_flashdata('message', '<script language="javascript">window.alert("Data Berhasil Ditambah")</script>');
		redirect('data');
	}

	public function insertjadwal(){
		$dokter = array(
			'id_dokter' => $this->input->post('id_dokter'),
			'tanggal' => $this->input->post('tanggal'),
			'hari' => $this->input->post('hari'),
			'jam' => $this->input->post('jam'),
			);
		$this->dataModel->insertjadwal($dokter);
		$this->session->set_flashdata('message', '<script language="javascript">window.alert("Data Berhasil Ditambah")</script>');
		redirect('data/jadwal');
	}

	public function jadwal(){
		$data['jadwal'] = $this->dataModel->findAllJadwal();
		$this->load->view('home');
		$this->load->view('admin/dataJadwal', $data);
		$this->load->view('footer');
	}

	public function deletejadwal($id_jadwal){
		$this->dataModel->deletejadwal($id_jadwal);
		$this->session->set_flashdata('message', '<script language="javascript">window.alert("Berhasil Dihapus")</script>');
		redirect('data/jadwal');
	}

	public function editjadwal($id_jadwal){
		$data['jadwal'] = $this->dataModel->findJadwal($id_jadwal);
		$this->load->view('admin/updateJadwal', $data);
	}

	public function submitjadwal(){
		// echo "string";
		$jadwal = array(
			'id_jadwal' => $this->input->post('id_jadwal'),
			'id_dokter' => $this->input->post('id_dokter'),
			'spesialis' => $this->input->post('spesialis'),
			'hari' => $this->input->post('hari'),
			'jam' => $this->input->post('jam'),
			);
		$this->dataModel->updatejadwal($jadwal);


		$this->session->set_flashdata('message', '<script language="javascript">window.alert("Data Berhasil Diedit")</script>');
		redirect('data/jadwal');
	}

	function dataPasien(){
		$data['jadwal'] = $this->dataModel->findAllPasien();
		$this->load->view('home');
		$this->load->view('admin/dataPasien', $data);
		$this->load->view('footer');
	}

	function pendaftaranPasien(){
		$data['jadwal'] = $this->dataModel->findAllPendaftaran();
		$this->load->view('home');
		$this->load->view('admin/pendaftaranPasien', $data);
		$this->load->view('footer');
	}
}

?>