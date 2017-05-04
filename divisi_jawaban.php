<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi_jawaban extends CI_Controller {

	public function index()
	{
		$this->template->load('static_admin','divisi');

	}

	public function insert(){
		$data = array(	
						'jawaban'=>  $this->input->post('jawaban'),
						'kode_laporan'=>$this->input->post('kode_laporan')
						);
		$insert = $this ->pengaduan_insert->insertData('divisi',$data);
		if ($insert > 0){
			redirect(base_url('index.php/admin'));
		}else{
			echo '</script> gagal di input </script>';
		}
	}
	
}