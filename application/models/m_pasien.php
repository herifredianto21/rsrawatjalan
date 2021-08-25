<?php
	class m_pasien extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallpasien(){
			$query=$this->db->query("select * from pasien");
			return $query->result();
		}
		public function getbypasien($id_pasien){
			$this->db->where('id_pasien',$id_pasien);
				$query = $this->db->get('pasien');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
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

		public function update_pasien_database(){
			$data['id_pasien']=$this->input->post('id_pasien');
			$id_pasien=$this->input->post('id_pasien');
			
			$data['id_pasien']=$this->input->post('id_pasien');
			$data['nama_pasien']=$this->input->post('nama_pasien');
			$data['jk']=$this->input->post('jk');
			$data['alamat']=$this->input->post('alamat');
			$data['tgl_lahir']=$this->input->post('tgl_lahir');
			$data['telp']=$this->input->post('telp');


			$this->db->where('id_pasien',$id_pasien);
			$this->db->update('pasien',$data);

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