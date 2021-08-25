<?php
	class m_resep extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallresep(){
			$query=$this->db->query("select * from resep");
			return $query->result();
		}
		public function getbyresep($id_resep){
			$this->db->where('id_resep',$id_resep);
				$query = $this->db->get('resep');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}
		public function insert_resep_database(){
			$data['id_resep']=$this->input->post('id_resep');
			$data['id_rekam']=$this->input->post('id_rekam');
			$data['id_petugas']=$this->input->post('id_petugas');
			$data['waktu']=$this->input->post('waktu');
			$data['keterangan']=$this->input->post('keterangan');
		
				
			$this->db->insert('resep',$data);
		}
		public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('resep');
		}


	}