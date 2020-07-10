<?php

class Arrival extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_arrival');
    }
    public function index()
    {
        $data['judul']  = 'Arrival';
        $data['arrival']  = $this->Model_arrival->viewDataArrival();
        $this->load->view('navbar/nav', $data);
        $this->load->view('arrival', $data);
    }

    public function insert()
    {
        return $this->Model_arrival->inArrival();
    }

    public function updated($id_baju)
    {
        $arrivalById = $this->Model_arrival->getID($id_baju);
        $data_arr = array(
            'data_arrival' => $arrivalById
        );
        $data['judul']  = 'Edit Arrival';
        $this->load->view('navbar/nav', $data);
        $this->load->view('update-form/update_arrival', $data_arr);
    }
    public function delete($id_baju)
    {
        return $this->Model_arrival->delArrival($id_baju);
    }

    public function update_arr()
    {
        $id_baju = $this->input->post('id_baju');
        $data = array(
            'nama_baju' => $this->input->post('nama_baju'),
            'harga_baju' => $this->input->post('harga_baju')
        );

        $this->Model_arrival->upArrival($data, $id_baju);
        $this->session->set_flashdata('sukses', '<script>alert("Baju telah berhasil di ubah");</script>');
        redirect('arrival');
    }
}
