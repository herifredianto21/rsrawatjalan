<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class c_dokter extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_dokter');
		} 
		public function view_dokter(){ 
			$data['daftar'] = $this->m_dokter->getalldokter();
			$this->load->view('admin/dokter',$data);
		}
		public function tambah_dokter(){
			$this->load->model('m_pasien');
			$data['id'] = $this->m_dokter->countId();
			$data['id_dokter'] = $this->m_dokter->getalldokter();
			$this->load->view('admin/tambah_dokter',$data);
		}
		public function proses_tambah_dokter(){

			$data['id_dokter']=$this->input->post('id_dokter');
			$data['id_poli']=$this->input->post('id_poli');
			$data['nama_dokter']=$this->input->post('nama_dokter');
			$data['jk_dokter']=$this->input->post('jk_dokter');
			$data['tgl_lahir']=$this->input->post('tgl_lahir');
			$data['alamat']=$this->input->post('alamat');
			$data['no_telp']=$this->input->post('no_telp');

			$this->load->library('upload');
			$config['upload_path'] = './image/upload/fotodokter/';

			$config['allowed_types'] = 'jpg|png';

			$config['max_size'] = '2048';
			$config['max_width'] = '2500';
			$config['max_height'] = '2500';
			   if(!empty($_FILES['foto'] ['name'])){
			   	$type=substr($_FILES['foto']['name'],-4);
			   	$config['file_name'] =$data=time().$type;
			   	$this->upload->initialize($config);
			   	if(!$this->upload->do_upload('foto')){
			   		echo "gagal";
			   	}
			   }


			$this->m_dokter->insert_dokter_database();
			redirect('admin/c_dokter/view_dokter', $data);

		}
		public function edit_dokter($id_dokter){
			$data['judul'] = 'Data Detail [Edit]';
			$data['daftar'] = $this->m_dokter->getbydokter($id_dokter);
			$this->load->view('admin/edit_dokter',$data);
		}
		public function proses_edit_dokter(){

			$this->load->library('upload');
			$config['upload_path'] = './image/upload/fotodokter';

			$config['allowed_types'] = 'jpg|png';

			$config['max_size'] = '2048';
			$config['max_width'] = '2500';
			$config['max_height'] = '2500';
			   if(!empty($_FILES['foto'] ['name'])){
			   	$type=substr($_FILES['foto']['name'],-4);
			   	$config['file_name'] =$data=time().$type;
			   	$this->upload->initialize($config);
			   	if(!$this->upload->do_upload('foto')){
			   		echo "gagal";
			   	}
			   }




			$this->m_dokter->update_dokter_database($data);
			redirect('admin/c_dokter/view_dokter',$data);
		}
		public function proses_delete_dokter($id_dokter){
			$this->m_dokter->delete_dokter_database($id_dokter);
			redirect('c_dokter/view_dokter','refresh');

		}

		public function search(){
        	$data['daftar']=$this->m_dokter->search();
        	$this->load->view('admin/dokter',$data);
        }

	}