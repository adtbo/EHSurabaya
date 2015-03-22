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
        $this->load->model('event_model');
        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['mulai'] = $row->TglMulai;
            $tmp = explode("-", $data['kegiatan'][$i]['mulai']);
            $data['kegiatan'][$i]['mulai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
            $data['kegiatan'][$i]['selesai'] = $row->TglSelesai;
            $tmp = explode("-", $data['kegiatan'][$i]['selesai']);
            $data['kegiatan'][$i]['selesai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
            $i++;
        }
        $data['numkegiatan'] = $i;
        $data['judulLaman'] = "dasborkegiatan";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
        $this->load->view('dasbor/v_dasborkegiatan');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}
    
    public function ekegiatan()
    {
        $id = $this->input->post('ptr');
        $this->load->model('event_model');
        $query = $this->event_model->select($id);
        $data['id'] = $query->IDEvent;
        $data['nama'] = $query->NamaEvent;
        $data['mulai'] = $query->TglMulai;
        $tmp = explode("-", $data['mulai']);
        $data['mulai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
        $data['selesai'] = $query->TglSelesai;
        $tmp = explode("-", $data['selesai']);
        $data['selesai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
        $data['des'] = $query->DeskripsiEvent;
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
    
    function updatekeg()
    {
        $id = $this->input->post('id');
        $info['NamaEvent'] = $this->input->post('NamaKegiatan');   
        $info['TglMulai'] = $this->input->post('TanggalMulai');  
        $tmp = explode("/", $info['TglMulai']);
        $info['TglMulai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['TglSelesai'] = $this->input->post('TanggalSelesai');  
        $tmp = explode("/", $info['TglSelesai']);
        $info['TglSelesai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['DeskripsiEvent'] = $this->input->post('deskripsi'); 
        $config = array(
				'upload_path' => './uploads',
				'allowed_types' => '*'
			);
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
        $files = $_FILES;
        $ct = count($_FILES['gambar']['name']);
        for ($i=0; $i<$ct; $i++)
        {
            $_FILES['gambar']['name']= $files['gambar']['name'][$i];
            $_FILES['gambar']['type']= $files['gambar']['type'][$i];
            $_FILES['gambar']['tmp_name']= $files['gambar']['tmp_name'][$i];
            $_FILES['gambar']['error']= $files['gambar']['error'][$i];
            $_FILES['gambar']['size']= $files['gambar']['size'][$i]; 
            echo $_FILES['gambar']['name'];
            if (!$this->upload->do_upload('gambar'))
            {
                echo $this->upload->display_errors();
            }
        }
        $this->load->model('event_model');
        $this->event_model->update($id, $info);
        //header("location: ".site_url('dasbor/kegiatan'));
    }
    
    function inskeg()
    {
        $info['NamaEvent'] = $this->input->post('NamaKegiatan');   
        $info['TglMulai'] = $this->input->post('TanggalMulai');  
        $tmp = explode("/", $info['TglMulai']);
        $info['TglMulai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['TglSelesai'] = $this->input->post('TanggalSelesai');  
        $tmp = explode("/", $info['TglSelesai']);
        $info['TglSelesai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['DeskripsiEvent'] = $this->input->post('deskripsi'); 
        $this->load->model('event_model');
        $this->event_model->masuk($info);
    }
    
    function uploadImg()
    {
        
		$namafile = $_FILES['gambar']['name'];
		$id = $_POST['id'];
		$config = array(
				'upload_path' => './uploads',
				'allowed_types' => '*'
			);
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('gambar'))
		{
			echo $this->upload->display_errors();
		}
		/*$file = fopen(base_url('uploads/'.$namafile), "r");
		while(! feof($file))	
		{
			$mhs = fgetcsv($file);
			if (!$this->praktikan_mdl->isExist($mhs[0]))
			{
				$this->praktikan_mdl->insert($mhs[0], $mhs[1]);
				if (!$this->praktikan_mdl->isExistInClass($mhs[0], $idkelas))
					{
						$this->praktikan_mdl->insertToClass($mhs[0], $idkelas);
					}
			}
			else
			{
				if (!$this->praktikan_mdl->isExistInClass($mhs[0], $idkelas))
					{
						$this->praktikan_mdl->insertToClass($mhs[0], $idkelas);
					}
			}
		}
		fclose($file);
		unlink('./uploads/'.$namafile);
		header("location: ".site_url('praktikan/p/d/'.$idkelas));*/
    }
    
}