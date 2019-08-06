<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kursus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/Siswa_model', 'SM');

        is_logged_in('Siswa');
    }


    public function index()
    {
        $id_siswa = $this->session->userdata('id_user');
        $online = $this->SM->listingOnline('tbl_online.id_siswa', $id_siswa)->result();
        $data = [
            'title'     => 'Kursus Yang Diikuti',
            'online'    => $online,
            'content'   => 'siswa/kursus/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail_kursus($id_online)
    {
        $online = $this->SM->listingOnline('id_online', $id_online)->row();
        $data = [
            'title'     => 'Edit Profil',
            'online'    => $online,
            'content'   => 'siswa/kursus/detail_kursus'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function kirim_pesan()
    {
        $this->load->helper('string');
        $isi = $this->input->post('isi');
        ////ini kutambah

        $data = [
            'id_pesan'      => 'PSN' . random_string('numeric', '8'),
            'id_user'       => $this->session->userdata('id_user'),
            'isi'           => $isi,
            'is_read'       => 0,
            'date_created'  => date('y-m-d h:i:s')
        ];
        $this->Crud_model->add('tbl_pesan', $data);
        $this->session->flashdata('msg', 'Pesan dikirim');
    }
}
