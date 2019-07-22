<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Online extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kursus_model', 'KM');
    }

    public function index()
    {
        $online = $this->KM->listingOnline();
        $data = [
            'title'    => 'Manajemen Poin',
            'online'    => $online,
            'content'   => 'admin/online/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail($id_online)
    {
        $online = $this->KM->listingOnlineOne($id_online);
        $data = [
            'title'     => 'Edit Profil',
            'online'    => $online,
            'content'   => 'admin/online/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */
