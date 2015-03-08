<?php
	/**
	* 
	*/
	class Organisasi_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function insert($data)
		{
			$query = $this->db->query("Select IDOrganisasi from Organisasi where IDOrganisasi='".$data['IDOrganisasi']."'");
			if ($query->num_rows() > 0) return false;
			else
			{
				return $this->db->insert('Organisasi',$data);
			}
		}

		function select($id){
		  $this->load->database();
		  $query = $this->db->getwhere('IDOrganisasi',array('IDOrganisasi'=>$id));
		  return $query->row_array();
		}

	}
?>