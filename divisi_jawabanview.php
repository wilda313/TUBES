<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi_jawabanview extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('divisi_jawabanview');
	}

	public function index()
	{
		$divisi = $this->jawaban_dinasview->GetJawaban();
		$data['divisi'] = $this->jawaban_dinasview->GetJawaban();
		$this->template->load('static','home',$data);
		
	}
	public function readmore(){
		$kode_laporan = $this->uri->segment(3);
		$data['divisi'] = $this->divisi_jawabanview->GetJawabanSingle($kode_laporan)->result();
		$this->template->load('static','readmore',$data);

	}
}