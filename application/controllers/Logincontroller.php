<?php
/**
* 
*/
class Logincontroller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryexecute');
	}

	function index(){
		$this->load->view('login_registrasi/login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$pwd = $this->input->post('pwd');
		$dataLogin = array(
			'username' 	=> $username,
			'pwd' 		=> $pwd
		);
		$cek = $this->Queryexecute->cek_login_member("member", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username' => $username,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(base_url('Home'));
		}else{
			redirect(site_url('Logincontroller'));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Home'));
	}
}
?>