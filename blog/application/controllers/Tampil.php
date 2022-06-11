<?php

class Tampil extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        // selanjutnya tinggal kita render data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/tampil', $data);
        $this->load->view('layout/footer');
    }
}
