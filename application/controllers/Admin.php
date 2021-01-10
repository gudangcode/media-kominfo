<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != "2") {
            redirect('akses/blocked');
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin/header-admin', $data);
        $this->load->view('templates/admin/sidebar-admin', $data);
        $this->load->view('templates/admin/topbar-admin', $data);
        $this->load->view('admin/admin/index', $data);
        $this->load->view('templates/admin/footer-admin');
    }
}
