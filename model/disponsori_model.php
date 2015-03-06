<?php
	/**
	* 
	*/
	class Disponsori_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function selectById($id){
		  $this->load->database();
		  $query = $this->db->query("Select * from Disponsori, Sponsor where Sponsor.IDSponsor = ListSponsor.IDSponsor and IDEvent = '".$id."'");
		  return $query;
		}

	}
?>