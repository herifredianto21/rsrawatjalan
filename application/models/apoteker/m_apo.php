<?php
	class m_apo extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallobat(){
			$query=$this->db->query("select * from obat");
			return $query->result();
		}

		public function getallresep(){
			$query=$this->db->query("select * from resep");
			return $query->result();
		}
		public function getalldresep(){
			$query=$this->db->query("select * from detail_resep");
			return $query->result();
		}


		public function getallresepd($id){
			$query=$this->db->query("select * from resep where id_resep = '$id' ");
			return $query->result();
		}
		public function getalldresepd($id){
			$query=$this->db->query("select * from detail_resep where id_resep = '$id'");
			return $query->result();
		}
		public function getdatadresep($id_resep){
			$this->db->where('id_resep',$id_resep);
				$query = $this->db->get('detail_resep');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}

		public function getdataobat($id_obat){
			$this->db->where('id_obat',$id_obat);
				$query = $this->db->get('obat');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}



		//public function getdatadresep($id){
		//	$this->db->select("*");
		//	$this->db->from("detail_resep");
		//	$this->db->where("id_resep", $id);

		//	$query = $this->db->get()->result();
		//	return $query;
		//}

		//public function getdataresep($id){
		//	$this->db->select("*");
		//	$this->db->from("resep");
		//	$this->db->where("id_resep", $id);

		//	$query = $this->db->get()->result();
		//	return $query;
		//}


		public function getalljenisobat(){
			$query=$this->db->query("select * from jenis_obat");
			return $query->result();
		}

		public function getallrekammedis(){
			$query=$this->db->query("select * from rekam_medis");
			return $query->result();
		}

		public function getallpetugas(){
			$query=$this->db->query("select * from petugas");
			return $query->result();
		}



		public function getbyobat($id_obat){
			$this->db->where('id_obat',$id_obat);
				$query = $this->db->get('obat');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}

		public function countId(){
			$this->db->select('RIGHT(resep.id_resep,2) as kode', FALSE);
			$this->db->order_by('id_resep','DESC');
			$this->db->limit(1);
			$query = $this->db->get('resep');
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
			$kodejadi = "RSP-A".$kodemax;
			return $kodejadi;
		}

//coid obat
		public function cobat(){
			$this->db->select('RIGHT(obat.id_obat,2) as kode', FALSE);
			$this->db->order_by('id_obat','DESC');
			$this->db->limit(1);
			$query = $this->db->get('obat');
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
			$kodejadi = "OBAT-0".$kodemax;
			return $kodejadi;
		}
		

		public function insert_resep_database(){
			$data['id_resep']=$this->input->post('id_resep');
			$data['id_rekam']=$this->input->post('id_rekam');
			$data['id_petugas']=$this->input->post('id_petugas');
			$data['waktu']=date('y-m-d');
			$data['keterangan']=$this->input->post('keterangan');
				
			$this->db->insert('resep',$data);
		}

		public function insert_dresep_database(){
			$data['id_resep']=$this->input->post('id_resep');
			$data['id_obat']=$this->input->post('id_obat');
			$data['dosis']=$this->input->post('dosis');
			$data['satuan']=$this->input->post('satuan');
			$data['jumlah']=$this->input->post('jumlah');
			$data['aturan_pakai']=$this->input->post('aturan_pakai');
				
			$this->db->insert('detail_resep',$data);
		}

		public function update_obat_database(){
			$data['id_obat']=$this->input->post('id_obat');
			$id_obat=$this->input->post('id_obat');
			
			$data['id_obat']=$this->input->post('id_obat');
			$data['id_jenis']=$this->input->post('id_jenis');
			$data['nama_obat']=$this->input->post('nama_obat');
			$data['kegunaan']=$this->input->post('kegunaan');
			$data['harga']=$this->input->post('harga');
			$data['satuan']=$this->input->post('satuan');


			$this->db->where('id_obat',$id_obat);
			$this->db->update('obat',$data);

		}
		
	}