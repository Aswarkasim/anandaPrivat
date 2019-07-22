<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Poin extends CI_Controller
{

    public function index()
    {
        $data = [
            'title'    => 'Manajemen Poin',
            'content'   => 'admin/poin/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit()
    {
        $data = [
            'title'    => 'Manajemen Poin',
            'content'   => 'admin/poin/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
