<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $paket = $this->Crud_model->listing('tbl_paket');
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/paket/add',
            'paket'  => $paket,
            'content'   => 'admin/paket/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama_paket', 'Nama Paket', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('hari', 'Hari', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('jumlah_pertemuan', 'Jumlah Pertemuan', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_paket'      => $this->input->post('nama_paket'),
                'hari'      => $this->input->post('hari'),
                'jumlah_pertemuan'      => $this->input->post('jumlah_pertemuan')
            );
            $this->Crud_model->add('tbl_paket', $data);
            $this->session->set_flashdata('msg', 'Paket ditambah');
            redirect('admin/paket', 'refresh');
        }
        $data = [
            'title'   => 'Paket || Ananda Private',
            'content'   => 'admin/paket/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_paket)
    {
        $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
        $valid = $this->form_validation;
        $valid->set_rules('nama_paket', 'Nama Paket', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_paket'      => $this->input->post('nama_paket'),
                'hari'      => $this->input->post('hari'),
                'jumlah_pertemuan'      => $this->input->post('jumlah_pertemuan')
            );
            $this->Crud_model->edit('tbl_paket', 'id_paket', $id_paket, $data);
            $this->session->set_flashdata('msg', 'Paket diedit');
            redirect('admin/paket', 'refresh');
        }
        $data = [
            'title'     => 'Paket || Ananda Private',
            'paket'  => $paket,
            'content'   => 'admin/paket/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_paket)
    {
        $this->Crud_model->delete('tbl_paket', 'id_paket', $id_paket);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/paket');
    }
}
