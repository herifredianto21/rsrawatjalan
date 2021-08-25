<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_mulai_pendaftaran extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_mulai_pendaftaran');
		} 
		public function view_mulai_pendaftaran(){
			$data['daftar'] = $this->m_mulai_pendaftaran->getallmulai_pendaftaran();
			$this->load->view('petugas_pendaftaran/mulai_pendaftaran',$data);
		}
}