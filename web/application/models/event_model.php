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

		public function getAll()
		{
			$query = $this->db->get('Event');
			return $query->result(); 
		}

		public function select($id)
		{
			$this->db->where('IDEvent',$id);
			return $this->db->get('Event')->row();
		}

		public function masuk($data)
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