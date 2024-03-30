<?php

class Matakuliah extends CI_Controller 
{
    Public function index()
    {
        $this->load->view('view-form-matakuliah');
        $this->load->helper('url');
    }

    Public function cetak()
    {
            
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks'  => $this->input->post('sks')
        ];

        $this->load->view('view-data-matakuliah', $data);
        
    }
}
?>