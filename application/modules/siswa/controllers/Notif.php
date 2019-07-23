<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Notif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model', 'SM');

        if (($this->session->userdata('id_user') == "") && ($this->session->userdata('role') != "Siswa")) {
            redirect('home');
        }
    }


    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $notif = $this->SM->listingNotif('tbl_notif.id_user', $id_user)->result();
        $data = [
            'title'     => 'Pesan',
            'notif'     => $notif,
            'content'   => 'siswa/notif/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function detail($id_notif)
    {
        $notif = $this->SM->listingNotif('tbl_notif.id_notif', $id_notif)->row();
        $data = [
            'title'     => 'Edit Profil',
            'notif'     => $notif,
            'content'   => 'siswa/notif/detail'
        ];
        //lorem
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
