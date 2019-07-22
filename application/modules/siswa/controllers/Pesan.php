<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
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
            'title'     => 'Pesan',
            'content'   => 'siswa/pesan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function detail()
    {
        $data = [
            'title'     => 'Edit Profil',
            'content'   => 'siswa/pesan/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
