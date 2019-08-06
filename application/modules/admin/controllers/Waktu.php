<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Waktu extends CI_Controller
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
        $this->db->from('tbl_waktu');

        $config['base_url']     = base_url('admin/waktu/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 3;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $waktu = $this->Crud_model->listing('tbl_waktu', $config['per_page'], $start);
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/waktu/add',
            'pagination'=> $pagination,
            'start'     => $start,
            'waktu'  => $waktu,
            'content'   => 'admin/waktu/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama_waktu', 'Nama Waktu', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('awal', 'Waktu mulai', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('akhir', 'Waktu Akhir', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_waktu'      => $this->input->post('nama_waktu'),
                'awal'            => $this->input->post('awal'),
                'akhir'           => $this->input->post('akhir')
            );
            $this->Crud_model->add('tbl_waktu', $data);
            $this->session->set_flashdata('msg', 'Waktu ditambah');
            redirect('admin/waktu', 'refresh');
        }
        $data = [
            'title'   => 'Waktu || Ananda Private',
            'content'   => 'admin/waktu/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_waktu)
    {
        $waktu = $this->Crud_model->listingOne('tbl_waktu', 'id_waktu', $id_waktu);
        $valid = $this->form_validation;
        $valid->set_rules('nama_waktu', 'Nama Waktu', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('awal', 'Waktu mulai', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('akhir', 'Waktu Akhir', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_waktu'      => $this->input->post('nama_waktu'),
                'awal'            => $this->input->post('awal'),
                'akhir'           => $this->input->post('akhir')
            );
            $this->Crud_model->edit('tbl_waktu', 'id_waktu', $id_waktu, $data);
            $this->session->set_flashdata('msg', 'Waktu diedit');
            redirect('admin/waktu', 'refresh');
        }
        $data = [
            'title'     => 'Waktu || Ananda Private',
            'waktu'  => $waktu,
            'content'   => 'admin/waktu/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_waktu)
    {
        $this->Crud_model->delete('tbl_waktu', 'id_waktu', $id_waktu);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/waktu');
    }
}
