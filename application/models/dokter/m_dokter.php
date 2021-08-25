<?php
	class m_dokter extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getalldokter(){
			$query=$this->db->query("select * from dokter");
			return $query->result();
		}
		public function getbydokter($id_dokter){
			$this->db->where('id_dokter',$id_dokter);
				$query = $this->db->get('dokter');
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}

		public function getbyperpasien($id_dokter){
			$this->db->where('id_dokter',$id_dokter);
				$query = $this->db->get('pendaftaran');
				
				if($query ->num_rows > 0)
					return $query;
				else
					return null;
		}



		public function idCount(){
			$this->db->select('RIGHT(dokter.id_dokter,2) as kode', FALSE);
			$this->db->order_by('id_dokter','DESC');
			$this->db->limit(1);
			$query = $this->db->get('dokter');
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
			$kodejadi = "DTR-".$kodemax;
			return $kodejadi;
		}



		public function insert_dokter_database(){
			$data['id_dokter']=$this->input->post('id_dokter');
			$data['id_poli']=$this->input->post('id_poli');
			$data['tgl_lahir']=$this->input->post('tgl_lahir');
			$data['nama_dokter']=$this->input->post('nama_dokter');
			$data['jk_dokter']=$this->input->post('jk_dokter');
			$data['alamat']=$this->input->post('alamat');
			$data['no_telp']=$this->input->post('no_telp');
			$data['foto']=$this->input->post('foto');
			

			
			
				
			$this->db->insert('dokter',$data);
		}

		public function update_dokter_database(){
			$data['id_dokter']=$this->input->post('id_dokter');
			$id_dokter=$this->input->post('id_dokter');
			
			$data['id_dokter']=$this->input->post('id_dokter');
			$data['id_poli']=$this->input->post('id_poli');
			$data['tgl_lahir']=$this->input->post('tgl_lahir');
			$data['nama_dokter']=$this->input->post('nama_dokter');	
			$data['jk_dokter']=$this->input->post('jk_dokter');
			$data['alamat']=$this->input->post('alamat');
			$data['no_telp']=$this->input->post('no_telp');
			$data['foto']=$this->input->post('foto');
		

			$this->db->where('id_dokter',$id_dokter);
			$this->db->update('dokter',$data);

		}
		public function delete_dokter_database($id_dokter){
			$this->db->where('id_dokter',$id_dokter);
			$this->db->delete('dokter');
		}

		public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('dokter')->result();
		}
	}