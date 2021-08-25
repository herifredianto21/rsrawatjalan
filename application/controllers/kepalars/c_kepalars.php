<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class c_kepalars extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('kepala_rs/m_kepalars');
	   }

	   //public function view_laporan(){ 
		//$this->load->model('m_laporan');
		//	$data['laporan'] = $this->m_laporan->getalllaporan();
		//	$this->load->view('admin/laporan',$data);
		//}

		public function view_menu_laporan(){
			$this->load->view('kepalars/menu_laporan');
		}

	public function view_laporanpasien(){
			$this->load->view('kepalars/pilihlaporanpasien');
		}

		public function laporanpasien(){

            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
            $this->load->library('fpdf');
            $awal=$this->input->post('tgl_awal');
            $akhir=$this->input->post('tgl_akhir');
            $id_dokter=$this->input->post('id_dokter');

            $data['pendaftaran']=$this->m_kepalars->view($id_dokter,$awal,$akhir);
            // Load view “pdf_report” untuk menampilkan hasilnya
            $this->load->view('kepalars/laporan_pasien', $data);
        

		}


	    public function index() {
		$this->load->model('kepala_rs/m_kepalars');
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
				$this->load->view('kepalars/index_kepalars', $data);
	    }


 
	public function logout() {		
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}