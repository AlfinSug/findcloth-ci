<?php

class Model_login extends CI_Model
{

    public function check_session()
    {
        return $this->session->userdata('id_kasir');
    }
    public function this_login($nama_kasir, $no_telp)
    {
        $this->db->where('nama_kasir', $nama_kasir);
        $this->db->where('no_telp', $no_telp);
        $query = $this->db->get('kasir');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'nama_kasir' => $row->nama_kasir,
                    'no_telp' => $row->$no_telp
                );
            }
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            $this->session->set_flashdata('info', '<script>alert("Username atau Password salah!")</script>');
            redirect('login');
        }
    }
}
