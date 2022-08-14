<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("JadwalModel"); //load model jadwal
        $this->load->model("PegawaiModel"); //load model pegawai
        $this->load->model("PoliModel"); //load model poli
        $this->load->model("HariModel"); //load model hari
    }

    //method pertama yang akan di eksekusi
    public function index()
    {
        $data["jadwal"] = $this->JadwalModel->getAll();
        $this->load->view('template_header');
        $this->load->view('jadwal/index', $data);
    }

    //method add digunakan untuk menampilkan form tambah data Jadwal
    public function add()
    {
        $data["data_poli"] = $this->PoliModel->getAll();
        $data["data_pegawai"] = $this->JadwalModel->getDataNotIn();
        $this->load->view('template_header');
        $this->load->view('jadwal/add', $data);
    }

    public function save()
    {
        if(empty($this->input->post('hari'))){
            $data = array('message' => 'Mohon Pilih Jadwal Hari');
            $this->session->set_flashdata('message', $data);
            $this->session->keep_flashdata('message', $data);
            redirect('jadwal/add');
        }
        if(empty($this->input->post('dokter'))){
            $data = array('message' => 'Mohon Pilih Jadwal Hari');
            $this->session->set_flashdata('message', $data);
            $this->session->keep_flashdata('message', $data);
            redirect('jadwal/add');
        }
        if(empty($this->input->post('poli'))){
            $data = array('message' => 'Mohon Pilih Jadwal Hari');
            $this->session->set_flashdata('message', $data);
            $this->session->keep_flashdata('message', $data);
            redirect('jadwal/add');
        }
        // var_dump($this->input->post('hari'));
        $this->JadwalModel->save();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Poli berhasil disimpan. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect("jadwal");
    }

    public function edit($id = null)
    {
        $data["pegawai"] = $this->PegawaiModel->getById($id);
        $data["poli"] = $this->PoliModel->getAll();
        $data["jadwal"] = $this->JadwalModel->getJadwalByPegawai($id);
        $this->load->view('template_header');
        $this->load->view('jadwal/edit', $data);
    }

    public function update($id = null)
    {
        if(empty($this->input->post('hari'))){
            $data = array('message' => 'Mohon Pilih Jadwal Hari');
            $this->session->set_flashdata('message', $data);
            $this->session->keep_flashdata('message', $data);
            redirect('jadwal/edit/'.$this->input->post('dokter').'');
        }
        if(empty($this->input->post('dokter'))){
            $data = array('message' => 'Mohon Pilih Jadwal Hari');
            $this->session->set_flashdata('message', $data);
            $this->session->keep_flashdata('message', $data);
            redirect('jadwal/edit/'.$this->input->post('dokter').'');
        }
        if(empty($this->input->post('poli'))){
            $data = array('message' => 'Mohon Pilih Jadwal Hari');
            $this->session->set_flashdata('message', $data);
            $this->session->keep_flashdata('message', $data);
            redirect('jadwal/edit/'.$this->input->post('dokter').'');
        }
        // var_dump($this->input->post('hari'));
        $this->JadwalModel->update($this->input->post('dokter'));
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Poli berhasil disimpan. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect("jadwal");
    }

    public function delete($id = null)
    {
        // $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->JadwalModel->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mahasiswa berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        redirect("jadwal");        
    }
}