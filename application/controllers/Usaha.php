<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usaha extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usaha_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("Header/header", $data);
        $this->load->view("Usaha/usaha", $data);
        $this->load->view("Footer/footer", $data);
    }

    public function halamantambahusaha()
    {
        $this->load->model('Usaha_model', 'usaha');
        $this->load->model('User_model', 'user');
        $data['user'] = $this->user->getBy();
        $this->load->view("Header/header", $data);
        $this->load->view("Usaha/vw_tambah_usaha", $data);
        $this->load->view("Footer/footer", $data);
    }

    public function tambah_usaha()
    {
        $this->load->model('Usaha_model', 'usaha');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

<<<<<<< Updated upstream
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
=======


        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        $id_user = $data['user']['id'];
        $data_usaha = [
            'nama_usaha' => $this->input->post('nama_usaha'),
            'tanggal_pembuatan' => date('Y-m-d'),
            'deskripsi' => $this->input->post('deskripsi'),
            'alamat' => $this->input->post('alamat'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'modal_akhir' => $this->input->post('modal_akhir'),
            'modal_masuk' => 0,
            'status' => 'Diajukan',
            'id_user' => $id_user,
        ];
        $foto1 = null;
        $foto2 = null;
        $foto3 = null;
        $proposal = null;

        // File Upload for foto1
        if (!empty($_FILES['foto1']['name'])) {
            if ($this->upload->do_upload('foto1')) {
                $upload_data = $this->upload->data();
                $foto1 = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
>>>>>>> Stashed changes
        }

        if (!empty($_FILES['foto2']['name'])) {
            if ($this->upload->do_upload('foto2')) {
                $upload_data = $this->upload->data();
                $foto2 = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }

        if (!empty($_FILES['foto3']['name'])) {
            if ($this->upload->do_upload('foto3')) {
                $upload_data = $this->upload->data();
                $foto3 = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }

        if (!empty($_FILES['proposal']['name'])) {
            if ($this->upload->do_upload('proposal')) {
                $upload_data = $this->upload->data();
                $proposal = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }

        $data_usaha['foto1'] = $foto1;
        $data_usaha['foto2'] = $foto2;
        $data_usaha['foto3'] = $foto3;
        $data_usaha['proposal'] = $proposal;

        // Insert data into the database
        $this->usaha->insert($data_usaha);

        // Redirect or show success message as needed
    }
}
