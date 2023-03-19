<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_hotel2 extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('template/az_header', $data);
		$this->load->view('template/az_sidebar2');
		$this->load->view('hotel/az_home');
		$this->load->view('template/az_footer');
	}

	public function abot()
	{
		$data['title'] = 'about';
		$this->load->view('template/az_header', $data);
		$this->load->view('template/az_sidebar2');
		$this->load->view('hotel/az_abot');
		$this->load->view('template/az_footer');
	}
	public function booking()
	{
		$data['title'] = 'booking';
		$this->load->view('template/az_header', $data);
		$this->load->view('template/az_sidebar2');
		$this->load->view('hotel/az_booking');
		$this->load->view('template/az_footer');
	}
	public function fasilitas()
	{
		$data['title'] = 'fasilitas';
		$this->load->view('template/az_header', $data);
		$this->load->view('template/az_sidebar2');
		$this->load->view('hotel/az_fasilitas');
		$this->load->view('template/az_footer');
	}
	public function apartemen()
	{
		$data['title'] = 'apartemen';
		$this->load->view('template/az_header', $data);
		$this->load->view('template/az_sidebar2');
		$this->load->view('hotel/az_apartemen');
		$this->load->view('template/az_footer');
	}
	public function contac()
	{
		$data['title'] = 'contac';
		$this->load->view('template/az_header', $data);
		$this->load->view('template/az_sidebar2');
		$this->load->view('hotel/az_contac');
		$this->load->view('template/az_footer');
	}
}
