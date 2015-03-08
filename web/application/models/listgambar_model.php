<?php
	/**
	* 
	*/
	class Listgambar_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function selectById($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaGambar, Gambar from Listgambar, Gambar where Gambar.IDGambar = Listgambar.IDGambar and Listgambar.IDEvent = '".$id."'");
		  return $query;
		}
		
		function selectByName($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaGambar, Gambar from Listgambar, Gambar where Gambar.IDGambar = Listgambar.IDGambar and Listgambar.IDEvent = '".$id."'");
		  return $query;
		}

	}
?>