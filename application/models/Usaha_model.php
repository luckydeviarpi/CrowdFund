<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usaha_model extends CI_Model
{
  public $table = 'usaha';
  public $id = 'usaha.id';

  // ------------------------------------------------------------------------

  public function __construct()
  {
      parent::__construct();
  }

  public function get()
  {
      $query = $this->db->get($this->table);
      return $query->result_array();
  }

  public function getByid($id)
  {
      $this->db->where('id', $id);
      $query = $this->db->get($this->table);
      return $query->row_array();
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
}
