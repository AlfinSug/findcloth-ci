<?php

class Sales extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_sales');
        $this->load->model('Model_arrival');
        $this->load->model('Model_cust');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['judul'] = 'Sales';
        $this->load->view('navbar/nav', $data);
        $data['sales'] = $this->Model_sales->viewDataSales();
        $data['arrival'] = $this->Model_arrival->viewDataArrival();
        $data['customer'] = $this->Model_cust->viewDataCustomer();
        $this->load->view('sales', $data);
    }

    public function insert()
    {
        return $this->Model_sales->inSales();
    }

    public function updated($id_sales)
    {
        $salesById = $this->Model_sales->getID($id_sales);
        // $row = $this->Model_arrival->selectArrival();
        // $show = $this->Model_cust->selectCustomer();
        $data_sale = array(
            'data_sale' => $salesById,
            'arrival' => $this->Model_arrival->viewDataArrival(),
            'customer' => $this->Model_cust->viewDataCustomer()
        );
        $data['judul']  = 'Edit Penjualan';
        $this->load->view('navbar/nav', $data);
        $this->load->view('update-form/update_sales', $data_sale);
    }
    public function delete($id_sales)
    {
        return $this->Model_sales->delSales($id_sales);
    }

    public function update_sale()
    {
        $id_sales = $this->input->post('id_sales');
        $data = array(
            'id_customer' => $this->input->post('id_customer'),
            'id_baju' => $this->input->post('id_baju'),
            'total_pembelian' => $this->input->post('total_pembelian'),
            'tgl_penj' => $this->input->post('tgl_penj')
        );

        $this->Model_sales->upSales($data, $id_sales);
        $this->session->set_flashdata('sukses', '<script>alert("Data Penjualan telah berhasil di ubah");</script>');
        redirect('sales');
    }
}
