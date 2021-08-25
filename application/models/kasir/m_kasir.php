<?php
	class m_kasir extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		//public function getpembayaran($limit,$start) {
		  //  return $this->db->order_by('id_bayar','asc')->limit($limit,$start)->get_where('bayarhariini');
		//}

		public function getallkasir(){
			$query=$this->db->query("select * from pembayaran");
			return $query->result();
		}

		public function getid($id){
			$this->db->where('no_antrian',$id);
			return $this->db->get('pembayaran');
		}


		public function getalldaftar(){
			$query=$this->db->query("select * from pendaftaran");
			return $query->result();
		}
		public function getallpetugas(){
			$query=$this->db->query("select * from petugas");
			return $query->result();
		}
		public function getallpoli(){
			$query=$this->db->query("select * from poli");
			return $query->result();
		}
		public function getbybayar($id_bayar){
			$this->db->where('id_bayar',$id_bayar);
				$query = $this->db->get('pembayaran');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}

		public function cek_antrian(){
			$waktu = date('y-m-d');
			$this->db->like('waktu',$waktu);
			return $this->db->get('pembayaran');
		}

		public function countId(){
			$this->db->select('RIGHT(pembayaran.id_bayar,2) as kode', FALSE);
			$this->db->order_by('id_bayar','DESC');
			$this->db->limit(1);
			$query = $this->db->get('pembayaran');
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
			$kodejadi = "BYR-".$kodemax;
			return $kodejadi;
		}

		public function insert_pembayaran_database(){
	
			$id_daftar=$this->input->post('id_daftar');
			$id_poli = $this->getPolipendaftaran($id_daftar);

			$entrynumber = $this->get_entrynumber($id_poli);
			$entrynumber++;

			$id_daftar=$this->input->post('id_daftar');
			$getnew = $this->check_pendaftaran_baru($id_daftar);

			$biaya1 = $this->input->post('biaya');
			$biaya_akhir = $biaya1 + 15000;


			$data['id_bayar']=$this->input->post('id_bayar');
			$data['id_daftar']=$this->input->post('id_daftar');
			$data['id_petugas']=$this->input->post('id_petugas');
			$data['jenis_biaya']=$this->input->post('jenis_biaya');
			$data['biaya']=$this->input->post('biaya');
			$data['waktu']=date('y-m-d');
			$data['no_antrian']=$entrynumber;
			

			
			
				
			$this->db->insert('pembayaran',$data);
		}

		public function get_entrynumber($id_poli){
			$this->db->where('id_poli', $id_poli);
			$this->db->from('bayarhariini');
			$result = $this->db->count_all_results();

			return $result;
		}

		public function getPolipendaftaran($id_daftar){
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('id_daftar', $id_daftar);

			$query = $this->db->get();
			$ret = $query->row();
			$type = $ret->id_poli;
			return $type;

		}

		public function insert_pembayaran_obat_database(){

			$data['id_bayar']=$this->input->post('id_bayar');
			$data['id_daftar']=$this->input->post('id_daftar');
			$data['id_petugas']=$this->input->post('id_petugas');
			$data['jenis_biaya']=$this->input->post('jenis_biaya');
			$data['biaya']=$this->input->post('biaya');
			$data['waktu']=date('y-m-d');
			
			$this->db->insert('pembayaran',$data);
		}


		public function getRPagepembayaran($id)
    	{
        	$this->db->where('waktu',$id);
        	return $this->db->get('pembayaran');
    	}


    	public function check_pendaftaran_baru($id_daftar){
			$amount = 0;
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('id_daftar', $id_daftar);

			$query = $this->db->get();
			$ret = $query->row();
			$type = $ret->tipe_pasien;
			if($type === "0" ){
				$amount = 0;
			} else if($type === "1"){
				$amount = 15000;
			}
			return $amount;
			}

			public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('pembayaran');
		}

}
