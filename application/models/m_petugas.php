<?php
	class m_petugas extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallpetugas(){
			$query=$this->db->query("select * from petugas");
			return $query->result();
		}
		public function getbypetugas($id_petugas){
			$this->db->where('id_petugas',$id_petugas);
				$query = $this->db->get('petugas');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}
		public function insert_petugas_database(){
			$data['id_petugas']=$this->input->post('id_petugas');
			$data['nama_petugas']=$this->input->post('nama_petugas');
			$data['jk']=$this->input->post('jk');
			$data['jabatan']=$this->input->post('jabatan');
			$data['tgl_lahir']=$this->input->post('tgl_lahir');
			$data['alamat']=$this->input->post('alamat');
			$data['created_at']=$this->input->post('created_at');
			$data['updated_at']=$this->input->post('updated_at');

			
			
				
			$this->db->insert('petugas',$data);
		}

		public function update_petugas_database(){
			$data['id_petugas']=$this->input->post('id_petugas');
			$id_petugas=$this->input->post('id_petugas');
			
			$data['id_petugas']=$this->input->post('id_petugas');
			$data['nama_petugas']=$this->input->post('nama_petugas');
			$data['jk']=$this->input->post('jk');
			$data['jabatan']=$this->input->post('jabatan');
			$data['tgl_lahir']=$this->input->post('tgl_lahir');
			$data['alamat']=$this->input->post('alamat');
			$data['created_at']=$this->input->post('created_at');
			$data['updated_at']=$this->input->post('updated_at');

		

			$this->db->where('id_petugas',$id_petugas);
			$this->db->update('petugas',$data);

		}
		public function delete_dokter_database($id_petugas){
			$this->db->where('id_petugas',$id_petugas);
			$this->db->delete('petugas');
		}

		public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('petugas')->result();
		}

	}