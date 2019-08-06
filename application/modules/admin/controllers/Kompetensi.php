<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kompetensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kursus_model', 'KS');
    }

    public function index()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_kompetensi');

        $config['base_url']     = base_url('admin/kompetensi/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 10;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $kompetensi = $this->KS->listingKompetensi($config['per_page'], $start);

        $data = [
            'title'          => 'Tambah Poin',
            'pagination'     => $pagination,
            'start'          => $start,
            'kompetensi'     => $kompetensi,
            'content'        => 'admin/kompetensi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function status($id_kompetensi)
    {
        $dataRead = [
            'is_read'  => 1
        ];
        $this->Crud_model->edit('tbl_kompetensi', 'id_kompetensi', $id_kompetensi, $dataRead);
        $kompetensi = $this->Crud_model->listingOne('tbl_kompetensi', 'id_kompetensi', $id_kompetensi);
        if ($kompetensi->is_aktif == 0) {
            $data = [
                'is_aktif'  => 1
            ];
            $this->Crud_model->edit('tbl_kompetensi', 'id_kompetensi', $id_kompetensi, $data);
            $this->session->set_flashdata('msg', $kompetensi->nama_kompetensi . ' disable');
            redirect('admin/kompetensi');
        } else {
            $data = [
                'is_aktif'  => 0
            ];
            $this->Crud_model->edit('tbl_kompetensi', 'id_kompetensi', $id_kompetensi, $data);
            $this->session->set_flashdata('msg',  $kompetensi->nama_kompetensi . ' enable');
            redirect('admin/kompetensi');
        }
    }
}
