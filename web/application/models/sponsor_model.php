<?php
	/**
	* 
	*/
	class Sponsor_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function find()
		{
			return $this->db->get('Sponsor')->result();
		}

		public function select($id)
		{
			$this->db->where('IDSponsor',$id);
			return $this->db->get('Sponsor')->row();
		}

		public function masuk($data)
		{
			return $this->db->insert('Sponsor',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDSponsor',$id);
			return $this->db->update('Sponsor',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDSponsor',$id);
			return $this->db->delete('Sponsor');
		}
	}
?>