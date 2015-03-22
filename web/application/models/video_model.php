<?php
	/**
	* 
	*/
	class Video_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		public function getAll()
		{
			$query = $this->db->get('video');
			return $query->result(); 
		}
		
		public function getID()
		{
			$i = 0;
			$save = $this->db->query('select IDVideo from Video where IDVideo ="'.$i.'"');
			while($save->num_rows() == 1)
			{
				$i = $i + 1;
				$save = $this->db->query('select IDVideo from Video where IDVideo ="'.$i.'"');
			}
			return $i;
		}
		
		public function setDataVideo($id_video, $link, $judul_video, $waktu_video, $deskripsi_video)
		{
			$data = array(
				'idvideo' => $id_video,
				'link' => $link,
				'judulvideo' => $judul_video,
				'waktuvideo' => $waktu_video,
				'deskripsivideo' => $deskripsi_video
				);
			$this->db->insert('Video', $data);
		}

		public function getDataVideo()
		{
			$query = $this->db->query('SELECT video.idvideo, video.link, video.judulvideo, video.waktuvideo, video.deskripsivideo FROM video');
			return $query->result();
		}

		public function select($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->get('Video')->row();
		}
		
		public function insertVideoProfile($link)
		{
			$this->db->set('judulVideo', 'Profil EarthHour');
			$this->db->set('deskripsiVideo', '');
			$this->db->set('waktuVideo', 'NOW()', false);
			$this->db->set('linkVideo', $link);
			$this->db->insert('Video');
		}
		public function masuk($data)
		{
			return $this->db->insert('video',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->update('video',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->delete('video');
		}
	}
?>