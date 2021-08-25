<?php
	class M_crud extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		FUNCTION get_data_pasien(){
			$query=$this->db->query("select * from pasien");
			return $query->result();
		}

		FUNCTION get_data_laboratorium(){
			$query=$this->db->query("select * from laboratorium");
			return $query->result();
		}

		FUNCTION get_data_daftar_detail(){
			$query=$this->db->query("select * from detail");
			return $query->result();
		}

		function get_crud_all() {
			$query=$this->db->query("select * from detail order by nomorresep asc");
			return $query->result();
		} 

		function tambah() {
			$data = array(
				'nomorresep' => $this->input->post('nomorresep'),
				'kd_obat' => $this->input->post('kd_obat'),
				'harga' => $this->input->post('harga'),
				'dosis' => $this->input->post('dosis'),
				'subtotal' => $this->input->post('subtotal'),
				'banyaknya' => $this->input->post('banyaknya'),
				'satuan' => $this->input->post('satuan')
			);
			return $this->db->insert('detail', $data);
		}

		function get_crud_edit($id) {
				$this->db->where('id',$id);
				$query = $this->db->get('detail');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}

		function edit() {
			$id = $this->input->post('id');
			$data = array (
			'nomorresep' => $this->input->post('nomorresep'),
			'kd_obat' => $this->input->post('kd_obat'),
			'harga' => $this->input->post('harga'),
			'dosis' => $this->input->post('dosis'),
			'subtotal' => $this->input->post('subtotal'),
			'banyaknya' => $this->input->post('banyaknya'),
			'satuan' => $this->input->post('satuan')
			);
			$this->db->where('id',$id);
			$this->db->update('detail',$data);
		}

		function hapus_d($id){
			$this->db->where('id',$id);
			$this->db->delete('detail');
		}
	
	}
?>
