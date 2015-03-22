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
			$query = $this->db->get('event');
			return $query->result(); 
		}

		public function select($id)
		{
			$this->db->where('IDEvent',$id);
			return $this->db->get('event')->row();
		}

		public function masuk($data)
		{
			return $this->db->insert('event',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDEvent',$id);
			return $this->db->update('event',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDEvent',$id);
			return $this->db->delete('event');
		}
	}
?>