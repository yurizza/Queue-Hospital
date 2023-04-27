<?php
    class DataPasien extends CI_controller
    {   
        function __construct(){
            parent::__construct();
            $this->load->model('modelPasien');
            if(!($this->session->userdata('nik'))){
                redirect('LoginPasien?pesan=login_sek_bro');
            }
        }

        function halamanAwal()
		{
			if(isset($_GET['id_jadwal']))
			{
				$id_jadwal= $this->input->get('id_jadwal');
				$nik = $this->session->userdata('nik');

				$data = $this->modelPasien->getData('*','jadwal_praktek',"id_jadwal='$id_jadwal'");
				
				$hari = $data->hari;
                $jam = $data->jam;
                $tanggal = $data->tanggal;
                $data2 = $this->modelPasien->getJoin('*','pendaftaran','jadwal_praktek',"jadwal_praktek.id_jadwal=pendaftaran.id_jadwal",
                    "pendaftaran.nik ='$nik' and jadwal_praktek.tanggal='$tanggal' and jadwal_praktek.jam='$jam' and pendaftaran.status='process'");

                //echo var_dump($data2);
                if($data2 > 0){
                    $this->session->set_flashdata('message', '<script language="javascript">window.alert("Anda Sudah Ada Jadwal")</script>');
                    redirect('DataPasien/halamanAwal');
                }else{
                    $status = "process";
                    $data3 = $this->modelPasien->getData('*','pendaftaran',"no_antrian=(select max(no_antrian) from pendaftaran where id_jadwal='$id_jadwal')");
                    $no_antrian =  $data3->no_antrian+1;
                    if($no_antrian<=3){
                    $masuk = $this->modelPasien->insertData('pendaftaran',array(
                        'no_antrian'=>$no_antrian,
                        'nik'=>$nik,
                        'id_jadwal'=>$id_jadwal,
                        'status'=>$status
                    ));

                    if($masuk)
                    {

                        redirect('DataPasien/halamanDaftar');
                    }
                    }else{
                        $this->session->set_flashdata('message', '<script language="javascript">window.alert("Data Penuh")</script>');
                        redirect('DataPasien/halamanAwal?pesan=data penuh');
                    }

                }
			}else{
                $tanggal = date('Y-m-d');
            $data['hasil'] = $this->modelPasien->getJoinBanyak('*','jadwal_praktek','dokter',"dokter.id_dokter=jadwal_praktek.id_dokter",
                                                        "jadwal_praktek.tanggal>='$tanggal'");
            $this->load->view('halamanAwal');
            $this->load->view('contentPasien',$data);
            $this->load->view('footerPasien');
			}
		}

		function halamanDaftar()
		{
			$nik = $this->session->userdata('nik');

            $tanggal = date('Y-m-d');
			$data['hasil'] = $this->modelPasien->getJoinJoin('*','jadwal_praktek','pendaftaran','dokter',"jadwal_praktek.id_jadwal=pendaftaran.id_jadwal","jadwal_praktek.id_dokter=dokter.id_dokter","pendaftaran.nik='$nik' and tanggal >= '$tanggal' and status='process'");
            $this->load->view('halamanAwal');
            $this->load->view('halamanDaftar',$data);
            $this->load->view('footerPasien');
        }
   
        function halamanHistory()
		{
			$nik = $this->session->userdata('nik');

			$data['hasil'] = $this->modelPasien->getJoinJoin('*','jadwal_praktek','pendaftaran','dokter',"jadwal_praktek.id_jadwal=pendaftaran.id_jadwal","jadwal_praktek.id_dokter=dokter.id_dokter","pendaftaran.nik='$nik' and status='batal'");
            $this->load->view('halamanAwal');
            $this->load->view('halamanHistory',$data);
            $this->load->view('footerPasien');
        }

        function batalDaftar($no_daftar){
            //$nik = $this->session->userdata('nik');
            $status= "batal";
            $update = $this->modelPasien->updateData('pendaftaran',array(
                'status'=>$status),array(
                'no_daftar'=>$no_daftar));
            if($update){
                $this->session->set_flashdata('message', '<script language="javascript">window.alert("Pembatalan Berhasil")</script>');
                redirect('DataPasien/halamanDaftar');
            }
        }


        
    }
    

?>