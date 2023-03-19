<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_dashboard extends CI_Controller
{

	public function index()
	
    {
       $data['user'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();
       $this->load->view('hotel/az_dashboard', $data);
    }
}
