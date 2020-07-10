<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // $this->load->model('Model_login');
        //     $session =  $this->Model_login->check_session();
        //     if (!$session) {
        //         $this->session->set_flashdata('session_failed', '<script>alert("Anda harus login terlebih dahulu");</script>');
        //         redirect('login');
        //     } else {
        //         $data['judul'] = 'Home';
        //         $this->load->view('navbar/nav', $data);
        //         $this->load->view('home');
        //     }

        $data['judul'] = 'Home';
        $this->load->view('navbar/nav', $data);
        $this->load->view('home');
    }
}
