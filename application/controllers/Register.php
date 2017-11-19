<?php
/**
* 
*/
class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryexecute');
	}

	function index()
	{
		$this->load->view('login_registrasi/daftar');
	}

	function tambah_Akun_Aksi(){
		$data = array(
			'username' => $this->input->post('username'),
			'pwd' => $this->input->post('pwd'),
			'nohp' => $this->input->post('nohp')
		);
		$this->Queryexecute->tambahAkun($data);
		redirect(site_url('Home'));
	}

	function tambah_Akun(){
		$data = array(
			'action' => site_url('Register/tambah_Akun_Aksi'),
			'username' =>set_value('username'),
			 'pwd' =>set_value('pwd'),
			 'nohp' =>set_value('nohp')
			);

		$this->load->view('login_registrasi/daftar',$data);
	}
}
?>