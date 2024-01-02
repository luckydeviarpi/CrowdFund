<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usaha_model');
        $this->load->model('Portofolio_model'); // Assuming you have a Portofolio_model
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Portofolio";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Fetch the user's money value
        $user_id = $data['user']['id'];
        $data['user_money'] = $this->Usaha_model->getTotalModal($user_id);

        // Fetch data usaha
        $data['usaha'] = $this->Usaha_model->getByUserId($user_id);

        $this->load->view("Header/header", $data);
        $this->load->view("portofolio/vw_portofolio", $data);
        $this->load->view("Footer/footer", $data);
    }

    public function portofolioselesai()
    {
        $data['judul'] = "Halaman Portofolio";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Fetch the user's money value
        $user_id = $data['user']['id'];
        $data['user_money'] = $this->Portofolio_model->get_user_money($user_id);

        // Fetch user's completed portofolio data
        $data['usaha_selesai'] = $this->Usaha_model->getByUserId($user_id, 'Selesai');

        $this->load->view("Header/header", $data);
        $this->load->view("portofolio/vw_portofolio_selesai", $data);
        $this->load->view("Footer/footer", $data);
    }
}
