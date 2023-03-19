<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_hotel extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('template/az_header', $data);
		$this->load->view('template/az_sidebar');
		$this->load->view('hotel/az_home');
		$this->load->view('template/az_footer');
	}

	public function abot()
	{
		$this->load->view('template/az_header');
		$this->load->view('template/az_sidebar');
		$this->load->view('hotel/az_abot');
		$this->load->view('template/az_footer');
	}
	public function booking()
	{
		$this->load->view('template/az_header');
		$this->load->view('template/az_sidebar');
		$this->load->view('hotel/az_booking');
		$this->load->view('template/az_footer');
	}
	public function fasilitas()
	{
		$this->load->view('template/az_header');
		$this->load->view('template/az_sidebar');
		$this->load->view('hotel/az_fasilitas');
		$this->load->view('template/az_footer');
	}
	public function apartemen()
	{
		$this->load->view('template/az_header');
		$this->load->view('template/az_sidebar');
		$this->load->view('hotel/az_apartemen');
		$this->load->view('template/az_footer');
	}
	public function contac()
	{
		$this->load->view('template/az_header');
		$this->load->view('template/az_sidebar');
		$this->load->view('hotel/az_contac');
		$this->load->view('template/az_footer');
	}

}
