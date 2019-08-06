<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kabupaten extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pagination_model');
        $this->load->model('admin/Kursus_model');
    }

    function index()
    {
        // Data Search
        if ($this->input->post('submit')) {
            $search = $this->input->post('searchKabupaten');
            $this->session->set_userdata('searchKabupaten', $search);
        } else {
            $search = $this->session->userdata('searchKabupaten');
        }


        // Config
        $this->db->like('nama_kabupaten', $search);
        $this->db->from('tbl_kabupaten');

        $config['base_url']     = base_url('admin/kabupaten/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 10;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $kabupaten = $this->Kursus_model->listingKab($config['per_page'], $start, $search);

        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/kabupaten/add',
            'pagination' => $pagination,
            'start'     => $start,
            'search'    => $search,
            'kabupaten'  => $kabupaten,
            'content'   => 'admin/kabupaten/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $provinsi = $this->Crud_model->listing('tbl_provinsi');
        $valid = $this->form_validation;
        $valid->set_rules('nama_kabupaten', 'Nama Kabupaten', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_kabupaten'      => $this->input->post('nama_kabupaten'),
                'id_provinsi'      => $this->input->post('id_provinsi')
            );
            $this->Crud_model->add('tbl_kabupaten', $data);
            $this->session->set_flashdata('msg', 'Kabupaten ditambah');
            redirect('admin/kabupaten', 'refresh');
        }
        $data = [
            'title'   => 'Kabupaten || Ananda Private',
            'provinsi'  => $provinsi,
            'content'   => 'admin/kabupaten/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_kabupaten)
    {
        $kabupaten = $this->Crud_model->listingOne('tbl_kabupaten', 'id_kabupaten', $id_kabupaten);
        $valid = $this->form_validation;
        $valid->set_rules('nama_kabupaten', 'Nama Kabupaten', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_kabupaten'      => $this->input->post('nama_kabupaten'),
                'id_provinsi'      => $this->input->post('id_provinsi')
            );
            $this->Crud_model->edit('tbl_kabupaten', 'id_kabupaten', $id_kabupaten, $data);
            $this->session->set_flashdata('msg', 'Kabupaten diedit');
            redirect('admin/kabupaten', 'refresh');
        }
        $data = [
            'title'     => 'Kabupaten || Ananda Private',
            'kabupaten'  => $kabupaten,
            'content'   => 'admin/kabupaten/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_kabupaten)
    {
        $this->Crud_model->delete('tbl_kabupaten', 'id_kabupaten', $id_kabupaten);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/kabupaten');
    }
}
