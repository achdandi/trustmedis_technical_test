<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PoliModel extends CI_Model
{
    private $table = 'master_poli';

    // validasi
    public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ]
        ];
    }
      
    //menampilkan data poli berdasarkan id poli
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["poli_id" => $id])->row();
    }

    //menampilkan semua data poli
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("poli_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    //menyimpan data poli
    public function save()
    {
        $data = array(
            "poli_nama" => $this->input->post('nama')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data poli
    public function update()
    {
        $data = array(
            "poli_nama" => $this->input->post('nama')
        );
        return $this->db->update($this->table, $data, array('poli_id' => $this->input->post('id')));
    }

    //hapus data poli
    public function delete($id)
    {
        return $this->db->delete($this->table, array("poli_id" => $id));
    }
}