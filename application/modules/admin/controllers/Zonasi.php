<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Zonasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kursus_model');
    }

    function index()
    {


        //$query = $this->Kursus_model->listingSama();
        // print_r($query);
        // die;
        $zonasi = $this->Kursus_model->listingZonasi('tbl_zonasi');
        $alamat = $this->Crud_model->listing('tbl_provinsi');

        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/zonasi/add',
            'zonasi'  => $zonasi,
            'alamat'  => $alamat,
            'content'   => 'admin/zonasi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $zonasi = $this->Kursus_model->listingZonasi('tbl_zonasi');
        $alamat = $this->Crud_model->listing('tbl_provinsi');
        $valid = $this->form_validation;
        $valid->set_rules('nama_zonasi', 'Nama zonasi', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_zonasi'      => $this->input->post('nama_zonasi'),
                'id_provinsi'      => $this->input->post('id_provinsi')

            );
            $this->Crud_model->add('tbl_zonasi', $data);
            $this->session->set_flashdata('msg', 'zonasi ditambah');
            redirect('admin/zonasi', 'refresh');
        }
        $data = [
            'title'   => 'zonasi || Ananda Private',
            'zonasi'  => $zonasi,
            'alamat'  => $alamat,
            'content'   => 'admin/zonasi/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_zonasi)
    {
        $zonasi = $this->Crud_model->listingOne('tbl_zonasi', 'id_zonasi', $id_zonasi);
        $alamat = $this->Crud_model->listing('tbl_provinsi');
        $valid = $this->form_validation;
        $valid->set_rules('nama_zonasi', 'Nama zonasi', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_zonasi'      => $this->input->post('nama_zonasi'),
                'id_provinsi'      => $this->input->post('id_provinsi'),
                'id_zonasi'      => $id_zonasi
            );
            $this->Crud_model->edit('tbl_zonasi', 'id_zonasi', $id_zonasi, $data);
            $this->session->set_flashdata('msg', 'zonasi diedit');
            redirect('admin/zonasi', 'refresh');
        }
        $data = [
            'title'     => 'zonasi || Ananda Private',
            'zonasi'  => $zonasi,
            'alamat'  => $alamat,
            'content'   => 'admin/zonasi/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_zonasi)
    {
        $this->Crud_model->delete('tbl_zonasi', 'id_zonasi', $id_zonasi);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/zonasi');
    }

    function filter()
    {
        $id_provinsi = $this->input->post('id_provinsi');

        $zonasi = $this->Kursus_model->listingZonasiFilter($id_provinsi);
        print_r($zonasi);

        // $alamat = $this->Crud_model->listing('tbl_provinsi');
        // $data = [
        //     'title'     => 'zonasi || Ananda Private',
        //     'add'       => 'admin/zonasi/add',
        //     'zonasi'  => $zonasi,
        //     'alamat'  => $alamat,
        //     'content'   => 'admin/zonasi/index'
        // ];
        // $this->load->view('layout/wrapper', $data, FALSE);
    }
}
