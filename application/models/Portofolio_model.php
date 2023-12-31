<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio_model extends CI_Model
{
    public $table = 'user';
    public $id = 'user.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $this->session->userdata('id_user'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get()
    {
        $query = $this->db->get($this->table)->result_array();
        return $query;
    }

    public function getByUserId($user_id)
    {
        $this->db->where($this->id, $user_id);
        return $this->db->get($this->table)->result_array();
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
        return $this->db->insert($this->table, $data);
    }

    public function getTotalModal($userId)
    {
        $this->db->select_sum('modal_masuk');
        $this->db->where($this->id, $userId);
        $query = $this->db->get($this->table);

        if ($query && $query->row()) {
            return $query->row()->modal_masuk ?: 0;
        } else {
            return 0;
        }
    }
    public function get_user_money($user_id)
    {
        $this->db->select('uang');
        $this->db->where($this->id, $user_id);
        $query = $this->db->get($this->table);

        if ($query && $query->row()) {
            return $query->row()->uang ?: 0;
        } else {
            return 0;
        }
    }
}
