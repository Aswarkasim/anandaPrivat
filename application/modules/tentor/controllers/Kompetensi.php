<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kompetensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentor/profil_model');
    }

    public function index()
    {

        $data = [
            'content'   => 'tentor/kompetensi/index',
            'kursus'    => $this->profil_model->fetch_kursus()
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Poin.php */
