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
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_jenjang');

        $config['base_url']     = base_url('admin/jenjang/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 3;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $jenjang = $this->Crud_model->listing('tbl_jenjang', $config['per_page'], $start);
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/jenjang/add',
            'pagination'=> $pagination,
            'start'     => $start,
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
