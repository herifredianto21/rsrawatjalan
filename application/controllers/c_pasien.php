<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_pasien extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_pasien');
		} 
		public function view_pasien(){
			$data['daftar'] = $this->m_pasien->getallpasien();
			$this->load->view('admin/pasien',$data);
		}
		public function tambah_pasien(){
			$this->load->view('admin/tambah_pasien');
		}
		public function proses_tambah_pasien(){
			$this->m_pasien->insert_pasien_database();
			redirect('c_pasien/view_pasien','refresh');

		}
		public function edit_pasien($id_pasien){
			$data['judul'] = 'Data Detail [Edit]';
			$data['daftar'] = $this->m_pasien->getbypasien($id_pasien);
			$this->load->view('admin/edit_pasien',$data);
		}
		public function proses_edit_pasien(){
			$this->m_pasien->update_pasien_database();
			redirect('c_pasien/view_pasien',$data);
		}
		public function proses_delete_pasien($id_pasien){
			$this->m_pasien->delete_pasien_database($id_pasien);
			redirect('c_pasien/view_pasien','refresh');

		}  

        public function search(){
        	$data['daftar']=$this->m_pasien->search()->result();
        $this->load->view('admin/pasien',$data);
        }


	}