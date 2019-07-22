<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Bimbingan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model', 'PM');
    }


    public function index()
    {

        $id_user = $this->session->userdata('id_user');
        $bimbingan = $this->PM->listingBimbingan('tbl_online.id_tentor', $id_user)->result();


        $data = [
            'title'     => "Bimbingan ",
            'bimbingan'      =>  $bimbingan,
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
