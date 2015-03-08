<?php
	/**
	* 
	*/
	class Event_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function find()
		{
			return $this->db->get('Event')->result();
		}

		public function select($id)
		{
			$this->db->where('IDEvent',$id);
			return $this->db->get('Event')->row();
		}

		public function insert($data)
		{
			return $this->db->insert('Event',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDEvent',$id);
			return $this->db->update('Event',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDEvent',$id);
			return $this->db->delete('Event');
		}
	}
?>