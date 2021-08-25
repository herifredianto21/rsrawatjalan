<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_resep extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_resep');
		} 

		public function view_resep(){
			$data['daftar'] = $this->m_resep->getallresep();
			$this->load->view('admin/adminresep',$data);
		}
	}