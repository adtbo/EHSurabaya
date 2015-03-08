<?php
	/**
	* 
	*/
	class Listvideo_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function selectById($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaVideo, Link from Listvideo, Video where Video.IDVideo = Listvideo.IDVideo and Listvideo.IDEvent = '".$id."'");
		  return $query;
		}
		
		function selectByName($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaVideo, Link from Listvideo, Video where Video.IDVideo = Listvideo.IDVideo and Listvideo.IDEvent = '".$id."'");
		  return $query;
		}

	}
?>