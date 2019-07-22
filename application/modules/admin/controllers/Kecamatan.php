<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kursus_model');
    }

    function index()
    {
        $kecamatan = $this->Kursus_model->listingKec();

        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/kecamatan/add',
            'kecamatan'  => $kecamatan,
            'content'   => 'admin/kecamatan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $kabupaten = $this->Crud_model->listing('tbl_kabupaten');
        $valid = $this->form_validation;
        $valid->set_rules('nama_kecamatan', 'Nama Kecamatan', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_kecamatan'      => $this->input->post('nama_kecamatan'),
                'id_kabupaten'      => $this->input->post('id_kabupaten')
            );
            $this->Crud_model->add('tbl_kecamatan', $data);
            $this->session->set_flashdata('msg', 'Kecamatan ditambah');
            redirect('admin/kecamatan', 'refresh');
        }
        $data = [
            'title'   => 'Kecamatan || Ananda Private',
            'kabupaten'  => $kabupaten,
            'content'   => 'admin/kecamatan/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_kecamatan)
    {
        $kecamatan = $this->Crud_model->listingOne('tbl_kecamatan', 'id_kecamatan', $id_kecamatan);
        $valid = $this->form_validation;
        $valid->set_rules('nama_kecamatan', 'Nama Kecamatan', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_kecamatan'      => $this->input->post('nama_kecamatan'),
                'id_kecamatan'      => $this->input->post('id_kecamatan')
            );
            $this->Crud_model->edit('tbl_kecamatan', 'id_kecamatan', $id_kecamatan, $data);
            $this->session->set_flashdata('msg', 'Kecamatan diedit');
            redirect('admin/kecamatan', 'refresh');
        }
        $data = [
            'title'     => 'Kecamatan || Ananda Private',
            'kecamatan'  => $kecamatan,
            'content'   => 'admin/kecamatan/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_kecamatan)
    {
        $this->Crud_model->delete('tbl_kecamatan', 'id_kecamatan', $id_kecamatan);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/kecamatan');
    }
}
