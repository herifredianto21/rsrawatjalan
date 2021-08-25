<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class dokter extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('m_dokter');
	}
	public function index() {
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$data['daftar'] = $this->m_dokter->getalldokter();
		$this->load->view('dokter/index', $data);
	}
 
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}