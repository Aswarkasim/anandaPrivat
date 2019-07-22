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
        $id_tentor = $this->session->userdata('id_user');
        $bimbingan = $this->PM->listingBimbingan('tbl_online.id_tentor', $id_tentor)->result();
        // print_r($bimbingan)
        $data = [
            'title'     => 'Siswa bimbingan',
            'bimbingan'  => $bimbingan,
            'content'   => 'tentor/bimbingan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function detail($id_online)
    {
        $online = $this->PM->listingBimbingan('tbl_online.id_online', $id_online)->row();

        $data = [
            'title'     => 'Bimbingan || ' . $online->nama_lengkap,
            'online'    => $online,
            'content'   => 'tentor/bimbingan/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
