<?php 

/**
* 
*/
class Ordercontroller extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Queryexecute');
		/*if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true) //sessionnya namanya logined
		{
			redirect('/');
		}*/
	}

	function index()
	{
		$data['dataOrder']=$this->Queryexecute->ambil_data_order();
		$this->load->view('admin/orderlist',$data);
	}

	function tambah($id)
	{
		
		$orderform=$this->Queryexecute->ambil_produk_id_order($id);
		$data=array(
			'action'	=>site_url('Ordercontroller/tambah_aksi'),
			'username'	=>set_value('username'),
			'namaProduk'=>set_value('namaProduk',$orderform[0]->namaProduk),
			'jumlah'	=>set_value('jumlah'),
			'id'		=>set_value('id',$orderform[0]->id),
			'button'	=>'Tambah'
		);
		$this->load->view('member/orderForm',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'username'	=>$this->input->post('username'), //apa yang diinputkan
			'namaProduk'=>$this->input->post('namaProduk'),
			'jumlah'	=>$this->input->post('jumlah')
		);
		$this->Queryexecute->tambahOrder($data); //untuk memanggil function tmabah dari mahasiswa_model agar insert ke database
		redirect(site_url('Menulist/profilMember')); //gunanya untuk mengembalikan ke mahasiswa
	}

	function hapus_order($idOrder){
		$this->Queryexecute->hapus_data_order($idOrder);
		redirect(site_url('Orderlistcontroller/orderlist'));
	}
}

?>