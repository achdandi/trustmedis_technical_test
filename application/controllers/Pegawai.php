<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("PegawaiModel"); //load model pegawai
        $this->load->model("PoliModel"); //load model poli
    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = "List Data Pegawai";
        $data["data_pegawai"] = $this->PegawaiModel->getAll();
        $this->load->view('template_header');
        $this->load->view('pegawai/index', $data);
    }

    //method add digunakan untuk menampilkan form tambah data pegawai
    public function add()
    {        
        $Pegawai = $this->PegawaiModel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Pegawai->rules()); //menerapkan rules validasi pada pegawai
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada pegawai
        if ($validation->run()) {
            $Pegawai->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pegawai berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect("pegawai");
        }
        $data["title"] = "List Data Pegawai";
        $data["data_pegawai"] = $this->PegawaiModel->getAll();
        $data["data_poli"] = $this->PoliModel->getAll();
        $this->load->view('template_header');
        $this->load->view('pegawai/add', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pegawai');

        $Pegawai = $this->PegawaiModel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Pegawai->rules()); //menerapkan rules validasi pada pegawai

        if ($validation->run()) {
            $Pegawai->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect("pegawai");
        }

        $data["title"] = "Edit Data Pegawai";
        $data["data_pegawai"] = $Pegawai->getById($id);
        $data["data_poli"] = $this->PoliModel->getAll();
        if (!$data["data_pegawai"]) show_404();
        $this->load->view('template_header');
        $this->load->view('pegawai/edit', $data);
    }

    public function delete($id = null)
    {
        // $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->PegawaiModel->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mahasiswa berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        redirect("pegawai");        
    }
}