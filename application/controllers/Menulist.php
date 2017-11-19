<?php 

class Menulist extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryexecute');
	}
	function home()
	{
		$this->load->view('home');
	}

/**
* 
Guest----------------------------------------------------------------------
*/
	function biscuitGuest()
	{
		$data['resultKue']	= $this->Queryexecute->searchKue();
		$this->load->view('guest/biscuit', $data);
	}
	function noodleGuest()
	{
		$data['resultMie']	= $this->Queryexecute->searchMie();
		$this->load->view('guest/noodle', $data);
	}
	function contactGuest()
	{
		$this->load->view('guest/contact');
	}
	
	function register()
	{
		$this->load->view('login_registrasi/register');
	}

/**
* 
Member----------------------------------------------------------------------
*/
	function biscuitMember()
	{
		$data['resultKueMember']	= $this->queryExecute->searchKueMember();
		$this->load->view('member/biscuitMember', $data);
	}
	function noodleMember()
	{
		$data['resultMieMember']	= $this->queryExecute->searchMieMember();
		$this->load->view('member/noodleMember', $data);
	}
	function contactMember()
	{
		$this->load->view('member/contactMember');
	}
	function profilMember()
	{
		$data['dataMember']=$this->queryExecute->ambil_username($this->session->userdata('username'));
		$data['resultOrder']=$this->queryExecute->searchOrder($this->session->userdata('username'));
		$this->load->view('member/profilMember', $data);
	}
	function editProfil()
	{
		$data['dataMember']=$this->queryExecute->ambil_member_id($this->session->userdata('idMember'));
		$this->load->view('member/profilMember', $data);
	}
	function order()
	{
		$this->load->view('member/order');
	}


}

 ?>