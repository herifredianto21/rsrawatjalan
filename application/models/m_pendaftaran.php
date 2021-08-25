<?php
	class m_pendaftaran extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function countId(){
			$this->db->select('RIGHT(pendaftaran.id_daftar,2) as kode', FALSE);
			$this->db->order_by('id_daftar','DESC');
			$this->db->limit(1);
			$query = $this->db->get('pendaftaran');
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
			$kodejadi = "DFTR-".$kodemax;
			return $kodejadi;
		}
		
		public function cek_antrian(){
			$waktu = date('y-m-d');
			$this->db->like('waktu',$waktu);
			return $this->db->get('pendaftaran');
		}

		public function getallpoli(){
			$query=$this->db->query("select * from poli");
			return $query->result();
		}

		public function getalldokter(){
			$query=$this->db->query("select * from dokter");
			return $query->result();
		}

		public function getallpendaftaran(){
			$waktu=date('Y-m-d');
			$this->db->where('waktu',$waktu);
			$query=$this->db->get("pendaftaran");
			return $query->result();
		}
		public function getbypendaftaran($id_daftar){
			$this->db->where('id_daftar',$id_daftar);
				$query = $this->db->get('pendaftaran');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}
		public function insert_pendaftaran_database(){
			
			$data['id_daftar']=$this->input->post('id_daftar');
			$data['id_petugas']=$this->input->post('id_petugas');
			$data['id_pasien']=$this->input->post('id_pasien');
			$data['id_poli']=$this->input->post('id_poli');
			$data['id_dokter']=$this->input->post('id_dokter');
			
			$data['waktu']=date('y-m-d');
				
			$this->db->insert('pendaftaran',$data );
		}

	}