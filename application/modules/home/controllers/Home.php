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

    public function allkursus()
    {
        $kursusCount = $this->Crud_model->listingOneAll('tbl_kursus', 'is_aktif', '1');

        //config
        $config['base_url']     = base_url('home/home/allkursus');
        $config['total_rows']   = count($kursusCount);
        $config['per_page']     = 10;

        $pagination = $this->pagination->initialize($config);
        $start = $this->uri->segment(4);

        $kursus = $this->Crud_model->listingOneAll('tbl_kursus', 'is_aktif', '1', $config['per_page'], $start);
        $data = [
            'title'     => 'Ananda Private',
            'add'       => 'userAdd',
            'pagination' => $pagination,
            'start'     => $start,
            'edit'      => 'userEdit',
            'kursus'    => $kursus,
            'content'   => 'home/home/allkursus'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
