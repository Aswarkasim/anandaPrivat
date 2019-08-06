<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $this->db->from('tbl_kategori');

        $config['base_url']     = base_url('admin/Kategori/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 5;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $kategori = $this->Crud_model->listing('tbl_kategori', $config['per_page'], $start);
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/kategori/add',
            'pagination'=> $pagination,
            'start'     => $start,
            'kategori'  => $kategori,
            'content'   => 'admin/kategori/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama_kategori', 'Nama Kategori', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_kategori'      => $this->input->post('nama_kategori')
            );
            $this->Crud_model->add('tbl_kategori', $data);
            $this->session->set_flashdata('msg', 'Kategori ditambah');
            redirect('admin/kategori', 'refresh');
        }
        $data = [
            'title'   => 'Kategori || Ananda Private',
            'content'   => 'admin/kategori/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_kategori)
    {
        $kategori = $this->Crud_model->listingOne('tbl_kategori', 'id_kategori', $id_kategori);
        $valid = $this->form_validation;
        $valid->set_rules('nama_kategori', 'Nama Kategori', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_kategori'      => $this->input->post('nama_kategori')
            );
            $this->Crud_model->edit('tbl_kategori', 'id_kategori', $id_kategori, $data);
            $this->session->set_flashdata('msg', 'Kategori diedit');
            redirect('admin/kategori', 'refresh');
        }
        $data = [
            'title'     => 'Kategori || Ananda Private',
            'kategori'  => $kategori,
            'content'   => 'admin/kategori/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_kategori)
    {
        $this->Crud_model->delete('tbl_kategori', 'id_kategori', $id_kategori);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/kategori');
    }
}
