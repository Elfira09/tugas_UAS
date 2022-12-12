<?php

class Data extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->Model('M_data');
        $this->load->helper(array('form', 'url'));
    }
    function user()
    {
        $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('jadwal/v_jadwal', $data);
    }

    function index()
    {
        $data['dokter'] = $this->db->get('tbl_dokter')->result();


        $this->load->view('jadwal/v_navbar2');
        $this->load->view('jadwal/v_jadwal', $data);
    }
    function show_by_id()
    {
        $id_dokter = $_GET['id_dokter1'];
        $sql_dokter = "select * from tbl_dokter where id_dokter1='$id_dokter'";
        $dokter = $this->db->query($sql_dokter)->row_Array();
        $data = array(
            'id_dokter' => $dokter['id_dokter1'],
            'nama_dokter' => $dokter['nama_dokter'],
            'alamat' => $dokter['alamat'],
            'jenis_dokter' => $dokter['jenis_dokter'],
            'no_hp' => $dokter['no_hp'],
            'foto' => $dokter['foto'],
        );
        echo json_encode($data);
    }

    function add()
    {
        if (isset($_POST['submit'])) {
            $upload = $this->do_upload();
            $this->M_data->add($upload);
            redirect('Dokter');
        } else {
            $this->load->view('jadwal/v_jadwal', $data);
        }
    }
    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $uploads = $this->upload->data();
            return $uploads['file_name'];
        } else {
            $data = array('upload_data' => $this->upload->data());

            $$uploads = $this->upload->data();
            return $uploads['file_name'];
        }
    }

    function update()
    {
        if (isset($_POST['submit'])) {
            $upload = $this->upload();
            $this->Model_dokter->edit($upload);
            redirect('Dokter');
        } else {
            $this->load->view('jadwal/v_jadwal', $data);
        }
    }

    function Hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_dokter1', $id);
        $this->db->delete('tbl_dokter');
        redirect('Dokter');
    }
}