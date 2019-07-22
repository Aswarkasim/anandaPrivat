<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tentor extends CI_Controller
{

    public function index()
    {
        $data = [
            'content'   => 'tentor/profil/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit()
    {
        $data = [
            'content'   => 'tentor/profil/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function gantipassword()
    {
        $data = [
            'content'   => 'tentor/profil/gantipassword'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function kompetensi()
    {
        $data = [
            'content'   => 'tentor/profil/kompetensi'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function bimbingan()
    {
        $data = [
            'content'   => 'tentor/profil/bimbingan'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detailbimbingan()
    {
        $data = [
            'content'   => 'tentor/profil/detailbimbingan'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function deposit()
    {
        $data = [
            'content'   => 'tentor/profil/deposit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
  
}

