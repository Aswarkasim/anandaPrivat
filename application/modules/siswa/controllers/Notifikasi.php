<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('id_user') == "") && ($this->session->userdata('role') != "Siswa")) {
            redirect('home');
        }
    }

    public function index()
    {
        $data = [
            'title'     => 'Edit Profil',
            'content'   => 'siswa/notifikasi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function detail()
    {
        $data = [
            'title'     => 'Edit Profil',
            'content'   => 'siswa/notifikasi/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
