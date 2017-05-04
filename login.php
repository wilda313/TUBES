<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Pengaduan_view');
		$this->load->model('login_user');
	}

	public function index()
	{
		$pengaduan = $this->Pengaduan_view->GetPengaduan();
		$data['pengaduan'] = $this->Pengaduan_view->GetPengaduan();
		$this->template->load('static_login','form_login',$data);
		
	}
	public function readmore(){
		$kode_laporan = $this->uri->segment(3);
		$data['pengaduan'] = $this->Pengaduan_view->GetPengaduanSingle($kode_laporan)->result();
		$this->template->load('static_login','readmore',$data);
	}
	public function Aksilogin(){
		$data = array(	
						'username'=> $this->input->post('username'),
						'password'=> md5($this->input->post('password')));

		$session = array (
			'username'=>$data['username'],
			);
		$this->session->set_userdata($session);
		$result=$this->login_user->loginAkun('user',$data);
		if($result->num_rows()>0){
			redirect(base_url('index.php/home'));
			
		}else{
			echo "<center><br><br><br><h3> LOGIN GAGAL<br> Username atau Password anda tidak benar<br></center>";
			echo "<center>[ <a href='<?php echo base_url();?>index.php/login'><b>LOGIN ULANG</b></a> ] </center>";
		}
		
	}
}
