<?php

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_cust');
    }
    public function index()
    {
        $data['judul']  = 'Customer';
        $data['customer'] = $this->Model_cust->viewDataCustomer();
        $this->load->view('navbar/nav', $data);
        $this->load->view('customer', $data);
    }
    public function insert()
    {
        return $this->Model_cust->inCustomer();
    }

    public function updated($id_cust)
    {
        $custById = $this->Model_cust->getID($id_cust);
        $data_c = array(
            'data_cust' => $custById
        );
        $data['judul']  = 'Edit Customer';
        $this->load->view('navbar/nav', $data);
        $this->load->view('update-form/update_cust', $data_c);
    }
    public function delete($id_cust)
    {
        return $this->Model_cust->delCustomer($id_cust);
    }

    public function update_customer()
    {
        $id_cust = $this->input->post('id_customer');
        $data = array(
            'nama_customer' => $this->input->post('nama_customer'),
            'no_telp' => $this->input->post('no_telp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        );

        $this->Model_cust->upCustomer($data, $id_cust);
        $this->session->set_flashdata('sukses', '<script>alert("Data Customer telah berhasil di ubah");</script>');
        redirect('customer');
    }
}
