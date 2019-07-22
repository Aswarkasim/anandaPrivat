<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Poin extends CI_Controller
{

    public function index()
    {

        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_user);

        $data = [
            'title'     => "Poin " . $user->nama_lengkap,
            'profil'      =>  $user,
            'content'   => 'tentor/poin/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function tambah_poin()
    {

        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_user);

        $data = [
            'title'     => "Tambah Poin",
            'content'   => 'tentor/poin/tambah_poin'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Poin.php */
