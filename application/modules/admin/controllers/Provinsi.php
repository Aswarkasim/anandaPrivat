<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $provinsi = $this->Crud_model->listing('tbl_provinsi');
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/provinsi/add',
            'provinsi'  => $provinsi,
            'content'   => 'admin/provinsi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama_provinsi', 'Nama Provinsi', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_provinsi'      => $this->input->post('nama_provinsi')
            );
            $this->Crud_model->add('tbl_provinsi', $data);
            $this->session->set_flashdata('msg', 'Provinsi ditambah');
            redirect('admin/provinsi', 'refresh');
        }
        $data = [
            'title'   => 'Provinsi || Ananda Private',
            'content'   => 'admin/provinsi/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_provinsi)
    {
        $provinsi = $this->Crud_model->listingOne('tbl_provinsi', 'id_provinsi', $id_provinsi);
        $valid = $this->form_validation;
        $valid->set_rules('nama_provinsi', 'Nama Provinsi', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_provinsi'      => $this->input->post('nama_provinsi')
            );
            $this->Crud_model->edit('tbl_provinsi', 'id_provinsi', $id_provinsi, $data);
            $this->session->set_flashdata('msg', 'Provinsi diedit');
            redirect('admin/provinsi', 'refresh');
        }
        $data = [
            'title'     => 'Provinsi || Ananda Private',
            'provinsi'  => $provinsi,
            'content'   => 'admin/provinsi/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_provinsi)
    {
        $this->Crud_model->delete('tbl_provinsi', 'id_provinsi', $id_provinsi);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/provinsi');
    }
}
