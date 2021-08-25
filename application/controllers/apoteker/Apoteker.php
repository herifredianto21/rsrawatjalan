<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Apoteker extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('apoteker/m_apo');

	}
 
	public function index() {
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('apoteker/index', $data);
	}

	public function view_obat(){
			$data['daftar'] = $this->m_apo->getallobat();
			$this->load->view('apoteker/obat_apo',$data);
		}

		public function tambah_obat(){ 
			$data['id'] = $this->m_apo->cobat();

			$data['id_rekam'] = $this->m_apo->getallrekammedis();
			$data['id_petugas'] = $this->m_apo->getallpetugas();


			$data['daftar'] = $this->m_apo->getallobat();
			$this->load->view('apoteker/tambah_obat',$data);
		}


	public function proses_tambah_obat(){
			$this->m_apo->insert_obat_database();
			redirect('apoteker/Apoteker/view_obat', 'refresh');

		}


//pemisah
	public function view_resep(){
			$data['daftar'] = $this->m_apo->getallresep();
			$this->load->view('apoteker/resep',$data);
		}

	public function tambah_resep(){ 
			$data['id'] = $this->m_apo->countId();
			$data['id_rekam'] = $this->m_apo->getallrekammedis();


			$data['daftar'] = $this->m_apo->getallresep();
			$this->load->view('apoteker/tambah_resep',$data);
		}
	public function proses_tambah_resep(){
			$this->m_apo->insert_resep_database();
			redirect('apoteker/Apoteker/view_resep', 'refresh');

		}

		//---------------------------------------------------------

       public function view_dresep(){
			$data['detailresep'] = $this->m_apo->getalldresep();
			$this->load->view('apoteker/detail_resep',$data);
		}

		public function tambah_dresep(){ 
			$data['id_resep'] = $this->m_apo->getallresep();
			
			$data['detailresep'] = $this->m_apo->getalldresep();
			$this->load->view('apoteker/dresep',$data);
		}
	public function proses_tambah_dresep(){
			$this->m_apo->insert_dresep_database();
			redirect('apoteker/Apoteker/view_dresep', $data);

		}

		//---------------------------------------------------------

		public function view($id){
			$data['daftar'] = $this->m_apo->getallresepd($id);
			$data['detailresep'] = $this->m_apo->getalldresepd($id);
			$this->load->view('apoteker/view_detail_resep',$data);
		}


		//---------------------------------------------------------


		public function view_jenis_obat(){
			$data['jenisobat'] = $this->m_apo->getalljenisobat();
			$this->load->view('apoteker/jenis_obat',$data);
		}



 
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}