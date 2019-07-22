<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function index()
    {
        $data = [
            'content'   => 'siswa/profil/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function coba()
    {
        $data = [
            'content'   => 'siswa/profil/coba'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit_profil()
    {
        $data = [
            'content'   => 'siswa/profil/edit_profil'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
