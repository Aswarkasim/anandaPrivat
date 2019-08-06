<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tingkat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kursus_model');
    }

    function index()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_tingkat');

        $config['base_url']     = base_url('admin/tingkat/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 5;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $tingkat = $this->Kursus_model->listingTingkat($config['per_page'], $start);

        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/tingkat/add',
            'pagination'=> $pagination,
            'start'     => $start,
            'tingkat'  => $tingkat,
            'content'   => 'admin/tingkat/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $jenjang = $this->Crud_model->listing('tbl_jenjang');
        $valid = $this->form_validation;
        $valid->set_rules('nama_tingkat', 'Nama Tingkat', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'id_jenjang'      => $this->input->post('id_jenjang'),
                'nama_tingkat'      => $this->input->post('nama_tingkat')
            );
            $this->Crud_model->add('tbl_tingkat', $data);
            $this->session->set_flashdata('msg', 'Tingkat ditambah');
            redirect('admin/tingkat', 'refresh');
        }
        $data = [
            'title'   => 'Tingkat || Ananda Private',
            'jenjang'   => $jenjang,
            'content'   => 'admin/tingkat/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_tingkat)
    {
        $jenjang = $this->Crud_model->listing('tbl_jenjang');
        $tingkat = $this->Crud_model->listingOne('tbl_tingkat', 'id_tingkat', $id_tingkat);
        $valid = $this->form_validation;
        $valid->set_rules('nama_tingkat', 'Nama Tingkat', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'id_jenjang'      => $this->input->post('id_jenjang'),
                'nama_tingkat'      => $this->input->post('nama_tingkat')
            );
            $this->Crud_model->edit('tbl_tingkat', 'id_tingkat', $id_tingkat, $data);
            $this->session->set_flashdata('msg', 'Tingkat diedit');
            redirect('admin/tingkat', 'refresh');
        }
        $data = [
            'title'     => 'Tingkat || Ananda Private',
            'jenjang'  => $jenjang,
            'tingkat'  => $tingkat,
            'content'   => 'admin/tingkat/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_tingkat)
    {
        $this->Crud_model->delete('tbl_tingkat', 'id_tingkat', $id_tingkat);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/tingkat');
    }
}
