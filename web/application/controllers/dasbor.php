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
        $this->load->model('organisasi_model');
        $query = $this->organisasi_model->getAll(1);
        foreach ($query as $row)
        {
            $data['deskripsi'] = $row->Deskripsi;
            $data['kontak']['alamat'] = $row->Alamat;
            $data['kontak']['email'] = $row->Email;
            $data['kontak']['telp'] = $row->NoTlp;
            $data['kontak']['facebook'] = $row->Facebook;
            $data['kontak']['twitter'] = $row->Twitter;
            $data['kontak']['pinterest'] = $row->Pinterest;
            $data['kontak']['gplus'] = $row->Gplus;
            $data['kontak']['linkedin'] = $row->Linkedin;
            $data['kontak']['instagram'] = $row->Instagram;
        }
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
    
    function updatedes()
    {
        $des = $this->input->post('tentang');
        $this->load->model('organisasi_model');
        $this->organisasi_model->updateDeskripsi(1, $des);
        header("location: ".site_url('dasbor/dasar'));
    }
    
    function updatekon()
    {
        $kontak['email'] = $this->input->post('email');
        $kontak['alamat'] = $this->input->post('alamat');
        $kontak['telp'] = $this->input->post('telepon');
        $kontak['facebook'] = $this->input->post('facebook');
        $kontak['twitter'] = $this->input->post('twitter');
        $kontak['pinterest'] = $this->input->post('pinterest');
        $kontak['gplus'] = $this->input->post('gplus');
        $kontak['linkedin'] = $this->input->post('linkedin');
        $kontak['instagram'] = $this->input->post('instagram');
        $this->load->model('organisasi_model');
        $this->organisasi_model->updateKontak(1, $kontak);
        header("location: ".site_url('dasbor/dasar'));
    }
}