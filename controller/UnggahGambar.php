<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UnggahGambar extends CI_Controller {

	function loadTable()
	{
		//$data['username'] = "ADMINISTRATOR";
		$data['page_title'] = "UnggahGambar";
		$this->load->model('Gambar');
		$data['result'] = $this->Gambar->GetDataGambar();
		//$this->load->view('header', $data);
		//$this->load->view('navigationadmin', $data);
		//$this->load->view('footer');
	}

	public function getInputFormGambar($id_gambar, $data_gambar, $judul_gambar, $waktu_gambar, $deskripsi_gambar)
	{
		$this->load->model('Gambar');
		$this->Video->setDataGambar($id_gambar, $data_gambar, $judul_gambar, $waktu_gambar, $deskripsi_gambar);
	}
}