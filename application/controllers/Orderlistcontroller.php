<?php
/**
* 
*/
class Orderlistcontroller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Queryexecute');
	}
	function orderlist()
	{
		$data['dataOrder']=$this->Queryexecute->ambil_data_order();
		$this->load->view('admin/orderlist', $data);
	}

	function download()
	{
		$this->load->helper('download');
		$mytext = "Maaf order list anda tidak bisa di download. Harap melihat di websitenya saja.";
		$fileName = "maaf.text";
		force_download($fileName, $mytext);
	}
}