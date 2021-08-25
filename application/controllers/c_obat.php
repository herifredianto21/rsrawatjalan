<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_obat extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_obat');
		} 
		public function view_obat(){
			$data['daftar'] = $this->m_obat->getallobat();
			$this->load->view('admin/obat',$data);
		}
		public function tambah_obat(){
			$data['id_jenis'] = $this->m_obat->getalljenis_obat();


			$this->load->view('admin/tambah_obat');
		}
		public function proses_tambah_obat(){
			$this->m_obat->insert_obat_database();
			redirect('c_obat/view_obat', $data);

		}
		public function edit_obat($id){
			$data['daftar'] = $this->m_obat->getbyobat($id);
			$this->load->view('admin/edit_obat',$data);
		}
		public function proses_edit_obat(){
			$this->m_obat->update_obat_database();
			redirect('c_obat/view_obat',$data);
		}
		public function proses_delete_obat($id){
			$this->m_obat->delete_obat_database($id);
			redirect('c_obat/view_obat','refresh');

		}
		public function search(){
        	$data['daftar']=$this->m_obat->search();
        	$this->load->view('admin/obat',$data);
        }
	}