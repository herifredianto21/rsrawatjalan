<?php
	class m_poli extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallpoli(){
			$query=$this->db->query("select * from poli");
			return $query->result();
		}
		public function getbypoli($id_poli){
			$this->db->where('id_poli',$id_poli);
				$query = $this->db->get('poli');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}
		public function insert_poli_database(){
			$data['id_poli']=$this->input->post('id_poli');
			$data['nama_poli']=$this->input->post('nama_poli');
			$data['tarif']=$this->input->post('tarif');
			$data['created_at']=$this->input->post('created_at');
			$data['updated_at']=$this->input->post('updated_at');
		
				
			$this->db->insert('poli',$data);
		}
		public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('poli');
		}


	}