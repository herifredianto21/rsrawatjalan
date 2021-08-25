<?php if  (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		//load Login_model.php	
		$this->load->model('login_model');
		//check the username is already set up or not
		if ($this->session->userdata('username')) {
			//if username is already set up, then check the level of username is admin or member
			if($this->session->userdata('level') == 'admin'){
				redirect('admin/admin');
			}elseif($this->session->userdata('level') == 'dokter'){
				redirect('dokter/dokter');
			}elseif($this->session->userdata('level') == 'pendaftaran'){
				redirect('petugas_pendaftaran/petugas_pendaftaran');
			}elseif($this->session->userdata('level') == 'kasir'){
				redirect('kasir/c_kasir');
			}elseif($this->session->userdata('level') == 'apoteker'){
				redirect('apoteker/Apoteker');
			}elseif($this->session->userdata('level') == 'kepalars'){
				redirect('kepalars/c_kepalars');
			}
		}
	}
 
	public function index(){
		$data = array('error' => ''
					);
		$this->load->view('form_login', $data);
	}
 
	//function for processing login form
	public function login_process(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
					//calling chech_user() function in Login_model.php
		$result = $this->login_model->check_user($username, $password); 
		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				$id = $row->id_dokter;
				$username = $row->username;
				$level = $row->level;
			}
 
			$newdata = array(
			        'id'  => $id,
			        'username' => $username,
			        'level' => $level,
			        'logged_in' => TRUE
			);
			
			//set up session data
			$this->session->set_userdata($newdata);
			if($this->session->userdata('level')=='admin') {
				redirect('admin/Admin');
			}elseif ($this->session->userdata('level')=='dokter') {
				redirect('dokter/dokter');
			}elseif($this->session->userdata('level') == 'pendaftaran'){
				redirect('petugas_pendaftaran/petugas_pendaftaran');
			}elseif($this->session->userdata('level') == 'kasir'){
				redirect('kasir/c_kasir');
			}elseif($this->session->userdata('level') == 'apoteker'){
				redirect('apoteker/Apoteker');
			}elseif($this->session->userdata('level') == 'kepalars'){
				redirect('kepalars/c_kepalars');
			}
		}
	}
 
	public function register(){
		$data = array('error' => ''
					);
		$this->load->view('form_register', $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}