<?php

class Model_cust extends CI_Model
{
    public function viewDataCustomer()
    {
        return $this->db->get('customer')->result_array();
    }

    public function selectCustomer()
    {
        $result = $this->db->get('customer');

        $selection[''] = 'Pilih Nama Customer';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $selection[$row->id_customer] = $row->nama_customer;
            }
        }
        return $selection;
    }
    public function inCustomer()
    {
        $data = array(
            'nama_customer' => $this->input->post('nama_customer', true),
            'no_telp' => $this->input->post('no_telp', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true)
        );

        $this->db->insert('customer', $data);
        $this->session->set_flashdata('sukses', '<script>alert("Data customer telah berhasil di tambahkan");</script>');
        redirect('customer');
    }

    public function upCustomer($data, $id_cust)
    {
        $this->db->where('id_customer', $id_cust);
        $this->db->update('customer', $data);
        return true;
    }

    public function getID($id_cust)
    {
        $this->db->where('id_customer', $id_cust);
        $sql = $this->db->get('customer');
        return $sql->row();
    }

    public function delCustomer($id_cust)
    {
        $this->db->where('id_customer', $id_cust);
        $this->db->delete('customer');
        $this->session->set_flashdata('sukses', '<script>alert("Data Customer telah berhasil di hapus");</script>');
        redirect('customer');
    }
}
