<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('id_user') == "") || $this->session->userdata('role') != "Admin") {
            redirect('error');
        }
    }


    public function index()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_user');

        $config['base_url']     = base_url('admin/user/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 5;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $user = $this->Crud_model->listing('tbl_user', $config['per_page'], $start);
        $data = [
            'title'    => 'Manajemen User',
            'pagination'=> $pagination,
            'start'     => $start,
            'user'     => $user,
            'content'  => 'admin/user/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function admin()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_user');

        $config['base_url']     = base_url('admin/user/admin');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 5;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $user = $this->Crud_model->listingOneAll('tbl_user', 'role', 'Admin', $config['per_page'], $start);
        $data = [
            'title'    => 'Manajemen User',
            'pagination'=> $pagination,
            'start'     => $start,
            'user'     => $user,
            'content'  => 'admin/user/admin'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function tentor()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_user');

        $config['base_url']     = base_url('admin/user/tentor');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 5;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $user = $this->Crud_model->listingOneAll('tbl_user', 'role', 'Tentor', $config['per_page'], $start);
        $data = [
            'title'    => 'Manajemen User',
            'pagination'=> $pagination,
            'start'     => $start,
            'user'     => $user,
            'content'  => 'admin/user/tentor'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function siswa()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_user');

        $config['base_url']     = base_url('admin/user/tentor');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 5;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $user = $this->Crud_model->listingOneAll('tbl_user', 'role', 'Siswa', $config['per_page'], $start);
        $data = [
            'title'    => 'Manajemen User',
            'pagination'=> $pagination,
            'start'     => $start,
            'user'     => $user,
            'content'  => 'admin/user/tentor'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
