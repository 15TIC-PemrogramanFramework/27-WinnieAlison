<?php 

/**
* 
*/
class Produk extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('queryExecute');
		// if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true) //sessionnya namanya logined
		// {
		// 	redirect('/');
		// }
	}

	function index()
	{
		$data['dataProduk']=$this->Queryexecute->ambil_data_produk();
		$this->load->view('admin/produklist',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('Produk/tambah_aksi'),
			'namaProduk'=>set_value('namaProduk'),
			'alamat'	=>set_value('alamat'),
			'harga'		=>set_value('harga'),
			'gambar'	=>set_value('gambar'),
			'id'		=>set_value('id'),
			'button'	=>'Tambah'
		);
		$this->load->view('admin/tambahProduk',$data);
	}

	function tambah_aksi()
	{
		$gambar	= $this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('assets/images/'.$gambar)));
		$data=array(
			'namaProduk'=>$this->input->post('namaProduk'), //apa yang diinputkan
			'alamat'	=>$this->input->post('alamat'),
			'harga'		=>$this->input->post('harga'),
			'gambar'	=>$encoded_image
		);
		$this->Queryexecute->tambahProduk($data); //untuk memanggil function tmabah dari mahasiswa_model agar insert ke database
		redirect(site_url('produk')); //gunanya untuk mengembalikan ke mahasiswa
	}

	function hapus_produk($id){
		$this->Queryexecute->hapus_data_produk($id);
		redirect(site_url('Produklistcontroller/produklist'));
	}

	function edit_produk($id){
		//pengambilan data per id
		//print_r($this->mahasiswa_model->ambil_data_id($id));
		$pro=$this->Queryexecute->ambil_produk_id_edit($id);
		$data=array(
			'id'		=>set_value('$id', $pro->id), //nama variable yang akan dikirim ke view
			'alamat'	=>set_value('$alamat', $pro->alamat), 
			'namaProduk'=>set_value('$namaProduk', $pro->namaProduk), 
			'harga'		=>set_value('$harga', $pro->harga),
			'gambar'	=>set_value('$gambar', $pro->gambar),
			'action'	=>site_url('Produk/edit_produk_aksi'),
			'button'	=>'Edit'
			);
		$this->load->view('admin/editProduk',$data);
	}

	function edit_produk_aksi(){
		$gambar	= $this->input->post('gambar');
		$encoded_image = base64_encode(file_get_contents(base_url('assets/images/'.$gambar)));
		$data=array(
			'namaProduk'=>$this->input->post('namaProduk'), //apa yang diinputkan
			'alamat'	=>$this->input->post('alamat'),
			'harga'		=>$this->input->post('harga'),
			'gambar'	=>$encoded_image
		);
		$id=$this->input->post('id');
		$this->Queryexecute->edit_data_produk($id,$data);
		redirect(site_url('produk'));
	}
}

 ?>