<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class C_login extends CI_Controller {
		public function __construct() {
			parent::__construct();
		}
		public function index(){
			
			$this->load->view('form_login');
		}

		public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
 
}