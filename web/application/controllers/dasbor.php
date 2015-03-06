<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	public function index()
	{
		$this->load->view('dasbor/v_dasborhead');
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasborhome');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function dasar()
	{
		$this->load->view('dasbor/v_dasborhead');
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasbordasar');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function galeri()
	{
		$this->load->view('dasbor/v_dasborhead');
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasborgaleri');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function kegiatan()
	{
		$this->load->view('dasbor/v_dasborhead');
		$this->load->view('dasbor/v_dasbornav');
		echo "Fitur belum tersedia";
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}
}