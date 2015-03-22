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
		
		public function getID()
		{
			$i = 0;
			$save = $this->db->query('select IDEvent from Event where IDEvent ="'.$i.'"');
			while($save->num_rows() == 1)
			{
				$i = $i + 1;
				$save = $this->db->query('select IDEvent from Event where IDEvent ="'.$i.'"');
			}
			return $i;
		}

		public function find()
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
			$query = $this->db->insert('event',$data);
			return $query;
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