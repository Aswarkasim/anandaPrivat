<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kursus extends CI_Controller
{

    public function index()
    {
        $data = [
            'content'   => 'siswa/kursus/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail()
    {
        $data = [
            'content'   => 'siswa/kursus/detail_kursus'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
