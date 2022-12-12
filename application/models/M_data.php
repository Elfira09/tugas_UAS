<?php

class M_data extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    // fungsi untuk mengambil data dari database
    function get_data($table)
    {
        return $this->db->get($table);
    }
    // fungsi untuk menginput data ke database
    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    // fungsi untuk mengedit data
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // fungsi untuk menghapus data dari database
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }

    // AKHIR FUNGSI CRUD
    function ambil_data()
    {
        return $this->db->get('user');
    }
    function add($foto)
    {
        $data = array(
            'nama_dokter' => $this->input->post('nama_dokter'),
            'alamat' => $this->input->post('alamat'),
            'jenis_dokter' => $this->input->post('jenis'),
            'no_hp' => $this->input->post('no_hp'),
            'foto' => $foto
        );
        $this->db->insert('tbl_dokter', $data);
    }
    function edit($foto)
    {
        if (empty($foto)) {
            $data = array(
                'nama_dokter' => $this->input->post('nama_dokter'),
                'alamat' => $this->input->post('alamat'),
                'jenis_dokter' => $this->input->post('jenis'),
                'no_hp' => $this->input->post('no_hp'),
            );
            $id_dokter = $this->input->post('id_dokter');
            $this->db->where('id_dokter', $id_dokter);
            $this->db->update('tbl_dokter', $data);
        } else {
            $data = array(
                'nama_dokter' => $this->input->post('nama_dokter'),
                'alamat' => $this->input->post('alamat'),
                'jenis_dokter' => $this->input->post('jenis'),
                'no_hp' => $this->input->post('no_hp'),
                'foto' => $foto
            );
            $id_dokter = $this->input->post('id_dokter');
            $this->db->where('id_dokter', $id_dokter);
            $this->db->update('tbl_dokter', $data);
        }
    }
}