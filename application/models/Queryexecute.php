<?php 
/**
* 
*/
class queryExecute extends CI_Model
{
	//Tabel registrasi
	public $table_member 	= 'member';
	public $id_member		= 'idMember';
	public $username		= 'username';
	public $pwd				= 'pwd';
	public $nohp			= 'nohp';
	public $order_member 	= 'asc';

	//Tabel produk
	public $table_produk	= 'produk';
	public $id_produk		= 'id';
	public $alamat_produk	= 'alamat';
	public $nama 			= 'namaProduk';
	public $harga 			= 'harga';
	public $gambar			= 'gambar';
	public $order_produk	= 'asc';

	//Tabel order
	public $table_order		= 'order';
	public $idOrder 		= 'idOrder';
	public $namaMember		= 'username';
	public $produk			= 'namaProduk';
	public $jumlah			= 'jumlah';
	public $order 			= 'asc';

	//Tabel tempat produksi
	public $table_tempat 	= 'tempatproduksi';
	public $alamat			= 'alamat';
	public $jenis			= 'jenis';
	public $pemilik			= 'pemilik';
	public $order_tempat	= 'asc';

	function __construct()
	{
		parent::__construct();
	}
//Member-----------------------------------------------------------------
	//untuk mengambil semua data member
	function ambil_data_member()
	{
		$this->db->order_by($this->id_member,$this->order_member);
		return $this->db->get($this->table_member)->result();
	}

//Untuk mengambil data member berdasarkan id untuk edit profil
	function ambil_member_username($username)
	{
		$this->db->where($this->username,$username);
		return $this->db->get($this->table_member)->row();
	}


//Untuk mengambil data member berdasarkan username (digunakan pas profile)
	function ambil_username($username)
	{
		$this->db->where($this->username,$username);
		return $this->db->get($this->table_member)->result();

	}

	// Untuk hapus data member
	function hapus_data_member($id_member){
		$this->db->where($this->id_member, $id_member);
		$this->db->delete($this->table_member);
	}

	//untuk mengedit data member
	function edit_data_member($id_member, $data){
		$this->db->where($this->id_member, $id_member); //cari id nya
		$this->db->update($this->table_member,$data); //lakukan update
	}

//Produk-------------------------------------------------------------------------------
	//Tambah Produk
	function tambahProduk($data){
		$this->db->insert($this->table_produk, $data);
	}
	//Untuk mengambil semua data produk
	function ambil_data_produk()
	{
		$this->db->order_by($this->id_produk,$this->order_produk);
		return $this->db->get($this->table_produk)->result();
	}

function ambil_produk_id_edit($id_produk)
	{
		$this->db->where($this->id_produk,$id_produk);
		return $this->db->get($this->table_produk)->row();

	}

	function ambil_produk_id_order($id_produk)
	{
		$this->db->where($this->id_produk,$id_produk);
		return $this->db->get($this->table_produk)->result();

	}

	function ambil_nama($nama)
	{
		$this->db->where($this->nama,$nama);
		return $this->db->get($this->table_produk)->result();

	}

	// Untuk hapus data produk
	function hapus_data_produk($id_produk){
		$this->db->where($this->id_produk, $id_produk);
		$this->db->delete($this->table_produk);
	}

	//untuk mengedit data produk
	function edit_data_produk($id_produk, $data){
		$this->db->where($this->id_produk, $id_produk); //cari id nya
		$this->db->update($this->table_produk,$data); //lakukan update
	}

//Order------------------------------------------------------------------------------
	//Tambah Order
	function tambahOrder($data){
		$this->db->insert($this->table_order, $data);
	}
	//Untuk mengambil semua data produk
	function ambil_data_order()
	{
		$this->db->order_by($this->idOrder,$this->order);
		return $this->db->get($this->table_order)->result();
	}

	function ambil_nama_order($namaMember)
	{
		$this->db->where($this->namaMember,$namaMember);
		return $this->db->get($this->table_order)->result();

	}

	// Untuk hapus data produk
	function hapus_data_order($idOrder){
		$this->db->where($this->idOrder, $idOrder);
		$this->db->delete($this->table_order);
	}

	//untuk mengedit data produk
	function edit_data_order($idOrder, $data){
		$this->db->where($this->idOrder, $idOrder); //cari id nya
		$this->db->update($this->table_order,$data); //lakukan update
	}

//Login-------------------------------------------------------
	//Tambah Member
	function tambahAkun($dataMember){
		$this->db->insert($this->table_member, $dataMember);
	}
	//cek login
	function cek_login_member($table_member, $data_login){
		return $this->db->get_where($table_member, $data_login);
	}

//Tempat Produksi --------------------------------------------------------------------------
	function ambil_data_tempat()
	{
		$this->db->order_by($this->alamat,$this->order_tempat);
		return $this->db->get($this->table_tempat)->result();
	}

	//search di guest
function searchKue()
{
	$this->db->like('namaProduk', 'Kue');
	$query = $this->db->get($this->table_produk);
	return $query->result();
}

function searchMie()
{
	$this->db->like('namaProduk', 'Mie');
	$query = $this->db->get($this->table_produk);
	return $query->result();
}

//search di member
function searchKueMember()
{
	$this->db->like('namaProduk', 'Kue');
	$query = $this->db->get($this->table_produk);
	return $query->result();
}

function searchMieMember()
{
	$this->db->like('namaProduk', 'Mie');
	$query = $this->db->get($this->table_produk);
	return $query->result();
}

function searchOrder($username)
{
	$this->db->like('username', $username);
	$query = $this->db->get($this->table_order);
	return $query->result();
}
}
?>