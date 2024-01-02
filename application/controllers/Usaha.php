<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usaha extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Usaha_model', 'usaha');
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
        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;
        $this->load->model('User_model', 'user');
        $this->load->model('Usaha_model', 'usaha');

        $this->load->library('upload', $config);

        $data['user'] = $this->user->getBy();

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
        redirect('User');
    }
    public function halamaneditusaha($id_usaha)
    {
        $this->load->model('Usaha_model', 'usaha');
        $this->load->model('User_model', 'user');

        $data['user'] = $this->user->getBy();
        $data['usaha'] = $this->usaha->getById($id_usaha);

        $this->load->view("Header/header", $data);
        $this->load->view("Usaha/vw_edit_usaha", $data);
        $this->load->view("Footer/footer", $data);
    }

    public function edit_usaha($id_usaha)
    {
        $nama_usaha = $this->input->post('nama_usaha');
        $deskripsi = $this->input->post('deskripsi');
        $alamat = $this->input->post('alamat');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');

        $this->load->model('Usaha_model', 'usaha');

        $data_usaha = [
            'nama_usaha' => $nama_usaha,
            'deskripsi' => $deskripsi,
            'alamat' => $alamat,
            'provinsi' => $provinsi,
            'kota' => $kota,
        ];

        // Update data in the database
        $this->usaha->update(['id_usaha' => $id_usaha], $data_usaha);
        redirect('User');
    }

    public function detailusaha($id_usaha)
    {
        $this->load->model('Usaha_model', 'usaha');
        $this->load->model('User_model', 'user');

        $data['user'] = $this->user->getBy();
        $data['usaha'] = $this->usaha->getById($id_usaha);

        $this->load->view("Header/header", $data);
        $this->load->view("Usaha/vw_detail_usaha", $data);
        $this->load->view("Footer/footer", $data);
    }
}
