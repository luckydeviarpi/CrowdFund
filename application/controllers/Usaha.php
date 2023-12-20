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

        $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required', [
            'required' => 'Nama Usaha Wajib di isi'
        ]);

        $this->form_validation->set_rules('modal_butuh', 'Modal Butuh', 'required', [
            'required' => 'Modal Butuh Wajib di isi'
        ]);

        $this->form_validation->set_rules('modal_terima', 'Modal Terima', 'required', [
            'required' => 'Modal Terima Wajib di isi'
        ]);

        $this->form_validation->set_rules('tanggal_pembuatan', 'Tanggal Pembuatan', 'required', [
            'required' => 'Tanggal Pembuatan Wajib di isi'
        ]);

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors(); // For debugging purposes
            $this->load->view('Header/header', $data);
            $this->load->view('Usaha/vw_tambah_usaha', $data);
            $this->load->view('Footer/footer', $data);
        } else {
            $data = [
                'nama_usaha' => $this->input->post('nama_usaha'),
                'modal_butuh' => $this->input->post('modal_butuh'),
                'modal_terima' => $this->input->post('modal_terima'),
                'tanggal_pembuatan' => $this->input->post('tanggal_pembuatan'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];

            // Set modal_terima to 0 if not provided
            if (empty($data['modal_terima'])) {
                $data['modal_terima'] = 0;
            }

            $upload_image = $_FILES['foto']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/uploads/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $new_image = $this->upload->data('file_name');
                    $data['foto'] = $new_image;
                } else {
                    echo $this->upload->display_errors();
                    return; // Exit the function if image upload fails
                }
            }

            $this->db->insert('usaha', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Usaha Berhasil Ditambah!</div>');
            redirect('Usaha');
        }
    }
}
