<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pagination_model');
    }

    function index()
    {
        $this->session->unset_userdata('searchProvinsi');


        // Data Search
        if ($this->input->post('submit')) {
            $search = $this->input->post('searchProvinsi');
            $this->session->set_userdata('searchProvinsi', $search);
        } else {
            $search = $this->session->userdata('searchProvinsi');
        }

        $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_provinsi');

        $config['base_url']     = base_url('admin/provinsi/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 10;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $provinsi = $this->Crud_model->listing('tbl_provinsi', $config['per_page'], $start, $search);

        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/provinsi/add',
            'pagination' => $pagination,
            'start'     => $start,
            'search'    => $search,
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
