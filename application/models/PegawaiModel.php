<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PegawaiModel extends CI_Model
{
    private $table = 'master_pegawai';

    // validasi
    public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'nip',
                'label' => 'NIP',
                'rules' => 'trim|required|numeric|min_length[5]|max_length[15]'
            ]
        ];
    }
      
    //menampilkan data pegawai berdasarkan id pegawai
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["pegawai_id" => $id])->row();
    }

    //menampilkan semua data pegawai
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("pegawai_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    //menyimpan data pegawai
    public function save()
    {
        // $date = "%Y-%m-%d";
        // $time = time();
        // $date = mdate($date, $time);
        $data = array(
            "pegawai_nama" => $this->input->post('nama'),
            "pegawai_nip" => $this->input->post('nip')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "pegawai_nama" => $this->input->post('nama'),
            "pegawai_nip" => $this->input->post('nip')
        );
        return $this->db->update($this->table, $data, array('pegawai_id' => $this->input->post('id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("pegawai_id" => $id));
    }
}