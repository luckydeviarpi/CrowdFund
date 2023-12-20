<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->Chat_model = new ChatModel();
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

public function chat(){
  $data['messages'] = $this->chatModel->getMessagesWithUsernames();

  $this->load->view("Header/header");
  $this->load->view("Chat/vw_chat");
  $this->load->view("Footer/footer");
}

}


