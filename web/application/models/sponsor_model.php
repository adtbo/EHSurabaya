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

		public function getID()
		{
			$i = 0;
			$save = $this->db->query('select IDSponsor from Sponsor where IDSponsor ="'.$i.'"');
			while($save->num_rows() == 1)
			{
				$i = $i + 1;
				$save = $this->db->query('select IDSponsor from Sponsor where IDSponsor ="'.$i.'"');
			}
			return $i;
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