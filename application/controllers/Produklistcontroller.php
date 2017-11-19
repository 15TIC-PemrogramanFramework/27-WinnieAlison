<?php
/**
* 
*/
class Produklistcontroller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryexecute');
	}
	function produklist()
	{
		$data['dataProduk']=$this->Queryexecute->ambil_data_produk();
		$this->load->view('admin/produklist', $data);
	}
}