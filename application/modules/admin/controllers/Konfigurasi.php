<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

    function index()
    {
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/kategori/add',
            'kategori'  => $kategori,
            'content'   => 'admin/konfigurasi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
