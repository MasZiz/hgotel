<?php
defined('BASEPATH') or exit('No direct script access allowed');

class userkojez extends CI_Controller
{
	public function index()
	{
		$this->load->model('adminda');

		$data['userAccess'] = $this->adminda->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminda->tipeKamar()->result_array();

		$data['title'] = 'Gemirlap Hotel';
		$this->load->view('uzerkojez',  $data);
	}

	public function booking()
	{
		$this->load->model('modeluser');


		$this->load->model('modeluser');
		$data['get_user'] = $this->modeluser->get_user()->row_array();
		$this->load->model('adminda');
		$data['tipeKamar'] = $this->adminda->tipeKamar()->result_array();


		$data['title'] = 'Booking Room';
		$this->load->view('uzerboking',  $data);
	}

	public function tambahBooking()
	{
		$data_user = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();
		$chekin = $this->input->post('chekin');
		$chekout = $this->input->post('chekout');
		$tipe_kamar = $this->input->post('tipe_kamar');

		$add = array(
			'tanggal_mulai' => $chekin,
			'tanggal_selesai' => $chekout,
			'tipe_kamar' => $tipe_kamar,
			'username' => $data_user['username'],
			'user_id' => $data_user['id'],
			'kode_booking' => $data_user['id'] . '/' . date('d/m/y')
		);

		$this->load->model('modeluser');
		$this->modeluser->userBooking($add);
		redirect('userkojez/kodeBooking');
	}

	public function kodeBooking()
	{
		$this->load->model('join');
		$data['detailBook'] = $this->join->booking()->result_array();
		$data['detailbook'] = $this->join->booking()->row_array();

		$this->load->model('adminda');
		$data['userAccess'] = $this->adminDa->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminDa->tipeKamar()->result_array();

		$data['title'] = 'Kode Booking';
		$this->load->view('kode', $data);
	}
	public function pdf_booking()
	{
		$this->load->model('join');
		$data['detailBook'] = $this->join->booking()->result_array(); 
		$data['detailbook'] = $this->join->booking()->row_array(); 
		$this->load->model('adminda');
		$data['userAccess'] = $this->adminda->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminda->tipeKamar()->result_array();  


	    $data = array(
	        "dataku" => array(
	            "nama" => "Petani Kode",
	            "url" => "http://petanikode.com"
	        )
	    );

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "booking.pdf";
		$data['title'] = 'Bukti Booking';
	    $this->pdf->load_view('PDF', $data);


	}

}
