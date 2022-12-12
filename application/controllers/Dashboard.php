<?php
defined('BASEPATH') or exit('No Direct Script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()

    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->Model('M_data');
        // cek session yang login,
        // jika session status tidak sama dengan session telah login, berarti pengguna belum login
        // maka halaman akan di alihkan kembali ke halaman login.
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belumlogin');
        }
    }
    public function index()
    {
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_index');
        $this->load->view('dashboard/v_footer');
    }

    public function dokter()
    {
        $data['dokter'] = $this->db->get('tbl_dokter')->result();

        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_datadokter');
        $this->load->view('dashboard/v_footer');
    }
    function show_by_id()
    {
        $id_dokter = $_GET['id_dokter'];
        $sql_dokter = "select * from tbl_dokter where id_dokter='$id_dokter'";
        $dokter = $this->db->query($sql_dokter)->row_Array();
        $data = array(
            'id_dokter' => $dokter['id_dokter'],
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
            $upload = $this->upload();
            $this->M_data->add($upload);
            redirect('Dokter');
        } else {
            $this->load->view('dashboard/v_datadokter');
        }
    }
    public function dokter_tambah()
    {
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_dokter_tambah');
        $this->load->view('dashboard/v_footer');
    }
    public function pages()
    {
        $data['halaman'] = $this->M_data->get_data('halaman')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_pages', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function pages_tambah()
    {
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_pages_tambah');
        $this->load->view('dashboard/v_footer');
    }
    public function pages_aksi()
    {
        // Wajib isi judul,konten
        $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[halaman.halaman_judul]');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        if ($this->form_validation->run() != false) {
            $judul = $this->input->post('judul');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');
            $data = array(
                'halaman_judul' => $judul,
                'halaman_slug' => $slug,
                'halaman_konten' => $konten
            );
            $this->M_data->insert_data($data, 'halaman');
            // alihkan kembali ke method pages
            redirect(base_url() . 'dashboard/pages');
        } else {
            $this->load->view('dashboard/v_header');
            $this->load->view('dashboard/v_pages_tambah');
            $this->load->view('dashboard/v_footer');
        }
    }
    public function pages_edit($id)
    {
        $where = array(
            'halaman_id' => $id
        );
        $data['halaman'] = $this->M_data->edit_data($where, 'halaman')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_pages_edit', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function pages_update()
    {
        // Wajib isi judul,konten 
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');

        if ($this->form_validation->run() != false) {

            $id = $this->input->post('id');

            $judul = $this->input->post('judul');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');

            $where = array(
                'halaman_id' => $id
            );

            $data = array(
                'halaman_judul' => $judul,
                'halaman_slug' => $slug,
                'halaman_konten' => $konten
            );

            $this->M_data->update_data($where, $data, 'halaman');

            redirect(base_url() . 'dashboard/pages');
        } else {
            $id = $this->input->post('id');
            $where = array(
                'halaman_id' => $id
            );
            $data['halaman'] = $this->M_data->edit_data($where, 'halaman')->result();
            $this->load->view('dashboard/v_header');
            $this->load->view('dashboard/v_pages_edit', $data);
            $this->load->view('dashboard/v_footer');
        }
    }
    public function pages_hapus($id)
    {
        $where = array(
            'halaman_id' => $id
        );
        $this->m_data->delete_data($where, 'halaman');
        redirect(base_url() . 'dashboard/pages');
    }
    // CRUD KATEGORI
    public function kategori()
    {
        $data['kategori'] = $this->M_data->get_data('kategori')->result();

        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_kategori', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function kategori_tambah()
    {
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_kategori_tambah');
        $this->load->view('dashboard/v_footer');
    }
    public function kategori_aksi()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        if ($this->form_validation->run() != false) {
            $kategori = $this->input->post('kategori');
            $data = array(
                'kategori_nama' => $kategori,
                'kategori_slug' => strtolower(url_title($kategori))
            );
            $this->M_data->insert_data($data, 'kategori');
            redirect(base_url() . 'dashboard/kategori');
        } else {
            $this->load->view('dashboard/v_header');
            $this->load->view('dashboard/v_kategori_tambah');
            $this->load->view('dashboard/v_footer');
        }
    }
    public function kategori_edit($id)
    {
        $where = array(
            'kategori_id' => $id
        );
        $data['kategori'] = $this->M_data->edit_data($where, 'kategori')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_kategori_edit', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function kategori_update()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        if ($this->form_validation->run() != false) {
            $id = $this->input->post('id');
            $kategori = $this->input->post('kategori');
            $where = array(
                'kategori_id' => $id
            );
            $data = array(
                'kategori_nama' => $kategori,
                'kategori_slug' => strtolower(url_title($kategori))
            );
            $this->M_data->update_data($where, $data, 'kategori');
            redirect(base_url() . 'dashboard/kategori');
        } else {
            $id = $this->input->post('id');
            $where = array(
                'kategori_id' => $id
            );
            $data['kategori'] = $this->M_data->edit_data($where, 'kategori')->result();
            $this->load->view('dashboard/v_header');
            $this->load->view('dashboard/v_kategori_edit', $data);
            $this->load->view('dashboard/v_footer');
        }
    }
    public function kategori_hapus($id)
    {
        $where = array(
            'kategori_id' => $id
        );
        $this->M_data->delete_data($where, 'kategori');
        redirect(base_url() . 'dashboard/kategori');
    }
    public function artikel()
    {
        $data['artikel'] = $this->db->query("SELECT * FROM artikel,kategori,pengguna WHERE 
artikel_kategori=kategori_id and artikel_author=pengguna_id order by artikel_id desc")->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_artikel', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function artikel_tambah()
    {
        $data['kategori'] = $this->M_data->get_data('kategori')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_artikel_tambah', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function artikel_aksi()
    {
        // Wajib isi judul,konten dan kategori
        $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[artikel.artikel_judul]');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        // Membuat gambar wajib di isi
        if (empty($_FILES['sampul']['name'])) {
            $this->form_validation->set_rules('sampul', 'Gambar Sampul', 'required');
        }

        if ($this->form_validation->run() != false) {

            $config['upload_path']   = './gambar/artikel/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('sampul')) {

                // mengambil data tentang gambar
                $gambar = $this->upload->data();

                $tanggal = date('Y-m-d H:i:s');
                $judul = $this->input->post('judul');
                $slug = strtolower(url_title($judul));
                $konten = $this->input->post('konten');
                $sampul = $gambar['file_name'];
                $author = $this->session->userdata('id');
                $kategori = $this->input->post('kategori');
                $status = $this->input->post('status');

                $data = array(
                    'artikel_tanggal' => $tanggal,
                    'artikel_judul' => $judul,
                    'artikel_slug' => $slug,
                    'artikel_konten' => $konten,
                    'artikel_sampul' => $sampul,
                    'artikel_author' => $author,
                    'artikel_kategori' => $kategori,
                    'artikel_status' => $status,
                );

                $this->M_data->insert_data($data, 'artikel');

                redirect(base_url() . 'dashboard/artikel');
            } else {

                $this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());

                $data['kategori'] = $this->M_data->get_data('kategori')->result();
                $this->load->view('dashboard/v_header');
                $this->load->view('dashboard/v_artikel_tambah', $data);
                $this->load->view('dashboard/v_footer');
            }
        } else {
            $data['kategori'] = $this->M_data->get_data('kategori')->result();
            $this->load->view('dashboard/v_header');
            $this->load->view('dashboard/v_artikel_tambah', $data);
            $this->load->view('dashboard/v_footer');
        }
    }
    public function artikel_edit($id)
    {
        $where = array(
            'artikel_id' => $id
        );
        $data['artikel'] = $this->M_data->edit_data($where, 'artikel')->result();
        $data['kategori'] = $this->M_data->get_data('kategori')->result();
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_artikel_edit', $data);
        $this->load->view('dashboard/v_footer');
    }
    public function artikel_update()
    {
        // Wajib isi judul,konten dan kategori
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() != false) {

            $id = $this->input->post('id');

            $judul = $this->input->post('judul');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');
            $kategori = $this->input->post('kategori');
            $status = $this->input->post('status');

            $where = array(
                'artikel_id' => $id
            );

            $data = array(
                'artikel_judul' => $judul,
                'artikel_slug' => $slug,
                'artikel_konten' => $konten,
                'artikel_kategori' => $kategori,
                'artikel_status' => $status,
            );

            $this->M_data->update_data($where, $data, 'artikel');


            if (!empty($_FILES['sampul']['name'])) {
                $config['upload_path']   = './gambar/artikel/';
                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('sampul')) {

                    // mengambil data tentang gambar
                    $gambar = $this->upload->data();

                    $data = array(
                        'artikel_sampul' => $gambar['file_name'],
                    );

                    $this->M_data->update_data($where, $data, 'artikel');

                    redirect(base_url() . 'dashboard/artikel');
                } else {
                    $this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());

                    $where = array(
                        'artikel_id' => $id
                    );
                    $data['artikel'] = $this->M_data->edit_data($where, 'artikel')->result();
                    $data['kategori'] = $this->M_data->get_data('kategori')->result();
                    $this->load->view('dashboard/v_header');
                    $this->load->view('dashboard/v_artikel_edit', $data);
                    $this->load->view('dashboard/v_footer');
                }
            } else {
                redirect(base_url() . 'dashboard/artikel');
            }
        } else {
            $id = $this->input->post('id');
            $where = array(
                'artikel_id' => $id
            );
            $data['artikel'] = $this->M_data->edit_data($where, 'artikel')->result();
            $data['kategori'] = $this->M_data->get_data('kategori')->result();
            $this->load->view('dashboard/v_header');
            $this->load->view('dashboard/v_artikel_edit', $data);
            $this->load->view('dashboard/v_footer');
        }
    }
    public function artikel_hapus($id)
    {
        $where = array(
            'artikel_id' => $id
        );

        $this->M_data->delete_data($where, 'artikel');

        redirect(base_url() . 'dashboard/artikel');
    }
    // end crud artikel


    // CRUD PAGES
}