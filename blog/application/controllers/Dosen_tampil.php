<?php

class Dosen_tampil extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // selanjutnya tinggal kita render data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('dosen/tampil', $data);
        $this->load->view('layout/footer');
    }
}
