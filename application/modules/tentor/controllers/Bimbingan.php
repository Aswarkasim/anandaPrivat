<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Bimbingan extends CI_Controller
{

    public function index()
    {

        $data = [
            'content'   => 'tentor/bimbingan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function detail()
    {

        $data = [
            'content'   => 'tentor/bimbingan/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
