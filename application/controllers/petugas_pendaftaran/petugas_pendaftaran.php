<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class petugas_pendaftaran extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('m_pasien');
	}
	public function index() {
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('petugas_pendaftaran/index', $data);
	}
	public function view_pasien(){
		$data['daftar'] = $this->m_pasien->getallpasien();
			$this->load->view('petugas_pendaftaran/pasien_pendaftaran',$data);
	}
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}