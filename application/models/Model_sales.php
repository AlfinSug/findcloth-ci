<?php

class Model_sales extends CI_Model
{
    public function viewDataSales()
    {
        return $this->db->query('select s.id_sales, c.nama_customer, b.nama_baju, b.harga_baju, s.total_pembelian, s.tgl_penj from penjualan s inner join customer c on c.id_customer = s.id_customer inner join baju b on b.id_baju=s.id_baju;')->result_array();
    }

    public function inSales()
    {
        $data = array(
            'id_customer' => $this->input->post('id_customer', true),
            'id_baju' => $this->input->post('id_baju', true),
            'total_pembelian' => $this->input->post('total_pembelian', true),
            'tgl_penj' => $this->input->post('tgl_penj', true)
        );

        $this->db->insert('penjualan', $data);
        $this->session->set_flashdata('sukses', '<script>alert("Data penjualan telah berhasil di tambahkan");</script>');
        redirect('sales');
    }

    public function upSales($data, $id_sales)
    {
        $this->db->where('id_sales', $id_sales);
        $this->db->update('penjualan', $data);
        return true;
    }


    public function getID($id_sales)
    {
        $this->db->where('id_sales', $id_sales);
        $sql = $this->db->get('penjualan');
        return $sql->row();
    }

    public function delSales($id_sales)
    {
        $this->db->where('id_sales', $id_sales);
        $this->db->delete('penjualan');
        $this->session->set_flashdata('sukses', '<script>alert("Data penjualan telah berhasil di hapus");</script>');
        redirect('sales');
    }
}
