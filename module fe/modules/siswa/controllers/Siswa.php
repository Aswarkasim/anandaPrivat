<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function index()
    {
        $data = [
            'content'   => 'siswa/profil/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit()
    {
        $data = [
            'content'   => 'siswa/profil/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    
    public function detailkursus()
    {
        $data = [
            'content'   => 'siswa/profil/detailkursus'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
