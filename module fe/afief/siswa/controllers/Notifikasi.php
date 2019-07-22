<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{

    public function index()
    {
        $data = [
            'content'   => 'siswa/notifikasi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
