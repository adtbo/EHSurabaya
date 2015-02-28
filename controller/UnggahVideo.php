<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UnggahVideo extends CI_Controller {

	function loadTable()
	{
		//$data['username'] = "ADMINISTRATOR";
		$data['page_title'] = "UnggahVideo";
		$this->load->model('Video');
		$data['result'] = $this->Video->GetDataVideo();
		//$this->load->view('header', $data);
		//$this->load->view('navigationadmin', $data);
		//$this->load->view('footer');
	}

	public function getInputFormVideo($id_video, $link, $judul_video, $waktu_video, $deskripsi_video)
	{
		$this->load->model('Video');
		$this->Video->setDataVideo($id_video, $link, $judul_video, $waktu_video, $deskripsi_video);
	}
}