<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alamat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/Profil_model', 'pm');
        if (($this->session->userdata('id_user') == "") && ($this->session->userdata('role') != "Siswa")) {
            redirect('home');
        }
    }


    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        // $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
        $siswa = $this->pm->listingOne($id_user);
        $provinsi = $this->Crud_model->listing('tbl_provinsi');
        $kabupaten = $this->Crud_model->listing('tbl_kabupaten');
        $kecamatan = $this->Crud_model->listing('tbl_kecamatan');

        $data = [
            'title'     => 'Pengaturan Alamat',
            'siswa'    => $siswa,
            'provinsi'    => $provinsi,
            'kabupaten'    => $kabupaten,
            'kecamatan'    => $kecamatan,
            'content'   => 'siswa/profil/alamat'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
