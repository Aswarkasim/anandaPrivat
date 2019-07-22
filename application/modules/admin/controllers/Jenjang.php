<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jenjang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $jenjang = $this->Crud_model->listing('tbl_jenjang');
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/jenjang/add',
            'jenjang'  => $jenjang,
            'content'   => 'admin/jenjang/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama_jenjang', 'Nama Jenjang', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_jenjang'      => $this->input->post('nama_jenjang')
            );
            $this->Crud_model->add('tbl_jenjang', $data);
            $this->session->set_flashdata('msg', 'Jenjang ditambah');
            redirect('admin/jenjang', 'refresh');
        }
        $data = [
            'title'   => 'Jenjang || Ananda Private',
            'content'   => 'admin/jenjang/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_jenjang)
    {
        $jenjang = $this->Crud_model->listingOne('tbl_jenjang', 'id_jenjang', $id_jenjang);
        $valid = $this->form_validation;
        $valid->set_rules('nama_jenjang', 'Nama Jenjang', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_jenjang'      => $this->input->post('nama_jenjang')
            );
            $this->Crud_model->edit('tbl_jenjang', 'id_jenjang', $id_jenjang, $data);
            $this->session->set_flashdata('msg', 'Jenjang diedit');
            redirect('admin/jenjang', 'refresh');
        }
        $data = [
            'title'     => 'Jenjang || Ananda Private',
            'jenjang'  => $jenjang,
            'content'   => 'admin/jenjang/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_jenjang)
    {
        $this->Crud_model->delete('tbl_jenjang', 'id_jenjang', $id_jenjang);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/jenjang');
    }
}
