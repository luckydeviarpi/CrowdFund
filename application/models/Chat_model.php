<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat_model extends CI_Model
{
    protected $table = 'chat';
    public function getChatList()
    {
        $this->db->select('user.id, user.nama');
        $this->db->from('user');
        $this->db->join('chat', 'user.id = chat.id_chat', 'left');
        $this->db->group_by('user.id');
        $query = $this->db->get();

        return $query->result();
    }

    public function getChat($userId)
    {
        $this->db->select('chat.id_chat, chat.pesan, chat.waktu, user.nama');
        $this->db->from('chat');
        $this->db->join('user', 'user.id = chat.id');
        $this->db->where('chat.id', $userId);
        $query = $this->db->get();

        return $query->result();
    }

    public function insertMessage($userId, $message)
    {
        $data = array(
            'id' => $userId, // Sesuaikan dengan nama kolom di tabel chat
            'pesan' => $message,
            'waktu' => date('Y-m-d H:i:s')
        );

        $this->db->insert('chat', $data);
    }
}
