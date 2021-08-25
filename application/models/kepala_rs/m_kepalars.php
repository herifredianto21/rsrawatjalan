<?php
	class m_kepalars extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function view($dokter,$awal,$akhir){

			$where="waktu between '$awal' and '$akhir'";
			$this->db->where($where);
			$this->db->where('id_dokter',$dokter);

			$query = $this->db->get('vlaporan');
			return $query->result();
		}

		//public function getpembayaran($limit,$start) {
		  //  return $this->db->order_by('id_bayar','asc')->limit($limit,$start)->get_where('bayarhariini');
		//}

		//public function getlaporan($tglawal, $tglakhir, $id){
		//$dataquery = "CALL getpasienperbulan(?, ?, ?)";
		//$execute = $this->db->query($dataquery, array($tglawal, $tglakhir, $id));
		//$ret = $execute->result();

		//return $ret;
	//}

		
}
