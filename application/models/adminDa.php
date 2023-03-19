<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminDa extends CI_Model
{

    public function userAccess()
    {
        return $this->db->get('user_pengguna');
    }

    public function tipeKamar()
    {
        return $this->db->get('tipe_kamar');
    }

    public function get_kamar($kamar)
    {
        return $this->db->get_where('ruangan', ['id_tipe_kamar' => $kamar]);
    }

    public function tambahKamar($add)
    {
        $this->db->insert('tipe_kamar', $add);
    }

    public function tambahRoom($add)
    {
        $this->db->insert('ruangan', $add);
    }
}