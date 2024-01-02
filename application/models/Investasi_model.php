<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Investasi_model extends CI_Model
{
    public $table = 'investasi';
    public $id = 'investasi.id_investasi';

    public function __construct()
    {
        parent::__construct();
    }

    public function getByUserId($user_id)
    {
        $this->db->select('jumlah_investasi');
        $this->db->where('id_user', $user_id);
        $query = $this->db->get($this->table);

        if ($query && $query->row()) {
            return $query->row()->jumlah_investasi ?: 0;
        } else {
            return 0;
        }
    }

    public function getByUsahaId($usaha_id)
    {
        $this->db->select('jumlah_investasi');
        $this->db->where('id_usaha', $usaha_id);
        $query = $this->db->get($this->table);

        if ($query && $query->row()) {
            return $query->row()->jumlah_investasi ?: 0;
        } else {
            return 0;
        }
    }

    public function getById($id_investasi)
    {
        $this->db->where('id_investasi', $id_investasi);
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
        $this->db->where('id_investasi', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function tambah_investasi($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getTotalInvestasi($userId)
    {
        $this->db->select_sum('jumlah_investasi');
        $this->db->where('id_user', $userId);
        $query = $this->db->get($this->table);
        if ($query && $query->row()) {
            return $query->row()->jumlah_investasi ?: 0;
        } else {
            return 0;
        }
    }
    public function getInvestasiByUsahaId($id_usaha)
    {
        $this->db->select_sum('jumlah_investasi');
        $this->db->where('id_usaha', $id_usaha);
        $query = $this->db->get('investasi');

        return $query->row()->jumlah_investasi;
    }
    public function getInvestasiByUsahaId2($id_usaha)
    {
        $this->db->select('jumlah_investasi');
        $this->db->where('id_usaha', $id_usaha);
        $query = $this->db->get('investasi');
        return $query->row_array();
    }
}