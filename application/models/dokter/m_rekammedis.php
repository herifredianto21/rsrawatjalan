<?php
	class m_rekammedis extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallrekammedis(){
			$query=$this->db->query("select * from rekam_medis");
			return $query->result();
		}
		public function getbyrekammedis($id_rekam){
			$this->db->where('id_rekam',$id_rekam);
				$query = $this->db->get('rekam_medis');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}

		public function getalldokter(){
			$query=$this->db->query("select * from dokter");
			return $query->result();
		}


		public function getallpoli(){
			$query=$this->db->query("select * from poli");
			return $query->result();
		}

		public function getallpembayaran(){
			$query=$this->db->query("select * from pembayaran");
			return $query->result();
		}



      public function countId(){
			$this->db->select('RIGHT(rekam_medis.id_rekam,2) as kode', FALSE);
			$this->db->order_by('id_rekam','DESC');
			$this->db->limit(1);
			$query = $this->db->get('rekam_medis');
			//cek dulu apakah ada sudah ada kode di tabel.
			if($query->num_rows() <> 0){
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
			}else{
			//jika kode belum ada
			$kode = 1;
			}

			$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
			$kodejadi = "RM-".$kodemax;
			return $kodejadi;
		}

    

		
		public function insert_rekammedis_database(){
			$data['id_rekam']=$this->input->post('id_rekam');
			$data['id_dokter']=$this->input->post('id_dokter');
			$data['id_daftar']=$this->input->post('id_daftar');
			$data['id_pasien']=$this->input->post('id_pasien');
			$data['waktu']=date('y-m-d');
			$data['id_resep']=$this->input->post('id_resep');
			$data['keluhan']=$this->input->post('keluhan');
			$data['gejala']=	$this->input->post('gejala');
			$data['diagnosa']=$this->input->post('diagnosa');
			$data['penanganan']=$this->input->post('penanganan');

			
			
				
			$this->db->insert('rekam_medis',$data);
		}
		public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('rekam_medis')->result();
		}
	}