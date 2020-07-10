<?php

class Model_arrival extends CI_Model
{
    public function viewDataArrival()
    {
        return $this->db->get('baju')->result_array();
    }
    public function selectArrival()
    {
        $result = $this->db->get('baju');

        $selection[''] = 'Pilih Merk Baju';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $selection[$row->id_baju] = $row->nama_baju;
            }
        }
        return $selection;
    }

    public function inArrival()
    {
        $data = array(
            'nama_baju' => $this->input->post('nama_baju', true),
            'harga_baju' => $this->input->post('harga_baju', true)
        );

        $this->db->insert('baju', $data);
        $this->session->set_flashdata('sukses', '<script>alert("Baju telah berhasil di tambahkan");</script>');
        redirect('arrival');
    }

    public function upArrival($data, $id_baju)
    {
        $this->db->where('id_baju', $id_baju);
        $this->db->update('baju', $data);
        return true;
    }


    public function getID($id_baju)
    {
        $this->db->where('id_baju', $id_baju);
        $sql = $this->db->get('baju');
        return $sql->row();
    }

    public function delArrival($id_baju)
    {
        $this->db->where('id_baju', $id_baju);
        $this->db->delete('baju');
        $this->session->set_flashdata('sukses', '<script>alert("Baju telah berhasil di hapus");</script>');
        redirect('arrival');
    }
}
