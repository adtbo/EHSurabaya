<?php
	/**
	* 
	*/
	class Foto_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function find()
		{
			return $this->db->get('Foto')->result();
		}

		public function select($id)
		{
			$this->db->where('IDFoto',$id);
			return $this->db->get('Foto')->row();
		}

		public function masuk($data)
		{
			return $this->db->insert('Foto',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDFoto',$id);
			return $this->db->update('Foto',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDFoto',$id);
			return $this->db->delete('Foto');
		}
	}
?>