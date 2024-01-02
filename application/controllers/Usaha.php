<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usaha extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usaha_model');
    }

    public function index()
    {
        // $this->load->view("Header/header");
        // $this->load->view("Investasi/vw_invest");
        // $this->load->view("Footer/footer");
    }

    public function tambah_usaha()
    {
        $data['judul'] = "Halaman ";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->library('form_validation');
        $this->load->library('upload');

        $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required', [
            'required' => 'Nama Usaha Wajib di isi'
        ]);

        $this->form_validation->set_rules('modal_akhir', 'Modal Butuh', 'required', [
            'required' => 'Modal Butuh Wajib di isi'
        ]);


        $this->form_validation->set_rules('kontak', 'kontak', 'required', [
            'required' => 'Kontak Wajib di isi'
        ]);

        $this->form_validation->set_rules('tanggal_pembuatan', 'Tanggal Pembuatan', 'required', [
            'required' => 'Tanggal Pembuatan Wajib di isi'
        ]);

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Header/header', $data);
            $this->load->view('Usaha/vw_tambah_usaha', $data);
            $this->load->view('Footer/footer', $data);
        } else {
            $data = [
                'nama_usaha' => $this->input->post('nama_usaha'),
                'modal_akhir' => $this->input->post('modal_akhir'),
                'tanggal_pembuatan' => $this->input->post('tanggal_pembuatan'),
                'kontak' => $this->input->post('kontak'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];

            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/uploads/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $new_image = $this->upload->data('file_name');
                    $data['foto'] = $new_image;
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('Usaha/tambah_usaha');
                    return; // Added return to prevent further execution
                }
            }

            $this->load->model('Usaha_model');

            if ($this->Usaha_model->insert($data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Usaha Berhasil Ditambah!</div>');
                redirect('Usaha');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menambah data usaha. Silakan coba lagi.</div>');
                redirect('Usaha/tambah_usaha');
            }
        }
    }
}
