<?php 

/**
* 
*/
class DataModel extends CI_Model
{
	const table_name = "dokter";
	public function __construct()
	{
	
	}
	public function findAllPasien(){
		return $this->db->get('pasien')->result_array();
	}
	public function findAllPendaftaran(){
		return $this->db->query("select * from pendaftaran p
								join jadwal_praktek j on j.id_jadwal=p.id_jadwal
								join dokter d on d.id_dokter=j.id_dokter
								order by j.tanggal")->result_array();
	}
	public function findAll(){
		return $this->db->get('dokter')->result_array();

	}

	public function findAllJadwal(){
		return $this->db->get('jadwal_praktek')->result_array();
	}

	public function findDokter(){
		return $this->db->get('dokter')->result_array();
	}

	public function delete($id_dokter){
		$this->db->delete('dokter', array('id_dokter' => $id_dokter));
	}

	public function deletejadwal($id_jadwal){
		$this->db->delete('jadwal_praktek', array('id_jadwal' => $id_jadwal));
	}
	
	public function findByID($id_dokter){
		return $this->db
		->where('id_dokter', $id_dokter)
		->get('dokter')->row_array();
	}


	public function update($dokter){
		$this->db->update($this::table_name, $dokter, array('id_dokter' => $dokter['id_dokter']));
	}

	public function updatejadwal($jadwal){
		$this->db->update('jadwal_praktek', $jadwal, array('id_jadwal' => $jadwal['id_jadwal']));
	}

	public function insert($dokter){
		$this->db->insert('dokter', $dokter);
	}

	public function insertjadwal($dokter){
		$this->db->insert('jadwal_praktek', $dokter);
	}

	public function findJadwal($id_jadwal){
		return $this->db
		->where('id_jadwal', $id_jadwal)
		->get('jadwal_praktek')->row_array();
	}




}

?>