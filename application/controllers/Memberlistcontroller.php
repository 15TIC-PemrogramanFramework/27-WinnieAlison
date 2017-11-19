<?php
/**
* 
*/
class Memberlistcontroller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryexecute');
	}
	function memberlist()
	{
		$data['dataMember']=$this->Queryexecute->ambil_data_member();
		$this->load->view('admin/memberlist', $data);
	}
}