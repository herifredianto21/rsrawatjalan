<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_rmedis extends CI_Controller {
		public function __construct() {	
			parent::__construct();
			$this->load->model('dokter/m_rekammedis');
			$this->load->model('m_dokter');
			$this->load->model('m_poli');
			$this->load->model('m_pendaftaran');
			$this->load->model('m_pasien');
			$this->load->model('m_resep');

		} 
		public function view_rekammedis(){
			$data['daftar'] = $this->m_rekammedis->getallrekammedis();
			$this->load->view('dokter/rekammedis',$data);
		}
		public function view_rekammedis_detail($id){
			$data['daftar'] = $this->m_rekammedis->getbyrekammedis($id)->result();
			$this->load->view('dokter/view_pasien',$data);
		}


		public function tambah_rmedis(){
			$data['id'] = $this->m_rekammedis->countId();

			//mengambil data dari function getallpasien
			$data['id_dokter'] = $this->m_dokter->getalldokter();

			$data['id_daftar'] = $this->m_rekammedis->getallpembayaran();

			$data['id_pasien'] = $this->m_pasien->getallpasien();

			$data['id_poli'] = $this->m_poli->getallpoli();

			$data['id_resep'] = $this->m_resep->getallresep();

			$this->load->view('dokter/tambah_rmedis',$data);
		}
		public function proses_rekammedis(){
			$this->m_rekammedis->insert_rekammedis_database();
			redirect('dokter/c_rmedis/view_rekammedis','refresh');

		}

		public function search(){
        	$data['daftar']=$this->m_rekammedis->search();
        	$this->load->view('dokter/rekammedis',$data);
        }
	}