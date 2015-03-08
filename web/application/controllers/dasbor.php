<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	public function index()
	{
        $data['judulLaman'] = "dasborhome";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasborhome');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function dasar()
	{
        $data['judulLaman'] = "dasbordasar";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasbordasar');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function galeri()
	{
        $data['judulLaman'] = "dasborgaleri";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasborgaleri');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function kegiatan()
	{
        $data['judulLaman'] = "dasborkegiatan";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
        $this->load->view('dasbor/v_dasborkegiatan');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}
    
    public function ekegiatan()
    {
        $data['judulLaman'] = "dasborkegiatan";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
        $this->load->view('dasbor/v_dasborekegiatan');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
    }
}