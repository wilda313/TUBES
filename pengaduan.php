<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	public function index()
	{
		$this->template->load('static','pengaduan');

	}

	public function insert(){
		$data = array(	
						'kode_laporan'=>$this->input->post('kode_laporan'),
						'tgl_melapor'=>  $this->input->post('tgl_melapor'),
						'divisi' => $this->input->post('divisi'),
						'judul_laporan'=> $this->input->post('judul_laporan'),
						'laporan'=> $this->input->post('laporan'),
						'username'=>$this->session->username
						);
		$insert = $this ->pengaduan_insert->insertData('pengaduan',$data);
		if ($insert > 0){
			redirect(base_url('index.php/Pengaduan'));
		}else{
			echo '</script> gagal di input </script>';
		}
	}
}
