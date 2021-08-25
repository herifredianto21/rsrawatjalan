<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller{
 
	public function __construct(){
		parent::__construct(); 
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('m_laporan');
		$this->load->library('pdf');

	}
 
	public function index() {
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('admin/index', $data);
	}

	public function view_laporan(){ 
		$this->load->model('m_laporan');
			$data['laporan'] = $this->m_laporan->getalllaporan();
			$this->load->view('admin/laporan',$data);
		}

	public function view_menu_laporan(){
			$this->load->view('admin/menu_laporan');
		}

	public function view_laporanpasien(){
			$this->load->view('admin/pilihlaporanpasien');
		}

	public function cetakkunjungan(){
		$tglawal=$this->input->post('tgl_awal');
		$tglakhir=$this->input->post('tgl_akhir');
		$id=$this->input->post('id_dokter');

		$data['query'] = $this->m_laporan->getlaporan($tglawal, $tglakhir, $id);
		$this->pdf->load_view('admin/laporankunjungan_view', $data);
		$this->pdf->Output();
	}	



//	public function laporankunjungan(){

  //      	$data['waktu'] = $this->m_kasir->getalldaftar();
    //    	$data['id_petugas'] = $this->m_kasir->getallpetugas();
   
	//		$this->load->view('kasir/mulai_pembayaran', $data);
	//	}
 
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}