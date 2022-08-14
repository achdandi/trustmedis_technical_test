<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HariModel extends CI_Model
{
    private $table = 'master_hari';

    //menampilkan semua data poli
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("hari_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }
}