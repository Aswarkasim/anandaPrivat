<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Bimbingan extends CI_Controller
{

    public function index()
    {

        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_user);

        $data = [
            'title'     => "Bimbingan " . $user->nama_lengkap,
            'profil'      =>  $user,
            'content'   => 'tentor/bimbingan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function detail()
    {

        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_user);

        $data = [
            'title'     => "Detail Bimbingan",
            'profil'      =>  $user,
            'content'   => 'tentor/bimbingan/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
