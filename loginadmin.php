<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginaadmin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('login_admin');
	}

	public function Aksiloginadmin(){
		$data = array(	
						'usernameadmin'=> $this->input->post('usernameadmin'),
						'passwordadmin'=> md5($this->input->post('passwordadmin')));

		$session = array (
			'username'=>$data['username'],
			);
		$this->session->set_userdata($session);
		$result=$this->login_admin->loginakunadmin('divisi',$data);
		if($result->num_rows()>0){
			redirect(base_url('index.php/home_admin'));
			
		}else{
			echo "<center><br><br><br><h3> LOGIN GAGAL<br> Username atau Password anda tidak benar<br></center>";
			echo "<center>[ <a href='<?php echo base_url();?>index.php/login'><b>LOGIN ULANG</b></a> ] </center>";
		}
		
	}
}
