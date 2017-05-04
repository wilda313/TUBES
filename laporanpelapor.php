<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanpelapor extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Laporanpelapor_view');
	}

	public function index()
	{
		$data['pengaduan'] = $this->Laporanpelapor_view->GetPengaduanSaya($this->session->username);
		$this->template->load('static','laporanpelapor',$data);
	}
}
