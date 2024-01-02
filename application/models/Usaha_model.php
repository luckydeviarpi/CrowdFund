<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usaha_model extends CI_Model
{
    public $table = 'usaha';
    public $id = 'usaha.id_usaha';

    public function __construct()
    {
        parent::__construct();
    }
    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $query = $this->db->get();
        $result = $query->result_array();

        return (!empty($result)) ? $result[0] : null;
    }

    public function get()
    {
        $query = $this->db->get($this->table)->result_array();
        return $query;
    }


    public function getByUserId($user_id)
    {
        $this->db->where('id_user', $user_id);
        return $this->db->get($this->table)->result_array();
    }

    public function getById($id_usaha)
    {
        $this->db->where('id_usaha', $id_usaha);
        return $this->db->get($this->table)->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function tambah_usaha($data)
    {
        return $this->db->insert('usaha', $data);
    }
    public function getInvestasiSum($id_usaha)
    {
        $this->db->select_sum('jumlah_investasi', 'total_investasi');
        $this->db->where('id_usaha', $id_usaha);
        $query = $this->db->get('investasi');
        $result = $query->row_array();

        return (!empty($result['total_investasi'])) ? $result['total_investasi'] : 0;
    }
    public function getInvestasiCount($id_usaha)
    {
        $this->db->where('id_usaha', $id_usaha);
        $query = $this->db->get('investasi');
        return $query->num_rows();
    }
    public function getTotalModal($userId)
    {
        $this->db->select_sum('modal_masuk');
        $this->db->where('id_user', $userId);
        $query = $this->db->get('usaha');
        if ($query && $query->row()) {
            return $query->row()->modal_masuk ?: 0;
        } else {
            return 0;
        }
    }
}
