<?php
/**
* 
*/
class Listtempatcontroller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryexecute');
	}
	function listTempat()
	{
		$data['dataTempat']=$this->Queryexecute->ambil_data_tempat();
		$this->load->view('admin/listTempat', $data);
	}
}