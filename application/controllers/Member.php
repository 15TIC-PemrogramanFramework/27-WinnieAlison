<?php 

/**
* 
*/
class Member extends CI_Controller
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
		$data['dataMember']=$this->Queryexecute->ambil_data_member();
		$data['dataOrder']=$this->Queryexecute->searchOrder();
		$this->load->view('admin/memberlist',$data);
	}
/*
	public function tambah()
	{
		$data=array(
			'action'	=>site_url('mahasiswa/tambah_aksi'),
			'nim'		=>set_value('nim'),
			'nama'		=>set_value('nama'),
			'jurusan'	=>set_value('jurusan'),
			'id'		=>set_value('id'),
			'button'	=>'Tambah'
		);
		$this->load->view('mahasiswa/mahasiswa_form',$data);
	}*/

	/*function tambah_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'), //apa yang diinputkan
			'nama'		=>$this->input->post('nama'),
			'jurusan'	=>$this->input->post('jurusan')
		);
		$this->mahasiswa_model->tambah_data($data); //untuk memanggil function tmabah dari mahasiswa_model agar insert ke database
		redirect(site_url('mahasiswa')); //gunanya untuk mengembalikan ke mahasiswa
	}*/

	function hapus_member($idMember){
		$this->Queryexecute->hapus_data_member($idMember);
		redirect(site_url('Memberlistcontroller/memberlist'));
	}

	function edit_member($username){
		//pengambilan data per id
		//print_r($this->mahasiswa_model->ambil_data_id($id));
		$member=$this->Queryexecute->ambil_member_username($username);
		$data=array(
			'idMember'	=>set_value('$id', $member->idMember), //nama variable yang akan dikirim ke view
			'username'	=>set_value('$nama', $member->username), 
			'pwd'		=>set_value('$pwd', $member->pwd),
			'nohp'		=>set_value('$nohp', $member->nohp),
			'action'	=>site_url('Member/edit_member_aksi'),
			'button'	=>'Edit'
		);
		$this->load->view('login_registrasi/editProfil',$data);
	}

	function edit_member_aksi(){
		$data=array(
			'idMember'	=>$this->input->post('idMember'),
			'username'	=>$this->input->post('username'),
			'pwd'		=>$this->input->post('pwd'),
			'nohp'		=>$this->input->post('nohp')
		);
		$id=$this->input->post('idMember');
		$this->Queryexecute->edit_data_member($id,$data);
		redirect(site_url('Menulist/profilMember'));
	}
}

?>