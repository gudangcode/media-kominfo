<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != "3") {
            redirect('akses/blocked');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman User Media Kominfo Tulang Bawang Barat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin/header-admin', $data);
        $this->load->view('templates/admin/sidebar-user', $data);
        $this->load->view('templates/admin/topbar-admin', $data);
        $this->load->view('admin/media/index', $data);
        $this->load->view('templates/admin/footer-admin');
    }
}
