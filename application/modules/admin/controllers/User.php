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
        $user = $this->Crud_model->listing('tbl_user');
        $data = [
            'title'    => 'Manajemen User',
            'user'     => $user,
            'content'  => 'admin/user/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function admin()
    {
        $user = $this->Crud_model->listingOneAll('tbl_user', 'role', 'Admin');
        $data = [
            'title'    => 'Manajemen User',
            'user'     => $user,
            'content'  => 'admin/user/admin'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function tentor()
    {
        $user = $this->Crud_model->listingOneAll('tbl_user', 'role', 'Tentor');
        $data = [
            'title'    => 'Manajemen User',
            'user'     => $user,
            'content'  => 'admin/user/tentor'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function siswa()
    {
        $user = $this->Crud_model->listingOneAll('tbl_user', 'role', 'Siswa');
        $data = [
            'title'    => 'Manajemen User',
            'user'     => $user,
            'content'  => 'admin/user/tentor'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
