<?php
	/**
	* 
	*/
	class Video_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function find()
		{
			return $this->db->get('Video')->result();
		}

		public function select($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->get('Video')->row();
		}

		public function insert($data)
		{
			return $this->db->insert('Video',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->update('Video',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->delete('Video');
		}
	}
?>