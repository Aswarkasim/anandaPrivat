<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/Siswa_model', 'SM');
        if (($this->session->userdata('id_user') == "") && ($this->session->userdata('role') != "Siswa")) {
            redirect('home');
        }
    }


    public function index()
    {
        $id_siswa = $this->session->userdata('id_user');
        $keranjang = $this->SM->listingKeranjang('tbl_order.id_siswa', $id_siswa)->result();
        $totalHarga = $this->db->query("SELECT SUM(total) AS total FROM tbl_order WHERE id_siswa = '$id_siswa'")->row();

        $data = [
            'title'     => 'Anada Private || Keranjang',
            'totalHarga' => $totalHarga,
            'keranjang' => $keranjang,
            'content'   => 'siswa/keranjang/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function batal($id_order)
    {
        $this->Crud_model->delete('tbl_order', 'id_order', $id_order);
        $this->session->flashdata('msg', 'dihapus');
        redirect('siswa/keranjang', 'refresh');
    }
}
