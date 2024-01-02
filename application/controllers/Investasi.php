<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Investasi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Usaha_model', 'usaha'); // Load the model with an alias 'usaha'
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    // Modify this line to include the total_investasi for each usaha
    $data['usaha'] = $this->getUsahaWithTotalInvestasi();

    $this->load->view("Header/header", $data);
    $this->load->view("Investasi/vw_invest", $data);
    $this->load->view("Footer/footer", $data);
  }

  // Add this new function to get usaha with total_investasi
  private function getUsahaWithTotalInvestasi()
  {
    $usahaList = $this->usaha->get();

    foreach ($usahaList as &$us) {
      $us['total_investasi'] = $this->usaha->getInvestasiSum($us['id_usaha']);

      // Get the count of records in the investasi table for the current usaha
      $us['jumlah_investor'] = $this->usaha->getInvestasiCount($us['id_usaha']);
    }

    return $usahaList;
  }



  public function detail($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['usaha_detail'] = $this->usaha->getById($id);
    $data['usaha'] = $this->getUsahaWithTotalInvestasi();

    // Check if $data['usaha_detail'] is not empty before accessing the 'total_investasi' key
    if (!empty($data['usaha_detail'])) {
      $data['usaha_detail']['total_investasi'] = $this->usaha->getInvestasiSum($data['usaha_detail']['id_usaha']);
      $data['usaha_detail']['jumlah_investor'] = $this->usaha->getInvestasiCount($data['usaha_detail']['id_usaha']);
    }

    $data['active'] = "Overview";
    $this->load->view("Header/header", $data);
    $this->load->view("Investasi/vw_detailusaha", $data);
    $this->load->view("Footer/footer");
  }

  public function invest($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['usaha_detail'] = $this->usaha->getById($id);
    $data['usaha'] = $this->getUsahaWithTotalInvestasi();

    // Check if $data['usaha_detail'] is not empty before accessing the 'total_investasi' key
    if (!empty($data['usaha_detail'])) {
      $data['usaha_detail']['total_investasi'] = $this->usaha->getInvestasiSum($data['usaha_detail']['id_usaha']);
      $data['usaha_detail']['jumlah_investor'] = $this->usaha->getInvestasiCount($data['usaha_detail']['id_usaha']);
    }

    $data['active'] = "Overview";
    $this->load->view("Header/header", $data);
    $this->load->view("Investasi/vw_detailusaha", $data);
    $this->load->view("Investasi/vw_modal_invest", $data); // Load the modal view
    $this->load->view("Footer/footer");
  }
}
