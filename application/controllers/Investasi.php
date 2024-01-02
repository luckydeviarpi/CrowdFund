<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Investasi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("Header/header");
    $this->load->view("Investasi/vw_invest");
    $this->load->view("Footer/footer");
}
public function detail(){
  $this->load->view("Header/header");
  $this->load->view("Investasi/vw_detailusaha");
  $this->load->view("Footer/footer");
}

}
