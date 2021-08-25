<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_petugas extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_petugas');
		} 
		public function view_petugas(){
			$data['daftar'] = $this->m_petugas->getallpetugas();
			$this->load->view('admin/petugas',$data);
		}
		public function tambah_petugas(){
			$this->load->view('admin/tambah_petugas');
		}
		public function proses_tambah_petugas(){
			$this->m_petugas->insert_petugas_database();
			redirect('c_petugas/view_petugas','refresh');

		}
		public function edit_petugas($id_petugas){
			$data['judul'] = 'Data Detail [Edit]';
			$data['daftar'] = $this->m_petugas->getbypetugas($id_petugas);
			$this->load->view('admin/edit_petugas',$data);
		}
		public function proses_edit_petugas(){
			$this->m_petugas->update_petugas_database();
			redirect('c_petugas/view_petugas','refresh');
		}
		public function proses_delete_petugas($id_petugas){
			$this->m_petugas->delete_petugas_database($id_petugas);
			redirect('c_petugas/view_petugas','refresh');

		}  

        public function search(){
        	$data['daftar']=$this->m_petugas->search()->result();
        $this->load->view('admin/petugas',$data);
        }


	}