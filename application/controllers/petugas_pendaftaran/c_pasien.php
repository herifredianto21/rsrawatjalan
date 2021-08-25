<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_pasien extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('pendaftaran/m_pasien');
		} 
		public function view_pasien(){
		
			$data['daftar'] = $this->m_pasien->getallpasien();
			$this->load->view('petugas_pendaftaran/pasien_pendaftaran',$data);
		}
		public function tambah_pasien(){
			$data['id'] = $this->m_pasien->idicount();
			$data['id_pasien'] = $this->m_pasien->getallpasien();
			$this->load->view('petugas_pendaftaran/tambah_pasien',$data);
		}
		public function proses_tambah_pasien(){
			$this->load->model('pendaftaran/m_pasien');
			$this->m_pasien->insert_pasien_database();
			redirect('petugas_pendaftaran/c_pasien/view_pasien',$data);
		}
		
		public function proses_delete_pasien($id_pasien){
			$this->m_pasien->delete_pasien_database($id_pasien);
			redirect('c_pasien/view_pasien','refresh');

		}

		public function cetak_kartu($id){
			$data['query']=$this->m_pasien->getid($id)->row();
			$this->load->view('petugas_pendaftaran/print_kartu', $data);
		}  

        public function search(){
        	$data['daftar']=$this->m_pasien->search()->result();
        	$this->load->view('petugas_pendaftaran/pasien_pendaftaran',$data);
        }


	}