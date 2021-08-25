<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_pendaftaran extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_pendaftaran');
			$this->load->model('m_pasien');
			$this->load->model('m_petugas');
			$this->load->model('m_dokter');

		} 
		public function view_pendaftaran(){
			$data['daftar'] = $this->m_pendaftaran->getallpendaftaran();
			$this->load->view('petugas_pendaftaran/pendaftaran',$data);
		}

		public function mulai_pendaftaran($id){

			//memanggil function untuk menghitug id di m_pasien
			$data['id'] = $this->m_pendaftaran->countId();
			//memanggil model m_pasien
			$this->load->model('m_pasien');
			//mengambil data dari function getallpasien
			$data['id_pasien'] = $this->m_pasien->getbypasien($id)->result();

			$data['id_poli'] = $this->m_pendaftaran->getallpoli();
			$data['id_dokter'] = $this->m_pendaftaran->getalldokter();
			//$data['p']= $this->session->userdata('id_petugas');
			$this->load->view('petugas_pendaftaran/mulai_pendaftaran',$data);
		}
		public function proses_daftar_pasien(){
			$this->load->model('m_pendaftaran');
			$data['daftar'] = $this->m_pendaftaran->insert_pendaftaran_database();
			redirect('petugas_pendaftaran/c_pendaftaran/view_pendaftaran');
		}


	public function cetak_antrian($id){
		$data['query']=$this->m_pendaftaran->getbypendaftaran($id);
		$this->load->view('petugas_pendaftaran/print_pendaftaran', $data);
	}

		
	}	