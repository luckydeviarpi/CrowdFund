<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat_model extends CI_Model
{
    protected $table = 'chat';
    protected $primaryKey = 'id_chat';
    protected $allowedFields = ['id', 'chat', 'waktu'];

    public function getMessagesWithUsernames()
    {
        $this->db->select('chat.id_chat, chat.pesan, chat.waktu, chat.id, user.nama ');
        $this->db->from('chat');
        $this->db->join('user', 'user.id = chat.id');
        $query = $this->db->get();

        return $query->getResult();
    }
}
