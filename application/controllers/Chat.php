<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_model');
        $this->load->model('User_model', 'user');
        $this->load->model('Usaha_model', 'usaha');
        $this->load->model('Investasi_model', 'investasi');
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

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['chatList'] = $this->Chat_model->getChatList();
        $data['currentUserId'] = $data['user']['id']; // Use the id from the logged-in user as currentUserId
        $this->load->view("Header/header", $data);
        $this->load->view("Chat/vw_chat", $data);
        $this->load->view("Footer/footer", $data);
    }

    public function sendMessage()
    {
        $userId = $this->input->post('id');
        $message = $this->input->post('message');

        // Debugging: Check if you're getting the correct values
        // echo "User ID: $userId, Message: $message"; exit;

        // Validate and insert the message
        $this->Chat_model->insertMessage($userId, $message);

        // Redirect or display the chat page
    }
}


