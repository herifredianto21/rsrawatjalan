<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_dokter extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_dokter');
			$this->load->model('m_pendaftaran');
		} 
		public function view_dokter(){
			$data['daftar'] = $this->m_dokter->getalldokter();
			$this->load->view('dokter/dokter',$data);
		}

		public function view_dokterperpasien(){
			$waktu = date('y-m-d');
			$this->db->like('waktu',$waktu);
			$data['dokterperpasien'] = $this->m_dokter->getbyperpasien($this->session->userdata('id'));
			$this->load->view('dokter/perdokter',$data);
		}


		//public function tambah_dokter(){
			//$this->load->view('admin/tambah_dokter');
		//}
		//public function proses_tambah_dokter(){
		//	$this->m_dokter->insert_dokter_database();
		//	redirect('c_dokter/view_dokter','refresh');

		//}
		//public function edit_dokter($id_dokter){
	//		$data['judul'] = 'Data Detail [Edit]';
	//		$data['daftar'] = $this->m_dokter->getbydokter($id_dokter);
	//		$this->load->view('edit_dokter',$data);
	//	}
	//	public function proses_edit_dokter(){
	//		$this->m_dokter->update_dokter_database();
	//		redirect('c_dokter/view_dokter','refresh');
	//	}
	//	public function proses_delete_dokter($id_dokter){
	//		$this->m_dokter->delete_dokter_database($id_dokter);
	//		redirect('c_dokter/view_dokter','refresh');

	//	}

		public function search(){
        	$data['daftar']=$this->m_dokter->search();
        	$this->load->view('dokter/dokter',$data);
        }
	}