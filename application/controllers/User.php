<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }
    function index()
    {
        $data['user'] = $this->userrole->getBy();
<<<<<<< Updated upstream
        $this->load->view("Header/header", $data);
        $this->load->view("User/vw_profile", $data);
        $this->load->view("Footer/footer", $data);
=======
        $this->load->view("Header/header");
        $this->load->view("User/vw_profile", $data);
        $this->load->view("Footer/footer");
    }
    function halamanedit()
    {
        $data['user'] = $this->userrole->getBy();
        $this->load->view("Header/header");
        $this->load->view("User/vw_autentikasi", $data);
        $this->load->view("Footer/footer");
    }
    public function edit()
    {
        $status_autentikasi = 'Sudah Autentikasi';
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $no_telepon = $this->input->post('no_telepon');

        if (!empty($_FILES['foto_ktp']['name'])) {
            $config['upload_path']   = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 2048;
            $config['encrypt_name']  = TRUE;

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
            $config['upload_path']   = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 2048;
            $config['encrypt_name']  = TRUE;

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
            $config['upload_path']   = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 2048;
            $config['encrypt_name']  = TRUE;

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
        $this->userrole->update($status_autentikasi, $provinsi, $kota, $no_telepon, $foto_ktp, $foto_npwp, $foto_asli);
        redirect('user');
>>>>>>> Stashed changes
    }
}
