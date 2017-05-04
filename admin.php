<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Pengaduan_view');
	}

	public function index()
	{
		$pengaduan = $this->Pengaduan_view->GetPengaduan();
		$data['pengaduan'] = $this->Pengaduan_view->GetPengaduan();
		$this->template->load('admin/static_admin','admin/home_admin',$data);
	}
	public function readmore_admin(){
		$kode_laporan = $this->uri->segment(3);
		$data['pengaduan'] = $this->Pengaduan_view->GetPengaduanSingle($kode_laporan)->result();
		$this->template->load('admin/static_admin','admin/readmore_admin',$data);

	}
	public function index_jawab()
	{
		$jawaban = $this->jawaban_dinasview->GetJawaban();
		$data['pengaduan'] = $this->Pengaduan_view->GetJawaban();
		$this->template->load('admin/static_admin','admin/home_admin',$data);
		
	}
}
