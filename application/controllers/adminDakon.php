<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminDakon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('adminDa');

		$data['userAccess'] = $this->adminDa->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminDa->tipeKamar()->result_array();

		$data['title'] = 'Dashboard Gemirlap Hotel';
		$this->load->view('dashboard/atas',  $data);
		$this->load->view('dashboard/tengah');
		$this->load->view('profil');
		$this->load->view('dashboard/bawah');
	}
	
	public function masterData()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('adminDa');

		$data['userAccess'] = $this->adminDa->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminDa->tipeKamar()->result_array();


		$data['title'] = 'Dashboard Gemirlap Hotel';
		$this->load->view('dashboard/atas',  $data);
		$this->load->view('dashboard/tengah',  $data);
		$this->load->view('dashboard/masdat',  $data);
		$this->load->view('dashboard/bawah',  $data);
	}
	public function tambah_kamar()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('adminDa');

		$data['userAccess'] = $this->adminDa->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminDa->tipeKamar()->result_array();

		$data['title'] = 'Dashboard Gemirlap Hotel';
		$this->load->view('dashboard/atas',  $data);
		$this->load->view('dashboard/tengah');
		$this->load->view('dashboard/tipe_kamar');
		$this->load->view('dashboard/bawah');
	}
	// Room
	public function room($kamar)
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('adminDa');
		$data['tipeKamar'] = $this->adminDa->tipeKamar()->result_array();
		$data['tipekamar'] = $this->adminDa->tipeKamar()->row_array();
		$id_tipe_kamar=$this->db->get_where('tipe_kamar',['nama_kamar'=>$kamar])->row_array();
		$data['kamar'] = $this->adminDa->get_kamar($id_tipe_kamar['id'])->result_array();
		$data['tipe'] = $kamar;


		$this->load->model('Join');

		$data['list_kamar'] = $this->Join->ruanganId($kamar)->result_array();

		$data['title'] = 'Room';
		$this->load->view('dashboard/atas',  $data);
		$this->load->view('dashboard/tengah',  $data);
		$this->load->view('dashboard/roomadmin',  $data);
		$this->load->view('dashboard/bawah',  $data);
	}


	public function fungsi_tambahRoom()
	{
		$tipekamar = $this->input->post('tipekamar');
		$nomor_ruangan = $this->input->post('nomor_ruangan');
		$status = $this->input->post('status');

		$add = array(
			'id_tipe_kamar' => $tipekamar,
			'nomor_ruangan' => $nomor_ruangan,
			'status' =>	 $status,
		);
		$tipe_redirect = $this->db->get_where('tipe_kamar', ['id' => $tipekamar])->row_array();
		$this->adminDa->tambahRoom($add);
		redirect('adminDakon/room/' . $tipe_redirect['nama_kamar']);
	}


	public function fungsi_editRoom($id)
	{
		$tipekamar = $this->input->post('tipekamar');
		$nomor_ruangan = $this->input->post('nomor_ruangan');
		$status = $this->input->post('status');

		$update = array(
			'id_tipe_kamar' => $tipekamar,
			'nomor_ruangan' => $nomor_ruangan,
			'status' =>	 $status,
		);

		$tipe_redirect = $this->db->get_where('tipe_kamar', ['id' => $tipekamar])->row_array();
		$this->db->where('id', $id);
		$this->db->update('ruangan', $update);
		redirect('adminDakon/room/' . $tipe_redirect['nama_kamar']);
	}

	public function fungsi_deleteRoom($id)
	{
		$id_tipe_kamar = $this->db->get_where('ruangan', ['id' => $id])->row_array();

		$tipe_redirect = $this->db->get_where('tipe_kamar', ['id' => $id_tipe_kamar['id_tipe_kamar']])->row_array();
		$this->db->where('id', $id);
		$this->db->delete('ruangan');
		redirect('adminDakon/room/' . $tipe_redirect['nama_kamar']);
	}

	// Akhir Room



	// Tipe Kamar
	public function form_tambahKamar()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('adminDa');
		$data['userAccess'] = $this->adminDa->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminDa->tipeKamar()->result_array();

		$data['title'] = 'Form Tambah Tipe Kamar';
		$this->load->view('dashboard/atas',  $data);
		$this->load->view('dashboard/tengah',  $data);
		$this->load->view('dashboard/FormKamar',  $data);
		$this->load->view('dashboard/bawah',  $data);
	}

	public function fungsi_tambahKamar()
	{
		$tipekamar = $this->input->post('tipekamar');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');

		// Upload File
		$config['upload_path']          = './assets/img/';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('image');
		$upload_img = $this->upload->data('file_name');


		$add = array(
			'nama_kamar' => $tipekamar,
			'fasilitas_kamar' => $fasilitas,
			'tipe_harga' => $harga,
			'tanggal_update' => $tanggal,
			'img' => $upload_img,
		);

		$this->load->model('adminDa');
		$this->adminDa->tambahKamar($add);

		redirect('adminDakon/tambah_kamar');
	}

	public function fungsi_editKamar($id)
	{
		$tipekamar = $this->input->post('tipekamar');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');

		// Upload File
		$config['upload_path']          = './assets/img/';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('image');
		$upload_img = $this->upload->data('file_name');

		$update = array(
			'nama_kamar' => $tipekamar,
			'fasilitas_kamar' => $fasilitas,
			'tipe_harga' => $harga,
			'tanggal_update' => $tanggal,
			'img' => $upload_img,
		);

		$this->db->where('id', $id);
		$this->db->update('tipe_kamar', $update);

		redirect('admindakon/tambah_kamar');
	}

	public function fungsi_deletKamar($id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete('tipe_kamar');
		redirect('adminDakon/tambah_kamar');
	}
	// Akhir Tipe Kamar

	// Usser Acces
	public function fungsi_editUser($id)
	{
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');

		$update = array(
			'nama' => $nama,
			'level' => $level,
		);

		$this->db->where('id', $id);
		$this->db->update('user_pengguna', $update);
		redirect('admindakon/masterData');
	}

	public function fungsi_deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_pengguna');
		redirect('adminDakon/masterData');
	}
	// Akhir Usser Acces

	// Booking 
	public function detailBook()
	{

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('join');
		$data['detailBook'] = $this->join->booking()->result_array(); 

		$this->load->model('adminDa');
		$data['userAccess'] = $this->adminDa->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminDa->tipeKamar()->result_array();   

		$data['title'] = 'Booking';
		$this->load->view('dashboard/atas',  $data);
		$this->load->view('dashboard/tengah',  $data);
		$this->load->view('dashboard/detailBook',  $data);
		$this->load->view('dashboard/bawah',  $data);
	}

	public function deleteBook($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('booking');
		redirect('adminDakon/detailBook');
	}
	// Akhir book

}                
