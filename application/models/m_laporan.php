<?php
	class m_laporan extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

	public function getlaporan($tglawal, $tglakhir, $id){
		$dataquery = "CALL getpasienperbulan(?, ?, ?)";
		$execute = $this->db->query($dataquery, array($tglawal, $tglakhir, $id));
		$ret = $execute->result();

		return $ret;
	}


	//	public function getalllaporan(){
	//		$query=$this->db->query("select * from vlaporan");
	//		return $query->result();
	//	}
	//	public function getbylaporan(){
	//		$this->db->where('id_petugas',$id_petugas);
	//			$query = $this->db->get('vlaporan');
	//			if($query ->num_rows > 0)
		//			return $query;
		//	else
			//		return null;
		//}

	//	public function insert_dokter_database(){
	//		$data['id_petugas']=$this->input->post('id_petugas');
	//		$data['nama_petugas']=$this->input->post('nama_petugas');
	//		$data['id_pasien']=$this->input->post('id_pasien');
	//		$data['nama_pasien']=$this->input->post('nama_pasien');
	//		$data['id_poli']=$this->input->post('id_poli');
	//		$data['nama_poli']=$this->input->post('nama_poli');
	//		$data['id_dokter']=$this->input->post('id_dokter');
	//		$data['nama_dokter']=$this->input->post('nama_dokter');
	//		$data['waktu']=$this->input->post('waktu');
			

			
			
				
	//		$this->db->insert('laporan',$data);
	//	}

		

	}