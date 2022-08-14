<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Poli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("PoliModel"); //load model poli
    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = "List Data Poli";
        $data["data_poli"] = $this->PoliModel->getAll();
        $this->load->view('template_header');
        $this->load->view('poli/index', $data);
    }

    //method add digunakan untuk menampilkan form tambah data Poli
    public function add()
    {        
        $Poli = $this->PoliModel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Poli->rules()); //menerapkan rules validasi pada Poli
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada Poli
        if ($validation->run()) {
            $Poli->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Poli berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect("poli");
        }
        $data["title"] = "List Data Poli";
        $data["data_poli"] = $this->PoliModel->getAll();
        $this->load->view('template_header');
        $this->load->view('poli/add', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('poli');

        $Poli = $this->PoliModel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Poli->rules()); //menerapkan rules validasi pada poli

        if ($validation->run()) {
            $Poli->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Poli berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect("poli");
        }

        $data["title"] = "Edit Data Poli";
        $data["data_poli"] = $Poli->getById($id);
        if (!$data["data_poli"]) show_404();
        $this->load->view('template_header');
        $this->load->view('poli/edit', $data);
    }

    public function delete($id = null)
    {
        // $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->PoliModel->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mahasiswa berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        redirect("poli");        
    }
}