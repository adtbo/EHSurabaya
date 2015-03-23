<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {
	public function index()
	{
		#ambil deskripsi oorgansasi
		$this->load->model('organisasi_model');
        $query = $this->organisasi_model->getAll(1);
        foreach ($query as $row)
        {
            $data['deskripsi_organisasi'] = $row->Deskripsi;
        }

        #ambil data event
        $this->load->model('event_model');
        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['deskripsi'] = $row->DeskripsiEvent;
            $i++;
        }
		
		$this->load->view('website/v_websitehead');
		$this->load->view('index');
		$this->load->view('website/v_websitefoot');
	}
}