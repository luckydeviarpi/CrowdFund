<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Chat_model');
  }

  // public function index($userId = null)
  // {
  //   $data['chatList'] = $this->Chat_model->getChatList();
  //   if ($userId !== null) {
  //       $data['chatUser'] = $this->Chat_model->getChat($userId);
  //   } else {
  //       $data['chatList'] = $this->Chat_model->getChatList();
  //   }
  //   $this->load->view("Chat/vw_chat",$data);
  // }

  // public function chatWithUser($userId = null)
  //   {
      

  //   $this->load->view('Chat/vw_chat', $data);
  //   }

  public function index($userId = null)
{
    $data['chatList'] = $this->Chat_model->getChatList();

    if ($userId !== null) {
        $data['chatUser'] = $this->Chat_model->getChat($userId);
    }
    

    $this->load->view("Chat/vw_chat", $data);
}

public function sendMessage()
{
    $userId = $this->input->post('userId');
    $message = $this->input->post('message');

    // Lakukan validasi atau manipulasi data jika diperlukan

    $this->Chat_model->insertMessage($userId, $message);

    // Redirect atau tampilkan kembali halaman chat
    redirect("Chat/index/$userId");
}



}


