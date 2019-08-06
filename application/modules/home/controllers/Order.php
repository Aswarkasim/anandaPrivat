<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentor/Profil_model', 'm');
        $this->load->model('admin/Kursus_model', 'k');
        $this->load->model('home/Order_model', 'o');
        $this->load->helper('string');

        if ($this->session->userdata('id_user') == "" || $this->session->userdata('role') != "Siswa") {
            $this->session->set_flashdata('msg_er', 'Anda belum login sebagai siswa');
            redirect('home', 'refresh');
        }
    }


    public function buat_order($id_kursus)
    {

        $kursus = $this->k->listingOneKursus($id_kursus);
        $paket = $this->Crud_model->listing('tbl_paket');
        $jenjang = $this->Crud_model->listing('tbl_jenjang');
        $tingkat = $this->Crud_model->listing('tbl_tingkat');
        $waktu = $this->Crud_model->listing('tbl_waktu');
        $tentor = $this->m->listing();
        $valid = $this->form_validation;

        $abcd = $this->input->post('id_paket');
        $valid = $this->form_validation->set_rules('id_paket', 'Paket', 'required|callback_select_validate');
        $abcd = $this->input->post('id_waktu');
        $valid = $this->form_validation->set_rules('id_waktu', 'Waktu', 'required|callback_select_validate');
        $abcd = $this->input->post('id_jenjang');
        $valid = $this->form_validation->set_rules('id_jenjang', 'Jenjang', 'required|callback_select_validate');
        $abcd = $this->input->post('id_tingkat');
        $valid = $this->form_validation->set_rules('id_tingkat', 'Tingkat', 'required|callback_select_validate');

        // Zonasi Tentor
        // $id_user = $this->session->userdata('id_user');
        // $alamat = $this->o->listingZonasiSiswa($id_user);
        // $id_zonasi = $alamat->id_zonasi;
        // $tentorZona = $this->o->listingZonasi($id_zonasi);


        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'Ananda Private || Pilih Kursus',
                'paket'     => $paket,
                'jenjang'   => $jenjang,
                'tingkat'   => $tingkat,
                'waktu'     => $waktu,
                // 'tentor'    => $tentorZona,
                'kursus'    => $kursus,
                'content'   => 'home/order/index'
            ];

            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $id_siswa = $this->session->userdata('id_user');
            $i = $this->input;
            $data = array(
                'id_order'          => random_string('numeric', '10'),
                'id_siswa'          => $id_siswa,
                'id_kursus'         => $id_kursus,
                'id_paket'          => $i->post('id_paket'),
                'id_waktu'          => $i->post('id_waktu'),
                'id_jenjang'        => $i->post('id_jenjang'),
                'id_tingkat'        => $i->post('id_tingkat'),
                'total'             => $kursus->harga,
                'is_valid'            => '0'
            );
            $this->Crud_model->add('tbl_order', $data);
            $this->session->set_flashdata('msg', 'Data telah disimpan');
            //$this->orderData($data['id_order']);
            redirect(base_url('home/order/tentor/' . $data['id_order']), 'refresh');
        }
    }

    function orderData($id_order)
    {
        $order = $this->Crud_model->listingOne('tbl_order', 'id_order', $id_order);
    }

    function finish($id_order)
    {
        $order = $this->o->listingOne($id_order);

        $data = [
            'title'    => 'Ananda Private || Order Kursus',
            'order'     => $order,
            'content'   => 'home/order/finish'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }


    function tentor($id_order)
    {
        // Zonasi Tentor
        $order = $this->o->listingOne($id_order);
        $id_user = $this->session->userdata('id_user');
        $alamat = $this->o->listingZonasiSiswa($id_user);
        $id_zonasi = $alamat->id_zonasi;
        $id_kursus = $order->id_kursus;
        $tentorZona = $this->o->listingZonasi($id_zonasi, $id_kursus);

        // print_r($tentorZona);
        // die;
        $data = [
            'title'    => 'Ananda Private || Order Kursus',
            'tentor'    => $tentorZona,
            'order'     => $order,
            'content'   => 'home/order/tentor'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function detail_tentor($id_tentor)
    {
        $tentor = $this->Crud_model->listingOne('tbl_tentor', 'id_user', $id_tentor);
        $data = [
            'title'    => 'Ananda Private || ',
            'tentor'    => $tentor,
            'content'   => 'home/order/detailtentor'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function pilih_tentor($id_tentor)
    {
        $i = $this->input;
        $id_order = $i->post('id_order');
        $data = [
            'id_tentor'      => $id_tentor
        ];
        $this->Crud_model->edit('tbl_order', 'id_order', $id_order, $data);
        $this->session->set_flashdata('msg', 'Tentor dipilih');
        redirect('home/order/tentor/' . $id_order);
    }


    function select_validate($abcd)
    {
        if ($abcd == "none") {
            $this->form_validation->set_message('select_validate', '%s belum dipilih');
            return false;
        } else {
            return true;
        }
    }

    function test()
    {
        $id_user = $this->session->userdata('id_user');
        $alamat = $this->o->listingZonasiSiswa($id_user);
        $id_zonasi = $alamat->id_zonasi;
        $Tentorzona = $this->o->listingZonasi($id_zonasi);
        print_r($Tentorzona);
        die;
        // foreach ($zona as $row) {
        //     print_r($row);
        // }
    }
}
