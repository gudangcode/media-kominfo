<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != "1") {
            redirect('akses/blocked');
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard SuperAdmin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin/header-admin', $data);
        $this->load->view('templates/admin/sidebar-superadmin', $data);
        $this->load->view('templates/admin/topbar-admin', $data);
        $this->load->view('admin/superadmin/index', $data);
        $this->load->view('templates/admin/footer-admin');
    }
}
