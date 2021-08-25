<?php
	class m_obat extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		public function getallobat(){
			$query=$this->db->query("select * from obat");
			return $query->result();
		}

		public function getalljenis_obat(){
			$query=$this->db->query("select * from jenis_obat");
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
		public function insert_obat_database(){
			$data['id_obat']=$this->input->post('id_obat');
			$data['id_jenis']=$this->input->post('id_jenis');
			$data['nama_obat']=$this->input->post('nama_obat');
			$data['kegunaan']=$this->input->post('kegunaan');
			$data['harga']=$this->input->post('harga');
			$data['satuan']=$this->input->post('satuan');
				
			$this->db->insert('obat',$data);
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
		public function delete_obat_database($id_obat){
			$this->db->where('id_obat',$id_obat);
			$this->db->delete('obat');
		}


		public function search(){
			$jeniscari=$this->input->post('jeniscari');
			$tekscari=$this->input->post('tekscari');
			$this->db->like($jeniscari,$tekscari);
			return $this->db->get('obat')->result();
		}

	}