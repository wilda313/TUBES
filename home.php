<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Pengaduan_view');
	}

	public function index()
	{
		$pengaduan = $this->Pengaduan_view->GetPengaduan();
		$data['pengaduan'] = $this->Pengaduan_view->GetPengaduan();
		$this->template->load('static','home',$data);
		
	}
	public function readmore(){
		$kode_laporan = $this->uri->segment(3);
		$data['pengaduan'] = $this->Pengaduan_view->GetPengaduanSingle($kode_laporan)->result();
		$this->template->load('static','readmore',$data);

	}
}
