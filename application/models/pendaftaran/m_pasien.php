<?php
	class m_pasien extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallpasien(){
			$query=$this->db->query("select * from pasien");
			return $query->result();
		}

		public function getid($id){
			$this->db->where('id_pasien', $id);
			return $this->db->get('pasien');
		}

		public function getpasien_num_rows(){
			return $this->db->get('pasien')->num_rows();
		}

		public function getbypasien($id_pasien){
			$this->db->where('id_pasien',$id_pasien);
				$query = $this->db->get('pasien');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}

		public function idicount(){
			$this->db->select('RIGHT(pasien.id_pasien,2) as kode', FALSE);
			$this->db->order_by('id_pasien','DESC');
			$this->db->limit(1);
			$query = $this->db->get('pasien');
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
			$kodejadi = "PSN-".$kodemax;
			return $kodejadi;
		}




		public function insert_pasien_database(){
			$data['id_pasien']=$this->input->post('id_pasien');
			$data['nama_pasien']=$this->input->post('nama_pasien');
			$data['jk']=$this->input->post('jk');
			$data['alamat']=$this->input->post('alamat');
			$data['tgl_lahir']=$this->input->post('tgl_lahir');
			$data['telp']=$this->input->post('telp');
		
				
			$this->db->insert('pasien',$data);
		}
		
		public function delete_pasien_database($id_pasien){
			$this->db->where('id_pasien',$id_pasien);
			$this->db->delete('pasien');
		}

		public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('pasien');
		}


	}