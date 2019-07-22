<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('id_user') == "") || $this->session->userdata('role') != "Admin") {
            redirect('error');
        }
    }


    public function index()
    {
        $data = [
            'content'   => 'admin/dashboard/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
        //$this->load->view('welcome_message');
    }

    public function home()
    {
        // $data = [
        //     'content'   => 'admin/dashboard/index'
        // ];

        // $this->load->view('layout/wrapper', $data, FALSE);
        $this->load->view('bantuan');
    }
}
