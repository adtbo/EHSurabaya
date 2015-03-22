<?php
	/**
	* 
	*/
	class Gambar_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function getAll()
		{
			$query = $this->db->get('Gambar');
			return $query->result(); 
		}

		public function select($id)
		{
			$this->db->where('IDGambar',$id);
			return $this->db->get('Gambar')->row();
		}

		public function insert($data)
		{
			return $this->db->insert('Gambar',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDGambar',$id);
			return $this->db->update('Gambar',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDGambar',$id);
			return $this->db->delete('Gambar');
		}
	}
?>