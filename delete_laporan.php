<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_laporan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('pengaduan_delete');
	}

	public function delete($kode)
	{
		$data['pengaduan'] = $this->pengaduan_delete->DeleteData($this->session->username, $kode);
		redirect(base_url('index.php/laporanpelapor'));
	}
}