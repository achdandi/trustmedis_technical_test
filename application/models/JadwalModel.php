<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalModel extends CI_Model
{
    private $table = 'master_jadwal';
    private $table_poli = 'master_poli';
    private $table_pegawai = 'master_pegawai';

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
      
    //menampilkan data jadwal berdasarkan id jadwal
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["jadwal_id" => $id])->row();
    }

    //menampilkan semua data jadwal
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->select('pegawai_nama');
        $this->db->select('master_jadwal.pegawai_id');
        $this->db->distinct('master_jadwal.pegawai_id');
        $this->db->order_by('master_jadwal.poli_id', 'asc');
        $this->db->join('master_pegawai', 'master_jadwal.pegawai_id = master_pegawai.pegawai_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataNotIn()
    {
        $this->db->from($this->table);
        $this->db->select('pegawai_nama');
        $this->db->select('master_jadwal.pegawai_id');
        $this->db->distinct('master_jadwal.pegawai_id');
        $this->db->order_by('master_jadwal.poli_id', 'asc');
        $this->db->join('master_pegawai', 'master_jadwal.pegawai_id = master_pegawai.pegawai_id');
        $data = $this->db->get();
        $query_result = $data->result();
        $pegawai_id= array();
        foreach($query_result as $row){
            $pegawai_id[] = $row->pegawai_id;
        }
        $pegawai = implode(",",$pegawai_id);
        $ids = explode(",", $pegawai);
        
        $this->db->from($this->table_pegawai);
        $this->db->where_not_in('pegawai_id', $ids);
        $query = $this->db->get();
        return $query->result();
    }

    //menampilkan semua data dokter berdasarkan poli
    public function getDataByPoli($poli)
    {
        $this->db->from($this->table);
        $this->db->select('pegawai_nama');
        $this->db->select('master_pegawai.pegawai_id');
        $this->db->distinct('master_jadwal.pegawai_id');
        $this->db->where('master_jadwal.poli_id', $poli);
        $this->db->join('master_pegawai', 'master_jadwal.pegawai_id = master_pegawai.pegawai_id');
        $query = $this->db->get();
        return $query->result();
    }

    //menampilkan semua data jadwal berdasarkan poli
    public function getAllByPoli()
    {
        $this->db->from($this->table_poli);
        $this->db->order_by("poli_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }
    
    //menampilkan semua data jadwal berdasarkan hari
    public function getJadwalByPegawai($pegawai)
    {
        $this->db->from($this->table);
        $this->db->where('pegawai_id', $pegawai);
        $this->db->order_by('hari_id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    //menyimpan data jadwal
    public function save()
    {   
        $array = $this->input->post('hari');
        
        foreach ($this->input->post('hari') as $key => $jadwal_hari) {
            $data = array(
                "pegawai_id" => $this->input->post('dokter'),
                "poli_id" => $this->input->post('poli'),
                "hari_id" => $array[$key],
                "jadwal_mulai" => $this->input->post('jammulai'.$array[$key].''),
                "jadwal_selesai" => $this->input->post('jamselesai'.$array[$key].'')
            );
            $key++;
            $this->db->insert($this->table, $data);
        }
    }

    //edit data poli
    public function update($id)
    {
        $this->db->delete($this->table, array("pegawai_id" => $id));

        $array = $this->input->post('hari');
        
        foreach ($this->input->post('hari') as $key => $jadwal_hari) {
            $data = array(
                "pegawai_id" => $this->input->post('dokter'),
                "poli_id" => $this->input->post('poli'),
                "hari_id" => $array[$key],
                "jadwal_mulai" => $this->input->post('jammulai'.$array[$key].''),
                "jadwal_selesai" => $this->input->post('jamselesai'.$array[$key].'')
            );
            $key++;
            $this->db->insert($this->table, $data);
        }
    }

    //hapus data poli
    public function delete($id)
    {
        return $this->db->delete($this->table, array("pegawai_id" => $id));
    }
}