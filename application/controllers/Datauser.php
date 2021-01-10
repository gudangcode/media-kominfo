<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Manajemen User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => ' This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');


        if ($this->form_validation->run() == false) {

            $data['nama'] = $this->db->get('user')->result_array();
            $data['email'] = $this->db->get('user')->result_array();
            $this->load->view('templates/admin/header-admin', $data);
            $this->load->view('templates/admin/sidebar-admin', $data);
            $this->load->view('templates/admin/topbar-admin', $data);
            $this->load->view('admin/admin/data-user', $data);
            $this->load->view('templates/admin/footer-admin');
        }
    }
}
