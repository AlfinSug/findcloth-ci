<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function login_admin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kasir', 'Nama Kasir', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telpon', 'required');

        if ($this->form_validation->run()) {
            $nama_kasir = $this->input->post('nama_kasir');
            $no_telp = $this->input->post('no_telp');
            $this->Model_login->this_login($nama_kasir, $no_telp);
        } else {
            $this->load->view('login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_success', '<script>alert("Anda berhasil logout")</script>');
        redirect('login');
    }
}
