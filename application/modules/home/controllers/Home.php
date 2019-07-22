<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $kursus = $this->Crud_model->listingOneAll('tbl_kursus', 'is_aktif', '1');
        $data = [
            'title'    => 'Ananda Private',
            'add'      => 'userAdd',
            'edit'      => 'userEdit',
            'kursus'    => $kursus,
            'content'   => 'home/home/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
