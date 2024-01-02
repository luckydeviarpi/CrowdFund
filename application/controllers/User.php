<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Usaha_model', 'usaha');
        $this->load->model('Investasi_model', 'investasi');
        $this->load->library('upload');
    }
    function index()
    {
        $user_id = $this->session->userdata('id');
        // Load data for the user, usaha, and investasi
        $data['user'] = $this->user->getBy();
        $data['usaha'] = $this->usaha->getByUserId($user_id);
        $data['investasi'] = $this->investasi->getByUserId($user_id); // Add this line
        // Calculate total modal
        $data['total_modal'] = $this->investasi->getTotalInvestasi($this->session->userdata('id'));
        $this->load->view("Header/header", $data);
        $this->load->view("User/vw_profile", $data);
        $this->load->view("Footer/footer", $data);
    }
    function halamanedit()
    {
        $data['user'] = $this->user->getBy();
        $this->load->view("Header/header", $data);
        $this->load->view("User/vw_autentikasi", $data);
        $this->load->view("Footer/footer", $data);
    }
    function halamaneditprofil()
    {
        $data['user'] = $this->user->getBy();
        $this->load->view("Header/header", $data);
        $this->load->view("User/vw_editprofil", $data);
        $this->load->view("Footer/footer", $data);
    }
    public function edit()
    {
        $status_autentikasi = 'Sudah Autentikasi';
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $no_telepon = $this->input->post('no_telepon');

        if (!empty($_FILES['foto_ktp']['name'])) {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_ktp')) {
                $upload_data = $this->upload->data();
                $foto_ktp = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            $foto_ktp = null;
        }

        if (!empty($_FILES['foto_npwp']['name'])) {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto_npwp')) {
                $upload_data = $this->upload->data();
                $foto_npwp = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            $foto_npwp = null;
        }
        if (!empty($_FILES['foto_asli']['name'])) {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto_asli')) {
                $upload_data = $this->upload->data();
                $foto_asli = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            $foto_asli = null;
        }
        $data = array(
            'status_autentikasi' => $status_autentikasi,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'no_telepon' => $no_telepon,
            'foto_ktp' => $foto_ktp,
            'foto_npwp' => $foto_npwp,
            'foto_asli' => $foto_asli
        );

        $this->user->update(array('email' => $this->session->userdata('email')), $data);
        redirect('user');
    }
    public function editprofil()
    {
        $status_autentikasi = 'Sudah Autentikasi';
        $nama = $this->input->post('nama');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $no_telepon = $this->input->post('no_telepon');

        if (!empty($_FILES['foto_asli']['name'])) {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto_asli')) {
                $upload_data = $this->upload->data();
                $foto_asli = $upload_data['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            $foto_asli = null;
        }
        $data = array(
            'nama' => $nama,
            'status_autentikasi' => $status_autentikasi,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'no_telepon' => $no_telepon,
            'foto_asli' => $foto_asli
        );

        $this->user->update(array('email' => $this->session->userdata('email')), $data);
        redirect('user');
    }
}
