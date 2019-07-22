<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kompetensi extends CI_Controller
{

    public function index()
    {
        $data = [
            'content'   => 'siswa/kompetensi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
