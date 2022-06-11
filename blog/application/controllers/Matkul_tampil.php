<?php

class Matkul_tampil extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        // selanjutnya tinggal kita render data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('matakuliah/tampil', $data);
        $this->load->view('layout/footer');
    }
}
