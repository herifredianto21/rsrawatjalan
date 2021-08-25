<?php
	class m_mulai_pendaftaran extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallmulai_pendaftaran(){
			$query=$this->db->query("select * from pendaftaran");
			return $query->result();
		}
		public function getbymulai_pendaftaran($id_daftar){
			$this->db->where('id_daftar',$id_daftar);
				$query = $this->db->get('pendaftaran');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}
}