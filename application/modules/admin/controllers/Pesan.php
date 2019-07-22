<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title'     => 'Pesan Admin',
            'content'   => 'admin/pesan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detailtambahpoin()
    {
        $data = [
            'title'     => 'Pesan Admin',
            'content'   => 'admin/pesan/detailtambahpoin'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
