<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class c_kasir extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		
		$this->load->model('kasir/m_kasir');
	   }

	   public function view_pembayaran(){
		    $data['daftar'] = $this->m_kasir->getallkasir();
			$this->load->view('kasir/pembayaran',$data);
		}

		public function view_pembayaran_obat(){
		    $data['pembayaranobat'] = $this->m_kasir->getallkasir();
			$this->load->view('kasir/vpembayaran_obat',$data);
		}

		public function view_pilih_pembayaran(){
			$this->load->view('kasir/pilih_pembayaran');
		}


	    public function index() {
		$this->load->model('kasir/m_kasir');
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$data['daftar'] = $this->m_kasir->getallkasir();
		$this->load->view('kasir/index_kasir', $data);
	    }

	    public function vpembayaran_obat(){
        	$data['id'] = $this->m_kasir->countId();
        	$data['id_daftar'] = $this->m_kasir->getalldaftar();
        	$data['id_petugas'] = $this->m_kasir->getallpetugas();
			$this->load->view('kasir/mulai_pembayaran_obat', $data);
		}
		public function proses_pembayaran_obat(){
			$this->load->model('m_kasir');
			$data['pembayaranobat'] = $this->m_kasir->insert_pembayaran_obat_database();
			redirect('kasir/c_kasir/view_pembayaran_obat');
		}


        public function mulai_pembayaran(){
        	$data['id'] = $this->m_kasir->countId();
        	$data['id_daftar'] = $this->m_kasir->getalldaftar();
        	$data['id_petugas'] = $this->m_kasir->getallpetugas();
   
			$this->load->view('kasir/mulai_pembayaran', $data);
		}
		public function proses_daftar_pembayaran(){
			$this->load->model('m_kasir');
			$data['daftar'] = $this->m_kasir->insert_pembayaran_database();
			redirect('kasir/c_kasir/view_pembayaran');
		}

        public function cetak_antrian($id){
		$data['query']=$this->m_kasir->getid($id)->row();
		$this->load->view('kasir/print_pembayaran', $data);
	    
	    }

	    public function RPagePembayaran($id)
        {
            define('FPDF_FONTPATH',$this->config->item('fonts_path'));
            $this->load->library('fpdf');
            $data['data_cashS']=$this->m_kasir->getRPagepembayaran($id);
            // Load view “pdf_report” untuk menampilkan hasilnya
            $this->load->view('kasir/laporan_pembayaran', $data);
        }

        public function search(){
        $data['daftar']=$this->m_kasir->search()->result();
        $this->load->view('kasir/pembayaran',$data);
        }

 
	public function logout() {		
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}