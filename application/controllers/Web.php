<?php
defined('BASEPATH') or exit('No Direct Script access allowed');
class Web extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->Model('M_data');
    }

    public function index()
    {
        $data['artikel'] = $this->db->query("SELECT * FROM artikel,pengguna,kategori WHERE artikel_status='publish' AND artikel_author=pengguna_id AND artikel_kategori=kategori_id ORDER BY artikel_id DESC LIMIT 3")->result();
        $data['inclue'] = 'v_layanan.php';

        // die("ok");

        $this->load->view('v_index', $data);
        $this->load->view('v_slider');
        $this->load->view('v_footer');
    }



    public function about()
    {

        $this->load->view('v_navbar');
        $this->load->view('v_layanan');
        $this->load->view('v_slider');
        $this->load->view('v_footer');
    }
    public function tentang()
    {

        $this->load->view('tentang/v_navbar1');
        $this->load->view('tentang/v_tentang');
        $this->load->view('v_footer');
    }
    public function single($slug)
    {
        $data['artikel'] = $this->db->query("SELECT * FROM artikel,pengguna,kategori WHERE artikel_status='publish' AND artikel_author=pengguna_id AND artikel_kategori=kategori_id AND artikel_slug='$slug'")->result();
        $this->load->view('v_index', $data);
    }
    public function blog()
    {

        // data pengaturan website
        $data['pengaturan'] = $this->M_data->get_data('pengaturan')->row();

        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;


        // $this->load->database();
        $jumlah_data = $this->M_data->get_data('artikel')->num_rows();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'blog/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 2;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $from = $this->uri->segment(2);
        if ($from == "") {
            $from = 0;
        }
        $this->pagination->initialize($config);

        $data['artikel'] = $this->db->query("SELECT * FROM artikel,pengguna,kategori WHERE artikel_status='publish' AND artikel_author=pengguna_id AND artikel_kategori=kategori_id ORDER BY artikel_id DESC LIMIT $config[per_page] OFFSET $from")->result();


        $this->load->view('v_blog', $data);
        $this->load->view('v_footer', $data);
    }
}